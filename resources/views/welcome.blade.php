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
            <div class="row mt-5">
                <div class="col-6">
                    <h1>Test</h1>
                </div>
                <div class="col-6">
                    <div id="app">
                        <example-component></example-component>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
