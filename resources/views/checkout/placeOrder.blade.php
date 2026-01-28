<div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
    <div class="order-summary-wrapper sticky-sidebar">
        <h3 class="title text-uppercase ls-10" style="color: #0f1535 !important;">Your Order</h3>
        <div class="order-summary">
            <table class="order-table">
                <thead>
                <tr>
                    <th colspan="2">
                        <b style="color: #0f1535 !important;">Product</b>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr class="bb-no">
                    <td class="product-name" style="color: #0f1535 !important;">
                        {{ $item['title'] }} <i class="fas fa-times"></i>
                        <span class="product-quantity">1</span>
                    </td>
                    <td class="product-total" style="color: #0f1535 !important;">৳ {{ $item['price'] }}</td>
                </tr>
                @endforeach
                <tr class="cart-subtotal bb-no" style="color: #0f1535 !important;">
                    <td>
                        <b>Subtotal</b>
                    </td>
                    <td>
                        <b>৳ {{ $cartSubtotal }}</b>
                    </td>
                </tr>
                </tbody>
{{--                @include('checkout.shippingMethod')--}}
            </table>

{{--            @include('checkout.paymentMethod')--}}

            <div class="form-group place-order pt-6">
                <button
                    type="submit"
                    class="btn btn-dark btn-block btn-rounded" style="background-color: #0f1535 !important; color: white !important;"
                >
                    Place Order
                </button>
            </div>
        </div>
    </div>
</div>
