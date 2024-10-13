<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showListUser() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }
}