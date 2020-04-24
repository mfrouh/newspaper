<?php

namespace App\View\Components;

use App\User;
use Illuminate\View\Component;

class writercategory extends Component
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
        return view('components.writercategory',
        [
            'users'=>User::orderby('name','desc')->wherejsoncontains('category_id',$this->category->id)->take(8)->get(),
        ]);
    }
}
