@extends('layouts.app')
@section('title')
@lang("home.titlewebsite")
@endsection
@section('content')
<div class="container mb-3">
    <div class="row">
        <div class="col-md-6 col-12 p-0">
            <x-mainarticle :article="$articles[0]" />
        </div>
        <div class="col-md-3 col-12">
            <x-normalarticle :article="$articles[1]" />
            <x-normalarticle :article="$articles[2]" />
        </div>
        <div class="col-md-3 col-12">
            <x-normalarticle :article="$articles[3]" />
            <x-normalarticle :article="$articles[4]" />
        </div>
    </div>
<hr>
</div>
<div class="container mt-2 text-@lang('home.left')">
    <div class="row">
        <x-secondmainpage/>
    </div>
    <hr>
    <p>@lang('home.writers')</p>
    <x-writermain/>
</div>

@endsection
