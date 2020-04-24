<nav class="navbar navbar-expand-md navbar-white bg-primary shadow-sm" style="position:fixed;width: 100%;z-index: 99999; top:0">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{ url('/') }}">
            @lang('home.titlewebsite')
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  @if(app()->getlocale()=='en') mr-auto text-right @else ml-auto text-left @endif">
                @foreach ($categories as $category)
                   <li class="nav-item ml-2">
                       <a class="btn btn-primary btn-sm smaller" href="/category/{{$category->id}}">{{$category->name}}</a>
                   </li>
                @endforeach
                <li class="nav-item ml-2">
                    <a class="btn btn-primary btn-sm smaller" href="/writers">@lang('home.writers')</a>
                </li>
            </ul>
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mySave  @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif">
                @php
                    $social=App\social::first();
                @endphp
                @if($social)
                @if ($social->facebook)
                <a class="nav-item btn facebook border-raduis-4" href="{{$social->facebook}}">
                    <i class="fa fa-facebook p-1" aria-hidden="true"></i>
                 </a>
                @endif
                @if ($social->twitter)
                 <a class="nav-item btn twitter border-raduis-4" href="{{$social->twitter}}">
                    <i class="fa fa-twitter p-1"></i>
                 </a>
                 @endif
                 @if ($social->youtube)
                 <a class="nav-item btn facebook border-raduis-4" href="{{$social->youtube}}">
                    <i class="fa fa-youtube-play p-1" aria-hidden="true"></i>
                 </a>
                 @endif
                 @if ($social->snapchat)
                 <a class="nav-item btn facebook border-raduis-4" href="{{$social->snapchat}}">
                   <i class="fa fa-snapchat p-1" aria-hidden="true"></i>
                 </a>
                 @endif
                 @if ($social->whatsapp)
                 <a class="nav-item btn whatsapp border-raduis-4" href="{{$social->whatsapp}}">
                     <i class="fa fa-whatsapp p-1" aria-hidden="true"></i>
                 </a>
                 @endif
                 @if ($social->instagram)
                 <a class="nav-item btn facebook border-raduis-4 " href="{{$social->instagram}}">
                     <i class="fa fa-instagram p-1"></i>
                 </a>
                 @endif
                 @endif
                 <a class="nav-item btn facebook border-raduis-4 " onclick="openSearch()">
                    <i class="fa fa-search p-1"></i>
                </a>

                <a class="nav-item btn  facebook border-raduis-4 " onclick="openNav()">
                   <i class="fas fa-save"></i> {{countsaved()}}
                </a>
            </ul>
        </div>
    </div>
</nav>
