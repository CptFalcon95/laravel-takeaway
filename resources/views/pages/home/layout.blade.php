<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <title>Food Delivery Service</title>
    
    <link href="css/app.css" rel="stylesheet">
    
	<script src="https://kit.fontawesome.com/b7a630073d.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    {{-- Home background image --}}
    <div class="home-bg"></div>

    @include('includes.navbar')

    <main id="app">
        @yield('content')        
    </main>

    <div class="how-it-works">
        @yield('how-it-works')
    </div>
    {{-- @include('includes.footer') --}}

    @yield('scripts')

</body>

</html>