<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class lastarticlecategory extends Component
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
        return view('components.lastarticlecategory',[
            'articles'=>article::orderby('id','desc')->where('category_id',$this->category->id)->where('publish','yes')->take(4)->get(),
        ]);
    }
}
