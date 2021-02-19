@extends('foodmenu.layouts.menu')

@section('title', 'Menu editor')

@section('content')
    <div class="container">
        @livewire('menu-editor')
    </div>
@endsection