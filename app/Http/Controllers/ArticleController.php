<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','checkrole:writer','block'])->except('show');
    }
    public function index()
    {
        $articles=article::where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::where('id',json_decode(auth()->user()->category_id))->get();
        return view('article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|image',
            'content'=>'required',
            'title'=>'required',
            ]);
         $article=new article();
         $article->user_id=auth()->user()->id;
         $article->content=$request->content;
         $article->title=$request->title;
         $article->category_id=$request->category_id;
         $article->publish=$request->publish;
         $article->social=$request->social;
         $article->slug_title=str_replace(' ','_',$request->title);
         if ($request->image) {
            $article->image=sorteimage('storage/article/',$request->image);
         }
         $article->save();
         foreach (tags($request->tags) as $key => $value) {
            $tag=new tag();
            $tag->name=$value;
            $tag->article_id=$article->id;
            $tag->save();
        }
         return redirect('/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article,$slag)
    {
    if($article->publish=="yes"){
       return view('article.show',compact('article'));
      }
      return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        if($article->user_id==auth()->user()->id){
        $categories=category::where('id',json_decode(auth()->user()->category_id))->get();
        return view('article.edit',compact(['article','categories']));
        }
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $this->validate($request,[
            'content'=>'required',
            'title'=>'required',
            ]);
         $article->user_id=auth()->user()->id;
         $article->content=$request->content;
         $article->title=$request->title;
         $article->social=$request->social;
         $article->publish=$request->publish;
         $article->slug_title=str_replace(' ','_',$request->title);
         if ($request->image) {
            Storage::delete('public/article/'.$article->image);
            $article->image=sorteimage('storage/article/',$request->image);
         }
         $article->save();

        $tags=tag::where('article_id',$article->id)->get();
        foreach ($tags as $key => $value) {
           if (!in_array($value->name,tags($request->tags))) {
               $value->delete();
           }
        }
       foreach (tags($request->tags) as $key => $value) {
           $tagfound=tag::where('name',$value)->where('article_id',$article->id)->first();
           if (!$tagfound) {
           $tag=new tag();
           $tag->name=$value;
           $tag->article_id=$article->id;
           $tag->save();
           }
       }
         return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
      Storage::delete('public/article/'.$article->image);
       $article->delete();
       return back();
    }
}
