<div class="">
    <h3 class="text-center">Find restaurants nearby</h3>
    <form method="POST" action="{{route('serviceable')}}">
        @csrf

        <div class="form-row">
            <div class="col">
                <input class="form-control w-100" name="postalcode" placeholder="Postal Code"></input>
            </div>
            <div class="col">
                <select class="form-select form-control w-100">
                    <option value="1">Takeaway</option>
                    <option value="2">Pickup</option>
                </select>
            </div>
            <div class="col">
                <button class="btn-success w-100 h-100" type="submit">SHOW</button>
            </div>

        </div>
    </form>
</div>
