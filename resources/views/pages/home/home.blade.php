@extends('pages.home.layout')

@section('content')
<!-------------- Homepage Search Form -------------->
    <div class="home-search-wrapper">
        @include('pages.home.partials.searchBusiness')
    </div>
@endsection
<!----- How It Works Section ----->
@section('how-it-works')
    @include('pages.home.partials.howItWorks')
@endsection