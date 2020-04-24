@extends('layouts.admin')
@section('title')
@lang('home.titlewebsite')
@endsection
@section('content')
<div class="container">
    <div class="card text-left">
      <div class="card-body">
        <form action="/social" method="post">
          @csrf
          <div class="form-group">
            <label for="Facebook">Facebook</label>
            <input type="url" name="facebook" id="" class="form-control" value="{{$social->facebook}}">
          </div>
          <div class="form-group">
            <label for="Twitter">Twitter</label>
            <input type="url" name="twitter" id="" class="form-control" value="{{$social->twitter}}">
          </div>
          <div class="form-group">
            <label for="Youtube">Youtube</label>
            <input type="url" name="youtube" id="" class="form-control" value="{{$social->youtube}}">
          </div>
          <div class="form-group">
            <label for="Whatsapp">Whatsapp</label>
            <input type="url" name="whatsapp" id="" class="form-control" value="{{$social->whatsapp}}">
          </div>
          <div class="form-group">
            <label for="Snapchat">Snapchat</label>
            <input type="url" name="snapchat" id="" class="form-control" value="{{$social->snapchat}}">
          </div>
          <div class="form-group">
            <label for="Instagram">Instagram</label>
            <input type="url" name="instagram" id="" class="form-control" value="{{$social->instagram}}">
          </div>
          <div class="form-group text-center">
            <input type="submit"value="@lang('home.save')"  class="btn btn-outline-primary btn-sm">
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
