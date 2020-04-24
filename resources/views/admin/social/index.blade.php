@extends('layouts.admin')
@section('title')
@lang('home.titlewebsite')
@endsection
@section('content')
<div class="container">
    <div class="card text-left">
      <div class="card-body ">
          <div class="form-group text-center">
            <a href="/social/edit" class="btn btn-outline-primary btn-sm">@lang('home.edit')</a>
          </div>
          <div class="form-group">
            <label for="Facebook">Facebook</label><br>
            <a class="alink btn btn-sm facebook" href="{{$social->facebook}}">{{$social->facebook}}</a>
          </div>
          <div class="form-group">
            <label for="Twitter">Twitter</label><br>
            <a class="alink btn btn-sm twitter" href="{{$social->twitter}}">{{$social->twitter}}</a>

          </div>
          <div class="form-group">
            <label for="Youtube">Youtube</label><br>
            <a class="alink btn btn-sm facebook" href="{{$social->youtube}}">{{$social->youtube}}</a>

          </div>
          <div class="form-group">
            <label for="Whatsapp">Whatsapp</label><br>
            <a class="alink btn btn-sm whatsapp" href="{{$social->whatsapp}}">{{$social->whatsapp}}</a>

          </div>
          <div class="form-group">
            <label for="Snapchat">Snapchat</label><br>
            <a class="alink btn btn-sm facebook" href="{{$social->snapchat}}">{{$social->snapchat}}</a>

          </div>
          <div class="form-group">
            <label for="Instagram">Instagram</label><br>
            <a class="alink btn btn-sm facebook" href="{{$social->instagram}}">{{$social->instagram}}</a>

          </div>
      </div>
    </div>
</div>
@endsection
