@extends('frontend.layouts.master')

@section('content')
<main class="site__main">
            <!-- Default page -->
            <section class="site__default site__add-to-cart uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="site__add-to-cart__header">
                        <h1>Shipping</h1>
                    </div>
                    <div class="breadcrumb">
                        <ul class="breadcrumb-list">
                            <li><a href="{{route('frontend.cart.index')}}">Cart</a></li>
                            <li><span>Shipping</span></li>
                            <!-- <li><span>Payment</span></li> -->
                        </ul>
                    </div>
                    <div class='uk-grid-large' uk-grid>
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
                                            <input type="text" name = "shipping_address" class="uk-input" placeholder="Address" value = "{{Session::get('shipping_info')['shipping_address']}}" required>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-margin">
                                        <label>Street</label>
                                            <input type="text" name = "shipping_street" value = "{{Session::get('shipping_info')['shipping_street']}}" class="uk-input" placeholder="Appartment, suite, etc." required>
                                        </div>
                                    </div>
                                   
                                    <div class="uk-width-1-2@l">
                                        <div class="uk-margin">
                                        <label>Postal Code</label>
                                            <input type="text" name = "shipping_postal_code" value = "{{Session::get('shipping_info')['shipping_postal_code']}}"  class="uk-input" placeholder="Postal Code" required>
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
                            <aside class="uk-width-2-3@l">
                            @foreach($cart->items as $item)
                            <div class="uk-flex uk-flex-middle uk-flex-between">
                                    <div class="uk-flex uk-flex-middle">
                                        <figure class="uk-position-relative" style="margin-bottom: 0;">
                                            <img src="{{ url( 'storage/'.$item['item']->image_first ) }}" class="uk-border-rounded aside-produt-img" alt="">
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
                                    <div class="uk-text-secondary uk-text-bold">Calculated at next step</div>
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
            <!-- Default page end -->
        </main>
@endsection