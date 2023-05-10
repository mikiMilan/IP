<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(Request $r, String $id)
    {
        $user = Phone::find($id)->user;
        return $user;
    }
}
