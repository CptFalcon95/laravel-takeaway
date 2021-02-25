@extends('pages.checkout.layout')

@section('content')

    </head>

    <body class="">

        <div class="container">
            <div class="row">
                <hr class="mb-4">

                <div class="col-md-12 order-md-1">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">

                        <li class="cart-item border">
                            <div class="card-item-img">
                                <img src="images/pizza.jpg" alt="Pizza image">
                            </div>
                            <div class="cart-item-content">
                                <h6 class="my-0">First item</h6>
                                <small class="text-muted">Brief description</small>
                                <div class="cart-item-remove">
                                    <a href="">Remove</a>
                                </div>
                            </div>
                            <span class="cart-item-price">€5</span>
                            <div class="card_success--green">

                            </div>
                        </li>
                        <li class="cart-item border">
                            <div class="card-item-img">
                                <img src="images/pizza.jpg" alt="Pizza image">
                            </div>
                            <div class="cart-item-content">
                                <h6 class="my-0">Second item</h6>
                                <small class="text-muted">Brief description</small>
                                <div class="cart-item-remove">
                                    <a href="">Remove</a>
                                </div>
                            </div>
                            <span class="cart-item-price">€5</span>

                        </li>
                        <li class="cart-item border">
                            <div class="card-item-img">
                                <img src="images/pizza.jpg" alt="Pizza image">
                            </div>
                            <div class="cart-item-content">
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                                <span class="cart-item-price">€5</span>
                                <div class="cart-item-remove">
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </li>

                        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-€5</span> --}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (EUR)</span>
                            <strong>€15</strong>
                        </li>
                    </ul>

                    {{-- <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form> --}}
                </div>

            </div>


            <hr class="mb-4">

            <div class="row">
                <div class="col-md-12 order-md-2">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="middleName">Middle name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="" value="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email <span class="text-muted"></span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-6">
                                <label for="street">Straat</label>
                                <input type="text" class="form-control" id="address" placeholder="Hoendiep" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-4">
                                <label for="house_number">Huisnummer<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="address2" placeholder="151" required>
                            </div>

                            <div class="col-2">
                                <label for="addition">Addition<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="address2" placeholder="A">
                            </div>
                        </div>

                        <hr class="mb-4">

                        {{-- Card payment details --}}
                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="ideal" name="paymentMethod" type="radio" class="custom-control-input" checked
                                    required>
                                <label class="custom-control-label" for="credit">iDeal</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>

        </div>

    @endsection
