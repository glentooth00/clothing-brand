<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroBanner;

class HeroBannerController extends Controller
{
    public function index(){
        $heroes = HeroBanner::orderBy('created_at', 'desc')->get();
        return view('/collection', [
            'heroes' => $heroes
        ]);
    }
}
