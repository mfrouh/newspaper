@extends('layouts.admin')
@section('title')
@lang('home.createcategory')
@endsection
@section('content')
<div class="container">
    <div class="card ">
            <div class="card-header bg-white">
                <a href="/category/create" class="btn btn-outline-primary btn-sm">@lang('home.create')</a>
            </div>
        <div class="card-body text-center">
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                 <tr>
                    <th>#</th>
                    <th>@lang('home.name')</th>
                    <th>#</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $k=> $category)
                    <tr>
                        <td>{{$k+1}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="/category/{{$category->id}}/edit" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                            @if(!$category->articles->count())
                            <a class="btn btn-outline-danger brdrd btn-sm" onclick="event.preventDefault();
                            document.getElementById('delete-category-{{$category->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                            <form id="delete-category-{{$category->id}}" action="/category/{{$category->id}}" method="post" style="display: none;">
                                @csrf
                                @method("DELETE")
                            </form>
                            @endif

                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
