<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/fontawesome-free-5.7.2-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/taginput/tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/news.css') }}" rel="stylesheet">
    <script src="{{ asset('/1.7.1/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/chart.js') }}" type="text/javascript" ></script>
    {{-- <livewire:styles> --}}
</head>
