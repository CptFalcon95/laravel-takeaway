<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
        @livewireStyles
        @yield('scripts')
    </head>
    <body>
        @yield('content')
        @livewireScripts
    </body>
</html>