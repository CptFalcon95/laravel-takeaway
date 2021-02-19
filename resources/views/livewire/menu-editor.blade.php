<div class="container">
    <div class='row'>
        <div class='col-6'>
            @include('foodmenu.editor.partials.add_category')

            @foreach($menuData as $key => $category)
            <div id='{{$key}}' class='menu-editor'>
                <h2>{{$category["name"]}}</h2>
				<span>{{$category["desc"]}}</span>
                @include('foodmenu.editor.partials.category_add_product')
                <ul class='menu-editor_cat-list list-group' data-type='category'>
                    @foreach($category["products"] as $product => $data)
                    <li class='menu-editor_product-li' data-id='{{$key}}' data-type='product'>
                        {{$data["name"]}}
                    </li>
                    @endforeach
                </ul>

            </div>
            @endforeach
        </div>
    </div>
</div>
