<?php

namespace App\Http\Controllers\Admin;

class HomeController
{
    public function index()
    {
        $user = auth()->user();
        $name = $user ? $user->name : 'guest';
        // dd($user);
        return view('home', ['name' => $name]);
        // return view('home');
    }
}
