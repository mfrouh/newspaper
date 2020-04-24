@extends('layouts.admin')
@section('title')
@lang('home.titlewebsite')
@endsection
@section('content')
<div class="container">
 <form action="/blockuser" method="post">
    @csrf
    <div class="row text-center">
        <div class="col-md-3 col-6"><div class="form-group">
          <label for="">@lang('home.writers')</label>
          <select name="user_id" id="" class="form-control">
             @foreach ($users as $user)
                 <option value="{{$user->id}}">{{$user->name}}</option>
             @endforeach
          </select>
        </div></div>
        <div class="col-md-3 col-6"><div class="form-group">
          <label for="">@lang('home.startblock')</label>
          <input type="date" min="{{now()}}" name="start"  class="form-control" >
        </div></div>
        <div class="col-md-3 col-6"><div class="form-group">
          <label for="">@lang('home.endblock')</label>
          <input type="date" min="{{now()}}" name="end"  class="form-control" >
        </div>
        </div>
        <div class="col-md-3 col-6">
           <div class="form-group">
             <input type="submit" value="@lang('home.save')" class="btn btn-outline-primary btn-sm mt-4" >
           </div>
       </div>
    </div>
</form>
<div class="row">
   <div class="card col-12 text-left">
       <div class="card-header"></div>
       <div class="card-body text-center">
           <table class="table table-striped table-inverse ">
               <thead class="thead-inverse">
                   <tr>
                       <th>#</th>
                       <th>@lang('home.writers')</th>
                       <th>@lang('home.startblock')</th>
                       <th>@lang('home.endblock')</th>
                       <th></th>
                   </tr>
                   </thead>
                   <tbody>
                       @foreach ($blockusers as $k=> $blockuser)
                       <tr>
                           <td>{{$k+1}}</td>
                           <td>{{$blockuser->user->name}}</td>
                           <td>{{$blockuser->start}}</td>
                           <td>{{$blockuser->end}}</td>
                           <td></td>
                       </tr>
                       @endforeach
                   </tbody>
           </table>
       </div>
   </div>
</div>
</div>
@endsection
