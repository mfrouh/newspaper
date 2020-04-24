<?php

namespace App\View\Components;

use App\article;
use Illuminate\View\Component;

class relatedarticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $article;
    public function __construct($article)
    {
        $this->article=$article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.relatedarticle',[
             'articles'=> article::whereHas('tags', function ($q) {
                   return $q->whereIn('name', $this->article->tags->pluck('name'));
              })
            ->where('id', '!=',  $this->article->id)
            ->take('4')
            ->orderBy('id','desc')
            ->where('publish','yes')
            ->get(),
        ]);
    }
}
