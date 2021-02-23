<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <title>Food Delivery Service</title>
    
    <link href="css/app.css" rel="stylesheet">
    
	<script src="https://kit.fontawesome.com/b7a630073d.js" crossorigin="anonymous"></script>
</head>

<body>
    <main id="app">
        @yield('content')

        

        @yield('scripts')
    </main>

    @include('includes.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>