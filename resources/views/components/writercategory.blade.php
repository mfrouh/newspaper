<div class="row">
    @foreach ($users as $user)
    <div class="col-lg-3 col-6 mt-3">
        <a class="alink" href="/writer/2">
         <div class="card mt-4 shadow-sm">
           <div class="card-body text-center">
             <img src="{{$user->imagepath()}}" class="img-writer shadow" style="right:120px">
             <i class="fa fa-quote-right ml-3 right "></i>
                 <br>
                 {{$user->name}}
                 <br>
             <i class="fa fa-quote-left mr-3 left"></i><br>
           </div>
         </div>
        </a>
      </div>
    @endforeach
</div>
