<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request, String $id)
    {
        $users = Role::find($id)->users;
        return $users;
    }
}
