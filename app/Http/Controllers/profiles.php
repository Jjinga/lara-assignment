<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profiles extends Controller
{
    

    public function index($user)
    {
    $user=User::findOrFail($user);
        return view('home',['user'=>$user]);
    }
}


