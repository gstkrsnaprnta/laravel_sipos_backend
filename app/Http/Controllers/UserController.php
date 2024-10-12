<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // Mengambil data user dan mempaginasinya
        $users = \App\Models\User::paginate(10); // Menggunakan nama variabel $users
        return view('pages.users.index', compact('users')); // Menggunakan compact('users')
    }
}
