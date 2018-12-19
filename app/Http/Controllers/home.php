<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
     public function index()
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
