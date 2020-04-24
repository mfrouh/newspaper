<nav class="navbar navbar-expand-md navbar-white bg-dark shadow-sm" style="position:fixed;width: 100%;z-index: 99999; top:0">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            @lang('home.titlewebsite')
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  @if(app()->getlocale()=='en') mr-auto text-right @else ml-auto text-left @endif">
                @if(auth()->user()->role=='admin')
                <li class="nav-item ml-2">
                    <a class="btn btn-primary btn-sm smaller" href="/articles">@lang('home.articles')</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="btn btn-primary btn-sm smaller" href="/category">@lang('home.category')</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="btn btn-primary btn-sm smaller" href="/social">@lang('home.social')</a>
                </li>
                @endif
                @if(auth()->user()->role=='writer')
                <li class="nav-item ml-2">
                    <a class="btn btn-primary btn-sm smaller" href="/article">@lang('home.articles')</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav text-black @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif" >
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item  ">
                        <a class="nav-link  btn-sm btn btn-outline-dark brdrd  smaller" href="{{ route('login') }}"><i class="fas fa-lock"></i> @lang('home.login')</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="alink smaller text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (auth()->user()->provider)
                            <img src="{{auth()->user()->image}}" class="userimg">
                            @else
                            <img src="{{url('/storage/user')}}/{{auth()->user()->image}}" class="userimg">
                            @endif
                            {{auth()->user()->name}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-left text-@lang('home.left') text-white" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               @lang('home.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item  text-dark">
                    @if(app()->getlocale()=='ar')
                    <a class="btn btn-outline-dark brdrd  ml-1 mr-1" href="/lang/en">EN</a>
                    @else
                    <a class="btn btn-outline-dark brdrd  ml-1 mr-1" href="/lang/ar">ع</a>
                    @endif
                </li>
            </ul>
            <!-- Left Side Of Navbar -->
        </div>
    </div>
</nav>
