<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class mostread extends Component
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
        return view('components.mostread',[
            'articles'=>article::with('articleview')->orderby('id','desc')->where('publish','yes')->get()->sortbydesc('articleview')->take(4),
        ]);
    }
}
