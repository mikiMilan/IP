<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/novosti', function(){
    // komunikacija za bazom -> reyultat
    $novosti = [
        ['id'=>1, 'naziv'=>"Novost 1"],
        ['id'=>2, 'naziv'=>"Kod za ucionicu"],
        ['id'=>3, 'naziv'=>"Danas se očekuju pljuskovi"]
    ];

    $primjer = "<script>alert('radim nesto na sajtu!');</script>";

    return view('novosti', ['name'=>$primjer, 'novosti'=>$novosti]);
});

Route::get('/novost/{id}', function($id){

    //baza
    $db = [
        1=>['id'=>1, 'naziv'=>"Novost 1", 'opis'=>"sjnakjnk jka"],
        2=>['id'=>2, 'naziv'=>"Kod za ucionicu", 'opis'=>"usob7su"],
        3=>['id'=>3, 'naziv'=>"Danas se očekuju pljuskovi", 'opis'=>"U podurcju ..."]
    ];
    // rezultat iz baze

    if(key_exists($id, $db))
        $novost = $db[$id];
    else
        abort('404');

    return view('novost', $novost);
});

Route::get('/test', function(Request $request){
    // dd($request);
    return $request->ime;
});

// Route::get('/predmeti', [CourseController::class, 'index']);
// Route::get('/predmeti/create', [CourseController::class, 'create'])->middleware('auth');


Route::resource('/predmeti', CourseController::class, ['except'=>['index']])->middleware('auth');
Route::get('/predmeti', [CourseController::class, 'index']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authentX', [UserController::class, 'authent']);

