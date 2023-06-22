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
    // public $listDreamBooks;
    // public function __construct($getDate)
    // {
    //     $this->listDreamBooks=$getDate;
    // }
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
