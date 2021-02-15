<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
        @yield('scripts');
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>