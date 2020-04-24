@if(session('breakingnews'))
<div class="alert card bg-white text-@lang('home.left') p-0 shadow-sm" style="z-index:10">
  <div class="card-body p-0">
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
@endif
