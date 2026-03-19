<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductGrid extends Component
{
    public $products;
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($products, $title = '')
    {
        $this->products = $products;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.product-grid');
    }
}