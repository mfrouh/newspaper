<?php

namespace App\View\Components;

use App\User;
use Illuminate\View\Component;

class writermain extends Component
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
        return view('components.writermain',
        [
            'users'=>User::orderby('name','desc')->take(8)->get(),
        ]);
    }
}
