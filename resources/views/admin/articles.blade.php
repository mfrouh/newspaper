@extends('layouts.admin')
@section('title')
@lang('home.createarticle')
@endsection
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header bg-white">
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
                         <td>
                             <form action="/publisharticle" method="post">
                                 @csrf
                                <input type="hidden" name="id" value="{{$article->id}}">
                                <input type="hidden" name="publish"  value="{{$article->publish=='yes'?'no':'yes'}}">
                                <button type="submit" class="btn btn-outline-primary btn-sm">{{$article->publish}}</button>
                             </form>
                         </td>
                        <td>

                        </td>
                     </tr>
                    @endforeach

                </tbody>

            </table>
            <div class="row text-center">
                <div class="col-12">{{$articles->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
