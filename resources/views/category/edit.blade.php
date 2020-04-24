@extends('layouts.admin')
@section('title')
@lang('home.editcategory')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-primary text-@lang('home.left')">@lang('home.editcategory')</div>
        <div class="card-body text-@lang('home.left')">
           <form action="/category/{{$category->id}}" method="POST" style="width:100%;" enctype="multipart/form-data">
             @csrf
             @method('put')
              <div class="form-group">
                 <label>@lang('home.name')</label>
                 <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="@lang('home.name')">
              </div>
              <div class="form-group text-center">
                 <input  type="submit" class="btn btn-primary" value="حفظ">
              </div>
           </form>
        </div>
    </div>
</div>
@endsection
