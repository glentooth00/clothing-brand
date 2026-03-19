<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::whereNull('category')
                            ->orWhere('category', '')
                            ->get();

        // Get men products
        $menProducts = Product::where('category', 'men')->take(8)->get();

        // Get women products
        $womenProducts = Product::where('category', 'women')->take(8)->get();

        return view('collections',[
            'products' => $products,
            'menProducts' => $menProducts,
            'womenProducts' => $womenProducts,
            'title' => 'Featured Products',
        ]);
    }
}
