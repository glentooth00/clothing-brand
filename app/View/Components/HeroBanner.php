<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroBanner extends Component
{
    public $title;
    public $subtitle;
    public $button_text;
    public $button_link;
    public $image;

    public function __construct(
        $title = '',
        $subtitle = '',
        $button_text = '',
        $button_link = '#',
        $image = ''
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->button_text = $button_text;
        $this->button_link = $button_link;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.hero');
    }
}