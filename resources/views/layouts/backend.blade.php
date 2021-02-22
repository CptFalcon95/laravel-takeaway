<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    @yield('menuRender')
                </div>
                <div class="col-12 col-md-4">
                    @yield('menuBuilder')
                </div>
            </div>
        </div>
        @yield('scripts')
    </body>
</html>
