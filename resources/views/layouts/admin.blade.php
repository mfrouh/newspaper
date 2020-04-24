<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="@lang('home.dir')">
@include('layouts.head')
<body>
    <div id="app">
        <x-firstnav/>
        <main  class="py-8" style="padding-top: 7rem!important;">
            <x-alert/>
            <x-message/>
            <x-breakingnews/>
                @yield('content')
        </main>
    </div>
</body>
@include('layouts.foot')
</html>
