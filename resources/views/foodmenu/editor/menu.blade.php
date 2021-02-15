@extends('foodmenu.layouts.menu')

@section('title', 'Menu editor')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="editor-controls">
                </div>
                <div class="food-editor">
                    <ul class="food-editor_cat list-group" data-id="00" data-type="category">
                        <li class="food-editor_cat-title" data-index="0">Pizza's</li>
                        <li class="food-editor_prod" data-id="01" data-type="product" data-index="1">Pepperoni</li>
                        <li class="food-editor_prod" data-id="02" data-type="product" data-index="2">Quatro Formaggi</li>
                        <li class="food-editor_prod" data-id="03" data-type="product" data-index="3">Paesana</li>
                        <li class="food-editor_prod" data-id="04" data-type="product" data-index="4">Napolitana</li>
                        <li class="food-editor_prod" data-id="05" data-type="product" data-index="5">Santa Lucia</li>
                    </ul>

                
                </div>
            
            </div>
        </div>
    </div>
@endsection