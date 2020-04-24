@extends('layouts.app')
@section('title')
@lang("home.titlewebsite")- البحث عن : {{$name}}
@endsection
@section('content')
<div class="container text-@lang('home.left') ">
 <div class="row mt-3 mb-3">
   <div class="col-12 mt-5">
      <div class="card mt-4 shadow-sm">
        <div class="card-body text-center">
          <i class="fa fa-quote-right ml-3 right "></i>
              <br>
              البحث عن : {{$name}}
              <br>
          <i class="fa fa-quote-left mr-3 left"></i><br>
        </div>
      </div>
   </div>
 </div>
 <hr>
 <p>@lang('home.articles')</p>
 <div class="row">
    @forelse ($articles as $article)
    <div class="col-md-4 col-lg-3 col-12">
       <a href="{{$article->path()}}" class="alink">
        <div class="card text-@lang('home.left') mb-3 shadow-sm">
         <div class="row">
            <div class="col-md-12 col-4">
                <a href="{{$article->path()}}" class="alink">
                   <img class="card-img-top" src="{{$article->imagepath()}}" alt="">
                </a>
                 <span data-id="{{$article->id}}" class="btn btn-primary btn-sm saved brdrd shadow-sm"><i class="fas fa-save"></i></span>
            </div>
            <div class="col-md-12 col-8">
                <a href="{{$article->path()}}" class="alink">
                   <div class="card-body">
                     {{$article->title}}
                   </div>
                </a>
            </div>
         </div>
        </div>
       </a>
    </div>
    @empty
    <p class="text-center col-12">@lang('home.notfoundresults')</p>
    @endforelse
 </div>
 <hr>
 <p>@lang('home.writers')</p>
 <div class="row mt-3">
    @forelse ($writers as $user)
    <div class="col-lg-3 col-6 mt-3">
        <a class="alink" href="/writer/{{$user->id}}">
         <div class="card mt-4 shadow-sm">
           <div class="card-body text-center">
             <img src="{{$user->imagepath()}}" class="img-writer shadow" style="right:120px">
             <i class="fa fa-quote-right ml-3 right "></i>
                 <br>
                 {{$user->name}}
                 <br>
             <i class="fa fa-quote-left mr-3 left"></i><br>
           </div>
         </div>
        </a>
      </div>
     @empty
     <p class="text-center col-12">@lang('home.notfoundresults')</p>
     @endforelse
 </div>
 <hr>
 <p>@lang('home.tags')</p>
 <div class="row mt-1 text-center">
    @forelse ($tags as $tag)
    <div class="col-lg-3 col-6 mt-1">
        <a class="alink" href="/tag/{{str_replace(' ','_',$tag->name)}}">
         <div class="card mt-3 shadow-sm">
           <div class="card-body text-center">
             <i class="fa fa-quote-right ml-3 right "></i>
                 <br>
                 # {{$tag->name}}
                 <br>
             <i class="fa fa-quote-left mr-3 left"></i><br>
           </div>
         </div>
        </a>
      </div>
     @empty
      <p class="text-center col-12">@lang('home.notfoundresults')</p>
     @endforelse
 </div>
</div>
@endsection
