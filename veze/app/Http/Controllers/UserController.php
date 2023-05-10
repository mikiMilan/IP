<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // koristimo funkciju phone() u modelu User
    public function user_phone1(string $id)
    {        
        $phone = User::find($id)->phone;
        return $phone;
    }

    // ovo treba izbjegavati, komplikuje se kod
    // bez funkciju phone() u modelu User
    public function user_phone2(string $id)
    {
        $users = User::where('id', $id)->get()[0];
        $phone = Phone::where('id', $users->phone_id)->get();

        return $phone;
    }

    // koristimo funkciju roles() u modelu User
    public function user_roles(string $id)
    {        
        $roles = User::find($id)->roles;
        return $roles;
    }

    public function user_posts(string $id)
    {        
        $posts = User::find($id)->posts;
        return $posts;
    }
}
