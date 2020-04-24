<div class="card  text-@lang('home.left') mb-1 border-0">
    <div class="card-header text-center bg-white">@lang('home.saved')</div>
</div>
@foreach ($articles as $article)
<a href="{{$article->path()}}" class="alink">
 <div class="card  text-@lang('home.left') mb-2 border-0">
    <div class="card-body p-1 shadow-sm">
      <div class="row">
          <div class="col-4 pl-0">
              <img src="{{$article->imagepath()}}" width="100%" height="90px" alt="">
          </div>
          <div class="col-8">
              {{$article->title}}
          </div>
      </div>
    </div>
 </div>
</a>
@endforeach
