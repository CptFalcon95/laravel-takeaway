@extends('layouts.backend')

@section('menuRender')
@include('business.menuBuilder.render')
@endsection

@section('menuBuilder')

<div class="menu-builder">

    <div class="row">
        <div class="col-12">
            <div class="menu-builder_add-category mt-5">
                <h3 class="menu-builder_title">New category</h3>
                <form id="form-new-category" class="menu-builder_add-category-form mt-3">
                    <div class="form-group">
                        <label for="">{{__('Category name')}}</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Image url')}}</label>
                        <input class="form-control" type="text" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Category description')}}</label>
                        <textarea class="form-control w-100" name="desc" id="new-category-desc"></textarea>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">{{__('Add')}} +</button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
