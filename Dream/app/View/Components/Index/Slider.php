<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;

class Slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $getDateSlider;
    public function __construct($getDate)
    {
        $this->getDateSlider=$getDate;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.slider');
    }
}
