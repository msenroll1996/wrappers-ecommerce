@extends('frontend.layouts.master')

@section('content')
<main class="site__main">
            <!-- Default page -->
            <section class="site__default site__add-to-cart uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="site__add-to-cart__header">
                        <h1>Shipping</h1>
                    </div>
                    <div uk-grid>
                        <div class="uk-width-1-1 uk-width-2-3@l">
                            <h2>Shipping Address</h2>
                            <hr class="uk-divider-icon">
                            <form action="{{route('frontend.shipping.post_shipping')}}" method = "post" class="shipping-form">
                                @csrf
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-2@l">
                                        <div class="uk-margin">
                                            <label>First Name</label>
                                            <input type="text" name = "shipping_first_name" class="uk-input" value = "{{auth()->user()->first_name}}" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@l">
                                        <div class="uk-margin">
                                        <label>Last Name</label>
                                            <input type="text" name = "shipping_last_name" class="uk-input" value = "{{auth()->user()->last_name}}" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                        <label>Address</label>
                                            <input type="text" name = "shipping_address" class="uk-input" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                        <label>Street</label>
                                            <input type="text" name = "shipping_street" class="uk-input" placeholder="Appartment, suite, etc." required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@l">
                                        <div class="uk-margin">
                                            <div class="uk-w-full" uk-form-custom="target: > * > span:first-child">
                                            <label>Country</label>
                                                <select name = "shipping_country">
                                                    <option value="Nepal">Nepal</option>
                                                    
                                                </select>
                                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@l">
                                        <div class="uk-margin">
                                        <label>Postal Code</label>
                                            <input type="text" name = "shipping_postal_code" class="uk-input" placeholder="Postal Code">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                        <label>Phone</label>
                                            <input type="text" name = "shipping_phone" value = "{{auth()->user()->phone}}" class="uk-input" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <label><input class="uk-checkbox" type="checkbox" checked> Save this information for next time </label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                            <button class="uk-button uk-button-large uk-button-primary">Continue to Shipping</button>
                                            <a href="{{route('frontend.cart.index')}}" class="uk-button uk-button-default">Return to Cart </a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="uk-width-1-1 uk-width-1-3@l">
                            <aside>
                                <h2>Order Summary</h2>
                                <hr class="uk-divider-icon">
                                <div class="uk-gird" uk-grid>
                                    <h5>Sub Total:</h5>
                                    <h4 class="uk-width-expand@l uk-text-right">Rs. 250.00</h4>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="cupon-box">
                                    <h5>Cupone Code:</h5>
                                    <div class="uk-margin">
                                        <input type="text" class="uk-input">
                                    </div>
                                    <span>Coupon code will be applied on the checkout page</span>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="uk-gird" uk-grid>
                                    <h5>Total:</h5>
                                    <h4 class="uk-width-expand@l uk-text-right">Rs. 250.00</h4>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="button-group">
                                    <a href="#" class="uk-button uk-button-large uk-button-primary">Proceed to Checkout</a>
                                    <a href="#" class="uk-button uk-button-large uk-button-secondary">Continue Shopping</a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Default page end -->
        </main>
@endsection