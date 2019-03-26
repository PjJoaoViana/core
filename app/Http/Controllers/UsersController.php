<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('users.index', compact('user'));
    }
}
