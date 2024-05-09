<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//This controller is for the main page
class HomeController extends Controller
{
    //With the __invoke function, we don't needed write the function name in the routes
    public function __invoke(){
        return view('home');
    }
}
