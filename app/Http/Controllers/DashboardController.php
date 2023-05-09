<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        return view('dashboard');

    }

    public function viewProfile(){

        return view('viewProfile');

    }

    public function bookParcel(){

        return view('bookParcel');

    }

    
}
