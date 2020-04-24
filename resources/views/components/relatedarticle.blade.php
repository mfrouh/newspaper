<div class="row">
    @foreach ($articles as $article)
    <div class="col-12 col-md-6">
      <div class="card  text-@lang('home.left') mb-2 border-0">
         <a href="{{$article->path()}}" class="alink">
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
         </a>
      </div>
    </div>
   @endforeach
</div>
