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
    public $getPuttBooks;
    public function __construct($getPuttBooks)
    {
        $this->getPuttBooks=$getPuttBooks;
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
