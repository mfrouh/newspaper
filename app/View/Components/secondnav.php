<?php

namespace App\View\Components;

use App\category;
use Illuminate\View\Component;

class secondnav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.secondnav',

        [
            'categories'=>category::all(),
        ]);
    }
}
