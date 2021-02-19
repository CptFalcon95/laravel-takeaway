<div class="menu-editor_cat-controls input-group">
    {{$key}}
    <form wire:submit.prevent="addProduct({{$key}})">
        <div class="input-group">
            <input wire:model="formProductName" type="text" class="form-control" name="name" placeholder="Product naam">
            <input wire:model="formProductPrice" type="text" class="form-control" name="price" placeholder="Prijs">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit">Button</button>
            </div>
        </div>
        <div class="input-group">
            <label class="mt-2 mb-0" for="desc">Extra informatie</label>
            <textarea wire:model="formProductDesc" name="desc" class="w-100"></textarea>
        </div>
    </form>
</div>
