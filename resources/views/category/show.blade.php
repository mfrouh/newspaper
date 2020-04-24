@extends('layouts.app')
@section('title')
{{$category->name}}
@endsection
@section('content')
<div class="container text-@lang('home.left')">
    <div class="row">
        <div class="col-lg-9">
            <x-singlecategory :category="$category" />
        </div>
        <div class="col-lg-3 p-0">
            <x-lastarticlecategory :category="$category" />
            <x-mostreadcategory :category="$category" />
        </div>
    </div>
    <hr>
        <p>@lang('home.writers')</p>
        <x-writercategory :category="$category" />
</div>
@endsection
