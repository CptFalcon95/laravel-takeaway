@extends('pages.restaurant.layout')

@section('content')

@include('includes.navbar')

<!----- Restuarant Banner Section ----->

<div class="container-fluid">
	<div class="row justify-content-center text-center">
		<div id="restaurant-banner">
			<h2 class="text-center pt-5 pb-3 text-white">RESTAURANT NAME GOES HERE</h2>
		</div>
	</div>
</div>

<!--- Restuarant Address Section -->
<div class="container">
	<div class="row">
        <div class="col-12 text-left">
			<h3>Restaurant's address goes here</h3>
			<h4><strong>Meer informatie</strong><h4>
        </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<span class="section-subtitle">Special</span>
			<span class="section-subtitle">Pizza</span>
			<h2 class="section-title">Voor jou gekozen</h2>
		</div>
	</div>

	<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Pizza</a></li>
    <li><a href="#tabs-2">Pasta</a></li>
	<li><a href="#tabs-3">Burgers</a></li>
	<li><a href="#tabs-4">Salad</a></li>
	<li><a href="#tabs-5">Drinks</a></li>
  </ul>
  <div id="tabs-1">
    <p> nec arcu. Donec sollicitudin muctor rdolor nec orci </p>
  </div>
  <div id="tabs-2">
    <p>Morbi tincidunt, dui sie turpis. Seiscing. Morbi facilis</p>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id er tempus pretium</p>
    <p>Duis cursus. Maecenas ligula eros, blantis. Donec nisi l</p>
  </div>
  <div id="tabs-4">
    <p>Mauris eleifend est et turpis. Duis id er tempus pretium</p>
    <p>Duis cursus. Maecenas ligula eros, blandit  Donec nisi l</p>
  </div>
  <div id="tabs-5">
    <p>Mauris eleifend est et turpis. Duis id eratempus pretium</p>
    <p>Duis cursus. Maecenas ligula eros, blanditt porttitor, </p>
  </div>
</div>

	<div class="row">
		<div class="menu-content border shadow rounded pt-2 col-12">
			<h3 class="menu-name text-body">Pizza</h3>
			<span class="menu-detail text-secondary">Salami</span>
			<span class="menu-price">€10</span>
			<a href="#" class="button menu-button float-right"><i class="fas fa-cart-plus"></i></a>
		</div>
		<div class="menu-content border shadow rounded pt-2 col-12">
			<h3 class="menu-name text-body">Pizza</h3>
			<span class="menu-detail text-secondary">Salami</span>
			<span class="menu-price">€10</span>
			<a href="#" class="button menu-button float-right"><i class="fas fa-cart-plus"></i></a>
		</div>
		<div class="menu-content border shadow rounded pt-2 col-12">
			<h3 class="menu-name text-body">Pizza</h3>
			<span class="menu-detail text-secondary">Salami</span>
			<span class="menu-price">€10</span>
			<a href="#" class="button menu-button float-right"><i class="fas fa-cart-plus"></i></a>
		</div>
		<div class="menu-content border shadow rounded pt-2 col-12">
			<h3 class="menu-name text-body">Pizza</h3>
			<span class="menu-detail text-secondary">Salami</span>
			<span class="menu-price">€10</span>
			<a href="#" class="button menu-button float-right"><i class="fas fa-cart-plus"></i></a>
		</div>
	</div>
</div>


@endsection

@section('scripts')

<script>
	</script>

@endsection