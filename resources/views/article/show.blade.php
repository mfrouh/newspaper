@extends('layouts.app')
@section('title')
{{$article->title}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
          <x-showarticle :article="$article"/>
        </div>
        <div class="col-lg-3 p-0">
          <x-lastarticle/>
          <x-mostread/>
          <input type="hidden" name="" id="articleid" value="{{$article->id}}">
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $(window).load(function(e){
               e.preventDefault();
               var articleid=$('#articleid').val();
                $.ajax({
                 type:'post',
                 url:'/addviewarticle',
                 data:{articleid:articleid},
                 dataType:'json',
                success:function(data){
            },
          });
    });
    });
</script>
@endsection
