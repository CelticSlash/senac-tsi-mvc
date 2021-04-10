<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function listar()
    {
        $users = User::all();

        return view('users.listar', ['users' => $users]);
    }
}
