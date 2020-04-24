<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class mostreadcategory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $category;
    public function __construct($category)
    {
        $this->category=$category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mostreadcategory',[
            'articles'=>article::with('articleview')->where('category_id',$this->category->id)->where('publish','yes')->orderby('id','desc')->get()->sortbydesc('articleview')->take(4),
        ]);
    }
}
