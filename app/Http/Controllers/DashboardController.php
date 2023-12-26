<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    

    public function product_update(){
        return view('pages.product_update');
    }
}
