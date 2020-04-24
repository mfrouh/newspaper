@extends('layouts.admin')
@section('title')
@lang('home.createarticle')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-white">
            <a href="/article/create" class="btn btn-sm btn-outline-primary">@lang('home.create')</a>
        </div>
        <div class="card-body text-center">
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                 <tr>
                    <th>#</th>
                    <th>@lang('home.image')</th>
                    <th>@lang('home.category')</th>
                    <th>@lang('home.title')</th>
                    <th>@lang('home.content')</th>
                    <th>@lang('home.tags')</th>
                    <th>@lang('home.publish')</th>
                    <th>#</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $k=> $article)
                    <tr>
                        <td>{{$k+1}}</td>
                        <td><img src="{{$article->imagepath()}}" height="100px" width="100px" class="border-raduis-2"></td>
                        <td>{{$article->category->name}}</td>
                        <td>{{$article->title}}</td>
                        <td>
                              {{$article->content}}
                        </td>
                        <td>
                            @foreach ($article->tags as $tag)
                               <a href="/tag/{{str_replace(' ','_',$tag->name)}}" class="btn btn-sm btn-primary brdrd m-2">{{$tag->name}}</a>
                            @endforeach
                         </td>
                        <td>{{$article->publish}}</td>
                        <td>
                            <a href="/article/{{$article->id}}/edit" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger brdrd btn-sm" onclick="event.preventDefault();
                            document.getElementById('delete-article-{{$article->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                            <form id="delete-article-{{$article->id}}" action="/article/{{$article->id}}" method="post" style="display: none;">
                                @csrf
                                @method("DELETE")
                            </form>

                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
