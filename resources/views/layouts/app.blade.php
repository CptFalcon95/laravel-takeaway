<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Take-Away</title>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

  <nav class="d-flex flex-row justify-content-between navbar navbar-light bg-light">
    <div class="d-flex">
    <a class="navbar-brand" href="#">
      <img src="/images/logo.svg" width="200" class="d-inline-block align-top" alt="">
    </a>
  </div>
  <div class="d-flex mx-auto">
    <h3>location</h3>
  </div>
  <div class="d-flex">
    <h3>Menu</h3>
  </div>
  </nav>

@include('_jumbotron')
  <section>
    <main class="container-fluid">
      @yield('content')
    </main>
  </section>
  </div>

  <script src="{{asset('js/app.js')}}"></script>
  @yield('scripts')

</body>

</html>
