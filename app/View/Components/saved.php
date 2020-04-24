<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class saved extends Component
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
        return view('components.saved',[
            'articles'=>article::whereIn('id',content())->orderby('id','desc')->where('publish','yes')->get(),
        ]);
    }
}
