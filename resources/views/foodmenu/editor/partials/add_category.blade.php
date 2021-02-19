<div class="menu-editor_controls mb-3">
    <h2>Nieuwe categorie</h2>
    <form wire:submit.prevent="addCategory">
        <div class="input-group">
            <input wire:model="formCatName" type="text" class="form-control" name="name">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit">Button</button>
            </div>
        </div>
        <div class="input-group">
            <textarea wire:model="formCatDesc" name="info" class="w-100"></textarea>
        </div>
    </form>
</div>