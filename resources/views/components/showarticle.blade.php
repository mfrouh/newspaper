<div class="col-12 text-@lang('home.left') mb-2">
    <h1>{{$article->title}}</h1>
</div>
<div class="card border-0 shadow-sm mb-3">
    <div class="card-header border-0  text-black text-@lang('home.left')">
        <a href="/writer/{{$article->user->id}}" class="smaller btn btn-sm whatsapp ml-1 brdrd">{{$article->user->name}}</a>
        <a href="/date/{{$article->created_at->translatedformat('Y-m-d')}}" class="smaller btn btn-sm twitter ml-1 brdrd @lang('home.right')"> <i class="fa fa-calendar-minus-o p-1" aria-hidden="true"></i>  {{$article->created_at->translatedformat('D d M Y')}}  </a>
        <span class="smaller btn btn-sm facebook ml-1 brdrd @lang('home.right')"> <i class="fas fa-clock p-1" aria-hidden="true"></i>   {{$article->created_at->translatedformat('h:i A')}}  </span>
    </div>
    <img src="{{$article->imagepath()}}" class="single-article" alt="">
    <div class="button-share">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}},'sharer','width=655,height=430" class="btn m-1 border-raduis-4 facebook" ><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{url()->current()}}" class="btn  m-1 border-raduis-4  twitter"><i class="fa fa-twitter "></i></a>
        <a href="https://web.whatsapp.com/send?text={{url()->current()}}" class="btn whatsapp m-1 border-raduis-4"><i class="fa fa-whatsapp"></i></a>
    </div>
</div>
<div class="col-12 content-article text-@lang('home.left') mb-3 shadow-sm">
            {{$article->content}}
</div>
<div class="col-12  text-@lang('home.left') mb-3">
  <i class="fa fa-tags" aria-hidden="true"></i>
  @lang('home.tags') :
  @foreach ($article->tags as $tag)
        <a href="/tag/{{str_replace(' ','_',$tag->name)}}" class="btn btn-outline-primary btn-sm brdrd">{{$tag->name}}</a>
  @endforeach
</div>
<div class="col-12 text-@lang('home.left')">
<p>@lang('home.relatedarticle')</p>
   <x-relatedarticle :article="$article" />
</div>
