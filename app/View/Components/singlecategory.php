<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class singlecategory extends Component
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
        return view('components.singlecategory',
        [
            'articles'=>article::where('category_id',$this->category->id)->where('publish','yes')->take(6)->get(),
        ]);
    }
}
