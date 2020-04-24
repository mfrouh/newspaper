@extends('layouts.app')
@section('title')
@lang("home.titlewebsite")-{{$date}}
@endsection
@section('content')
<div class="container ">
 <div class="row mt-3 mb-3">
   <div class="col-12 mt-5">
      <div class="card mt-4 shadow-sm">
        <div class="card-body text-center">
          <i class="fa fa-quote-right ml-3 right "></i>
              <br>
              {{$date}}
              <br>
          <i class="fa fa-quote-left mr-3 left"></i><br>
        </div>
      </div>
   </div>
 </div>
 <div class="row">
    @foreach ($articles as $article)
    <div class="col-md-4 col-lg-3 col-12">
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
    </div>
    @endforeach
 </div>
 <div class="row text-center">
     <div class="col-12 text-center">
         {{$articles->links()}}
     </div>
 </div>
</div>
@endsection
