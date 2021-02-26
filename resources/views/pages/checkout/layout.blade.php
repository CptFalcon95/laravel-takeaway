<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Delivery Service - Checkout</title>
    
    <link href="css/app.css" rel="stylesheet">
	{{-- <script src="https://kit.fontawesome.com/b7a630073d.js" crossorigin="anonymous"></script> --}}
</head>

<body>
    <main id="app">
        @yield('content')

        @yield('scripts')
    </main>

    {{-- @include('includes.footer') --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>

</body>

</html>