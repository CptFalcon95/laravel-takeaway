@extends('pages.cart.layout')

@include('includes.navbar')

@section('content')

<!-------------- Cart Item Details -------------->
<div class="container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pizza.jpg" alt="">
                    <div>
                        <p class="text-black">Pizza</p>
                        <small class="text-black">Price: €5.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td class="text-black">€5</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/pizza.jpg" alt="">
                    <div>
                        <p class="text-black">Pizza</p>
                        <small class="text-black">Price: €5.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td class="text-black">€5</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td class="text-black">Subtotal</td>
                <td class="text-black">€10</td>
            </tr>
            <tr>
                <td class="text-black">Tax</td>
                <td class="text-black">€1</td>
            </tr>
            <tr>
                <td class="text-black">Total</td>
                <td class="text-black">€11</td>
            </tr>
        </table>
    </div>
</div>

@endsection