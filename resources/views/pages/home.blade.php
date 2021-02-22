@extends('layouts.layout')

@section('content')

@include('includes.navbar')

<!-------------- Homepage Search Form -------------->
<div class="container-lp">
	<h3 class="text-center mt-5">Find restaurants nearby</h3>
		<div class="container-fluid">
			<form method="POST" action="{{route('serviceable')}}">
			@csrf
				<div class="row justify-content-center">

				<input class="col-md-2" name="postalcode" placeholder="Postal Code"></input>
		
				<select class="form-select col-md-2 ">
  					<option value="1">Takeaway</option>
  					<option value="2">Pickup</option>
				</select>

				<button class="btn-success col-md-2" type="submit">SHOW</button>

			</form>
		</div>
	</div>
</div>

<!----- Homepage Intro Background ----->
<div class="home-bg"></div>

<!----- How It Works Section ----->
<section>
	<div class="container-how-it-works">
		<h3 class="text-center mt-5">How it works!</h3>
			<div class="container-fluid">
				<div class="row justify-content-center">
					
					<div class="col-md-4">
						<div class="search-for-location">
						</div>
						<h3 class="text-center">Enter your location</h3>
					</div>

					<div class="col-md-4">
						<div class="search-and-cart">
						</div>
						<h3 class="text-center">Search and add to cart</h3>
					</div>

					<div class="col-md-4">
						<div class="pay-and-deliver">
						</div>
						<h3 class="text-center">Pay and get it delivered!</h3>
					</div>

				</div>
			</div>
	</div>
</section>

@endsection