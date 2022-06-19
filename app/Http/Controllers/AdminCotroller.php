<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCotroller extends Controller
{
    public function  index(){
        return view('admin.auth.login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
}
