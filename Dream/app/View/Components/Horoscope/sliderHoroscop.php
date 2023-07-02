<?php

namespace App\View\Components\horoscope;

use Illuminate\View\Component;

class sliderHoroscop extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public $getPuttBooks;
    // public function __construct($getPuttBooks)
    // {
    //     $this->getPuttBooks=$getPuttBooks;
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.horoscope.slider-horoscop');
    }
}
