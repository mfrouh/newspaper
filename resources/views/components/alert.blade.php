@if (session('errors'))
@foreach (session('errors')->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show text-@lang('home.left')" role="alert" style="z-index:10">
      <button type="button" class="btn btn-success @lang('home.right')" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>{{$error}}</strong>
    </div>
    <script>
      $(".alert").alert();
    </script>
    @endforeach
@endif
