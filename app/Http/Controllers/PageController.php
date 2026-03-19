<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function returnExchange()
    {
        return view('return-exchange'); // the Blade file we created
    }

    public function contact(){
        return view('contact');
    }
}
