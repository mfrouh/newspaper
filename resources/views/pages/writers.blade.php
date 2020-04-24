@extends('layouts.app')
@section('title')
@lang("home.titlewebsite")
@endsection
@section('content')
<div class="container">
    <div class="row mt-3">
        @foreach ($users as $user)
        <div class="col-lg-3 col-6 mt-5">
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
        @endforeach
    </div>
</div>
@endsection
