<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PhoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/{id}/phone1', [UserController::class, 'user_phone1']);
Route::get('/user/{id}/phone2', [UserController::class, 'user_phone2']);
Route::get('/user/{id}/roles', [UserController::class, 'user_roles']);
Route::get('/user/{id}/posts', [UserController::class, 'user_posts']);

Route::get('/role/{id}', [RoleController::class, 'index']);

Route::get('/phone/{id}', [PhoneController::class, 'index']);

