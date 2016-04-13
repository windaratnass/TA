<?php

namespace App\Http\Controllers;

class dashboardController extends Controller
{
    
    public function index()
    {
    	return view('login.login');
    }

    public function admin()
    {
    	return view('admin.index');
    }
}

 