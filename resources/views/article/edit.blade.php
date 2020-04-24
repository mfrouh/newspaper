@extends('layouts.admin')
@section('title')
@lang('home.editarticle')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-primary text-@lang('home.left')">@lang('home.editarticle')</div>
        <div class="card-body text-@lang('home.left')">

          <form action="\article\{{$article->id}}" method="POST" style="width:100%;" enctype="multipart/form-data">
            @csrf
              @method('PUT')
               <div class="form-group">
                  <label>@lang('home.title')</label>
                  <input type="text" name="title" class="form-control" placeholder="@lang('home.title')" value="{{$article->title}}">
               </div>
               <div class="form-group">
                  <label>@lang('home.content')</label>
                  <textarea id="editor"  name="content" class="form-control" placeholder="@lang('home.content')">{{$article->content}}</textarea>
               </div>
               <div class="form-group">
                <label>@lang('home.category')</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}" {{$article->category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
               <div class="form-group">
                <label>@lang('home.image')</label>
                <input  name="image" class="form-control" type="file"value="">
              </div>
              <div class="form-group">
                <label>@lang('home.social')</label>
                <input type="url"  name="social" class="form-control" value="{{$article->social}}">
             </div>
               <div class="form-group">
                  <label for="">@lang('home.tags')</label>
                  <input type="text" data-role="tagsinput" name="tags" id="" class="form-control" value="{{aptags($article->tags)}}" autofocus>
                </div>
                <div class="form-group">
                    <label>@lang('home.publish')</label>
                    <input type="radio" name="publish"  class=""{{$article->publish=='yes'?'checked':''}} value="yes"> نعم
                    <input type="radio" name="publish"  class=""{{$article->publish=='no'?'checked':''}} value="no"> لا
                 </div>
               <div class="form-group text-center">
                  <input  type="submit" class="btn btn-primary" value="حفظ">
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
