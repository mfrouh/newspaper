<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class secondmainpage extends Component
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
        return view('components.secondmainpage',
        [
            'articles'=>article::orderby('id','desc')->where('publish','yes')->skip(8)->take(8)->get(),
        ]);
    }
}
