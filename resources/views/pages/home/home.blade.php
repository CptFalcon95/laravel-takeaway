@extends('pages.home.layout')

@section('content')
<!----- Homepage Intro Background ----->

<!-------------- Homepage Search Form -------------->
<div class="home-search-wrapper">
	@include('pages.home.partials.searchBusiness')
</div>

<!----- How It Works Section ----->
<section>
    <div class="container-how-it-works">
        <h3 class="text-center mt-5">How it works!</h3>
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="search-for-location">
                        <img src="images/location.svg" alt="Location">
                    </div>
                    <h3 class="text-center">Enter your location</h3>
                </div>

                <div class="col-md-4">
                    <div class="search-and-cart">
                        <img src="images/delivered.svg" alt="Location">
                    </div>
                    <h3 class="text-center">Search and add to cart</h3>
                </div>

                <div class="col-md-4">
                    <div class="pay-and-deliver">
                        <img src="images/location.svg" alt="Location">
                    </div>
                    <h3 class="text-center">Pay and get it delivered!</h3>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
