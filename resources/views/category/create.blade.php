@extends('layouts.admin')
@section('title')
@lang('home.createcategory')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-primary text-@lang('home.left')">@lang('home.createcategory')</div>
        <div class="card-body text-@lang('home.left')">
           <form action="/category" method="POST" style="width:100%;" enctype="multipart/form-data">
             @csrf
              <div class="form-group">
                 <label>@lang('home.name')</label>
                 <input type="text" name="name" class="form-control" placeholder="@lang('home.name')">
              </div>
              <div class="form-group text-center">
                 <input  type="submit" class="btn btn-primary" value="حفظ">
              </div>
           </form>
        </div>
    </div>
</div>
@endsection
