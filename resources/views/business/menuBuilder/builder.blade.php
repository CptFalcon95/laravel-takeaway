@extends('layouts.backend')

@section('menuRender')
@include('business.menuBuilder.render')
@endsection

@section('menuBuilder')

<div class="menu-builder">

    <div class="row">
        <div class="col-12">
            <div class="menu-builder_add-category">
                <h3 class="menu-builder_title">New category</h3>
                <form id="form-new-category" class="menu-builder_add-category-form mt-3">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__('Category name')}}</label>
                        <input class="form-control" type="text" name="catName">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Image url')}}</label>
                        <input class="form-control" type="text" name="catImage">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Category description')}}</label>
                        <textarea class="form-control w-100" name="catDesc" id="new-category-desc"></textarea>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">{{__('Add')}} +</button>
                </form>
            </div>
        </div>
    </div>

    <div class="border-top my-3"></div>

    <div class="row">
        <div class="col-12">
            <div class="menu-builder_add-product">
                <h3 class="menu-builder_title">New product</h3>
                <form id="form-new-product" class="menu-builder_add-product-form mt-2">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__('Product name')}}</label>
                        <input class="form-control" type="text" name="productName">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Image url')}}</label>
                        <input class="form-control" type="text" name="productImage">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Product description')}}</label>
                        <textarea class="form-control w-100" name="productDesc" id="new-product-desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Product price')}}</label>
                        <input class="form-control" type="text" name="productPrice">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Product price')}}</label>
                        <select name="category" id="categorySelect">
                            <option value="null">Selecteer categorie</option>
                        </select>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">{{__('Add')}} +</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
