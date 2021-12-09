@extends('frontend.layouts.master')

@section('content')

<main class="site__main">
    <!-- Default page -->
    <section class="site__default site__add-to-cart uk-padding uk-padding-remove-horizontal ">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="site__add-to-cart__header uk-text-center">
                <h1>Payment</h1>
            </div>
            <div class="breadcrumb">
                <ul class="breadcrumb-list">
                <li><a href="{{route('frontend.cart.index')}}">Cart</a></li>
                <li><a href="{{route('frontend.shipping.index')}}"><span>Shipping</span></a></li>
                    <li><span>Payment</span></li>
                </ul>
            </div>
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-1 uk-width-2-3@l">
                    <div class="payment-method-wrapper">
                        <div class="shipping-information">
                            <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-divider uk-table-striped uk-table-small">
                                    <caption>Shipping Contact Information</caption>
                                    <tbody>
                                        <tr>
                                            <th>Contact</th>
                                            <td>{{$shipping_info['shipping_phone']}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ship to</th>
                                            <td>{{$shipping_info['shipping_address'].','.$shipping_info['shipping_street']}}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                <hr class="uk-divider-icon">
                        <div class="payment-methods">
                            <article>
                               <div class="uk-h3">
                                   Payment Methods
                               </div> 

                            </article>
                            <form action="{{route('frontend.shipping.checkout')}}" method = "post">
                                <p>Choose Your Payment Method</p>
                                <div uk-grid>
                                    <div class="uk-width-1-3">
                                        <div class="gateway">
                                        <input value="{{$cart->totalPrice}}" name="tAmt" type="hidden">
                    <input value="{{$cart->totalPrice}}" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="{{$pid}}" name="pid" type="hidden">
                    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
                    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label class="uk-block">E-Sewa</label><br>
                                                <label><input class="uk-radio" type="radio" value="esewa" name="payment_method" checked required> <img src="{{asset('assets/image/esewa.png')}}" width="40" alt=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label>Khalti</label><br>
                                                <label><input class="uk-radio" type="radio" value="khalti" name="payment_method" required> <img src="{{asset('assets/image/khalti.png')}}" width="40" alt=""></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-3">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label>Cash on delivery</label><br>
                                                <label><input class="uk-radio" type="radio" value="cod" name="payment_method" required> <img src="{{asset('assets/image/khalti.png')}}" width="40" alt=""></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="uk-h3">Biling address</div>
                                <p>Select the address that matches your card or payment method. </p>
                                <div uk-grid>
                                    <div class="uk-width-1-1 uk-width-1-3@l">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label><input class="uk-radio" type="radio" id="same_billing" name="sipping-address" checked> Same as shipping address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-1-3@l">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label><input class="uk-radio" type="radio" id="different_billing" name="sipping-address"> Use a different billing address</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shipping-info-form-section" style="display: none;">

                                    <hr class="uk-divider-icon">
                                    <div class="saved-shipping-form-box">
                                        @csrf
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-2@l">
                                                <div class="uk-margin">
                                                    <label>First Name</label>
                                                    <input type="text" name = "billing_first_name" class="uk-input" value = "{{auth()->user()->first_name}}" placeholder="First Name" >
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@l">
                                                <div class="uk-margin">
                                                <label>Last Name</label>
                                                    <input type="text" name = "billing_last_name" class="uk-input" value = "{{auth()->user()->last_name}}" placeholder="Last Name" >
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                <label>Address</label>
                                                    <input type="text" name = "billing_address" class="uk-input" value = "" placeholder="Address" >
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                <label>Street</label>
                                                    <input type="text" name = "billing_street" class="uk-input" placeholder="Appartment, suite, etc." >
                                                </div>
                                            </div>
                                            
                                            <div class="uk-width-1-2@l">
                                                <div class="uk-margin">
                                                <label>Postal Code</label>
                                                    <input type="text" name = "billing_postal_code" class="uk-input" placeholder="Postal Code" >
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="uk-margin">
                                                <label>Phone</label>
                                                    <input type="text" name = "billing_phone" value = "{{auth()->user()->phone}}" class="uk-input" placeholder="Phone Number" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="button-group" style="margin-top: 30px;">
                                    <button  class="uk-button uk-button-large uk-button-primary" style="margin-right: 10px; margin-bottom: 10px" type = "submit">Complete Order</button>
                                    <a href="{{route('frontend.shipping.index')}}" class="uk-button uk-button-large uk-button-secondary" style="margin-bottom: 10px">Return to Shipping</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@l">
                            <aside class="uk-width-2-3@l">
                            @foreach($cart->items as $item)
                            
                                <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div class="uk-flex uk-flex-middle">
                                        <figure class="uk-position-relative" style="margin-bottom: 0;">
                                            <img src="{{url('storage/'.$item['item']->image_first)}}" class="uk-border-rounded aside-produt-img" alt="">
                                            <span class="uk-badge uk-position-absolute uk-position-top-right">{{$item['qty']}}</span>
                                        </figure>
                                        <div style="margin-left: 10px;">{{$item['item']->name}}</div>
                                    </div>
                                    <div class="uk-text-secondary uk-text-bold">Rs. {{$item['price']}}</div>
                                </div>
                            @endforeach
                                
                                
                                <hr>
                                <form action="" class="uk-margin uk-grid-small uk-flex-stretch" uk-grid>
                                    <div class="uk-width-expand">
                                        <input type="text" placeholder="Gift card discount code" class="uk-input">
                                    </div>
                                    <div>
                                        <button class="uk-button uk-button-secondary uk-button-small">Apply</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div class="uk-text-secondary">Subtotal</div>
                                    <div class="uk-text-secondary uk-text-bold">Rs. {{$cart->totalPrice}}</div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div class="uk-text-secondary">Shipping</div>
                                    <div class="uk-text-secondary uk-text-bold"></div>
                                </div>
                                <hr>
                                <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div class="uk-text-secondary">Total</div>
                                    <div class="uk-text-secondary uk-text-bold">Rs. {{$cart->totalPrice}}</div>
                                </div>
                            </aside>
                        </div>
            </div>

        </div>
    </section>
</main>

@endsection