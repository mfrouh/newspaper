<div class="card text-@lang('home.left') mb-1 border-0">
  <div class="card-header text-center bg-white">@lang('home.lastarticle')</div>
</div>
@foreach ($articles as $article)
  <div class="card text-@lang('home.left') mb-2 border-0">
    <a href="{{$article->path()}}" class="alink">
     <div class="card-body p-1 shadow-sm">
       <div class="row">
        <div class="col-4 pl-0">
            <a href="{{$article->path()}}" class="alink">
              <img src="{{$article->imagepath()}}" width="100%" height="90px" alt="">
            </a>
            <span data-id="{{$article->id}}" class="btn {{in_array($article->id,content())?'btn-danger':'btn-primary'}} btn-sm saved brdrd shadow-sm"><i class="fas fa-save"></i></span>
          </div>
          <div class="col-8">
            <a href="{{$article->path()}}" class="alink">
              {{$article->title}}
            </a>
          </div>
       </div>
     </div>
    </a>
  </div>
@endforeach
