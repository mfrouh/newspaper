<div class="card mt-2 ">
    <div class="row">
      <div class="col-md-12 col-4 ">
        <a href="{{$article->path()}}">
          <img class="card-img-top" src="{{$article->imagepath()}}" height="225px" alt="">
        </a>
          <span data-id="{{$article->id}}" class="btn {{in_array($article->id,content())?'btn-danger':'btn-primary'}} btn-sm saved brdrd shadow-sm"><i class="fas fa-save"></i></span>
      </div>
      <div class="col-md-12 col-8 md-hide">
        <a href="{{$article->path()}}" class="alink">
          <div class="card-body">
              {{$article->title}}
          </div>
        </a>
      </div>
    </div>
</div>
