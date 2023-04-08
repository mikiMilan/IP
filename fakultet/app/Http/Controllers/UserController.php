<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataFrame = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);

        $dataFrame['password'] = bcrypt($dataFrame['password']);

        $user = User::create($dataFrame);

        auth()->login($user);

        return redirect('/')->with('message', "Uspješno ste se prijavili!");
    }

    public function logout(Request $r)
    {
        auth()->logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect("/")->with('message', "Uspjesno ste se odjavili");
    }

    public function login()
    {
        return view('user.login');
    }

    public function authent(Request $request)
    {
        $dataFrame = $request->validate([
            'name'=>'required|min:3',
            'password'=>'required',
        ]);

        if(auth()->attempt($dataFrame)){
            $request->session()->regenerate();
            return redirect('/')->with('message', "Uspješno ste se prijavili!");
        }

        return back()->withErrors('name', 'Pogresno ime')->onlyInput('name');
    }
}
