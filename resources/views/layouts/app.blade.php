<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="@lang('home.dir')">
 @include('layouts.head')
<body onload="myFunction()">
    <div id="loader"></div>
    <div id="app">
        <x-secondnav/>
        <main  class="py-8" style="display:none; padding-top:5rem!important;" id="myDiv" class="animate-bottom">
            @yield('content')
            <x-alert/>
            <x-message/>
            <x-breakingnews/>
        </main>
    </div>
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
          <form action="/search" method="get">
            <input type="text" placeholder="@lang('home.search')" name="searchquery">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <x-saved/>
    </div>

</body>
@include('layouts.foot')
</html>
