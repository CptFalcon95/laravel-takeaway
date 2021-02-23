@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

  <div class="d-flex mx-auto">
    @include('_filter-menu')
  </div>

  <div class="d-flex flex-column col-10">
    @include('_search')
    @include('_restaurant-list')
  </div>

  @endsection


  @section('scripts')
  <script>
    /*axios({
    method: 'POST',
    url: '{{ Route("filter") }}',
    data: {
        minorder_id: 'patat',
    },
}).then(function(response) {
  console.log(response.data.drinks)
})*/
  </script>
  @endsection
