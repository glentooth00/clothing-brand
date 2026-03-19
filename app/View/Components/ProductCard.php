<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $title;
    public $price;
    public $image;

    // Accept data from Blade
public function __construct($title = '', $price = 0, $image = '')
{
    $this->title = $title;
    $this->price = $price;
    $this->image = $image;
}

    public function render()
    {
        return view('components.product-card');
    }
}