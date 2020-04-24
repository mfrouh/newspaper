@extends('layouts.admin')
@section('title')
@lang('home.createarticle')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-primary text-@lang('home.left')">@lang('home.createarticle')</div>
        <div class="card-body text-@lang('home.left')">
           <form action="/article" method="POST" style="width:100%;" enctype="multipart/form-data">
             @csrf
              <div class="form-group">
                 <label>@lang('home.title')</label>
                 <input type="text" name="title" class="form-control" placeholder="@lang('home.title')">
              </div>
              <div  class="form-group">
                 <label>@lang('home.content')</label>
                 <textarea id="editor"   name="content" rows="5" class="form-control" placeholder="@lang('home.content')"></textarea>
              </div>
              <div class="form-group">
                <label>@lang('home.category')</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>@lang('home.image')</label>
                <input  name="image" class="form-control" type="file"value="">
             </div>
              <div class="form-group">
                 <label>@lang('home.tags')</label>
                 <input  name="tags" class="form-control" data-role="tagsinput" value="">
              </div>
              <div class="form-group">
                <label>@lang('home.social')</label>
                <input type="url" name="social" class="form-control" value="">
             </div>
             <div class="form-group">
                <label>@lang('home.publish')</label>
                <input type="radio" name="publish"  class="" value="yes"> نعم
                <input type="radio" name="publish"  class="" value="no"> لا
             </div>
              <div class="form-group text-center">
                 <input  type="submit" class="btn btn-primary" value="حفظ">
              </div>
           </form>
        </div>
    </div>
</div>
@endsection
