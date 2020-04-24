<div class="row">
    @foreach ($articles as $article)
      <div class="card col-md-12 col-6 mb-2 p-0 border-0">
        <a href="{{$article->path()}}">
         <img class="card-img shadow-sm p-0" src="{{url($article->imagepath())}}" height="310px" alt="">
         <div class="titlecard pb-1">
          <p>{{$article->title}}</p>
         </div>
        </a>
      </div>
    @endforeach
</div>
