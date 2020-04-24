<div class="card mt-2 ">
    <div class="row">
      <div class="col-md-12 col-12">
          <a href="{{$article->path()}}">
            <img class="card-img" src="{{$article->imagepath()}}" height="460px" alt="">
          </a>
          <span data-id="{{$article->id}}" class="btn {{in_array($article->id,content())?'btn-danger':'btn-primary'}} btn-sm saved brdrd shadow-sm"><i class="fas fa-save"></i></span>
      </div>
    </div>
</div>
