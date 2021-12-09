@extends('frontend.layouts.master')
@section('content')
<main class="site__main">
            <!-- Default page -->
            <section class="site__default site__add-to-cart uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                @if(Session::has('cart'))
                    <div class="site__add-to-cart__header">
                        <h1>My Cart</h1>
                    </div>
                    <div uk-grid>
                        <div class="uk-width-1-1 uk-width-2-3@l">
                            <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-small uk-table-justify site__add-to-cart__table">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="">
                                                        <a href="{{route('frontend.product.single_product',['slug' => $product['item']->slug])}}"><img src="{{url( 'storage/'.$product['item']->image_first)}}" class="h-full" alt=""></a>
                                                    </div>
                                                    <div class="">
                                                        <div class="product-title"><a href="{{route('frontend.product.single_product',['slug' => $product['item']->slug])}}">{{$product['item']->name}}</a></div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                Rs. {{$product['item']->selling_price}}
                                            </td>
                                            <td>
                                            <button type="button" class="close-btn" onclick = "javascript:reduceByOne({{$product['item']['id']}})" route = "{{route('frontend.cart.reduceByOne')}}" id = "{{$product['item']['id']}}">
                                                    <span uk-icon="chevron-down"></span>
                                            </button>
                                            <span id = "cartQty{{$product['item']['id']}}">{{  $product['qty']  }}</span>
                                            <button type="button" class="close-btn" onclick = "javascript:addByOne({{$product['item']['id']}})" route = "{{route('frontend.cart.addByOne')}}" id = "add{{$product['item']['id']}}">
                                                    <span uk-icon="chevron-up"></span>
                                            </button>
                                            </td>
                                            <td>
                                                <strong id = "itemPrice{{$product['item']['id']}}">Rs {{$product['price']}}</strong>
                                            </td>
                                            <td>
                                                <button type="button" onclick = "javascript:removeItem({{$product['item']['id']}})" route = "{{route('frontend.cart.remove')}}" id = "remove{{$product['item']['id']}}" class="close-btn">
                                                    <span uk-icon="close"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>      
                            <article class="uk-margin-large-top">
                                <h4>Additional Comments</h4>
                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5" placeholder="Special instruction for seller..."></textarea>
                                </div>
                            </article>                      
                        </div>
                        
                        <div class="uk-width-1-1 uk-width-1-3@l">
                            <aside>
                                <h4>Order Summary</h4>
                                <hr class="uk-divider-icon">
                                <div class="uk-gird" uk-grid>
                                    <h5>Sub Total:</h5>
                                    <h4 id = "cartSubTotalPrice" class="uk-width-expand@l uk-text-right">Rs. {{$totalPrice}}</h4>
                                </div>
                                <hr class="uk-divider-icon">
                                <!-- <div class="cupon-box">
                                    <h5>Cupone Code:</h5>
                                    <div class="uk-margin">
                                        <input type="text" class="uk-input">
                                    </div>
                                    <span>Coupon code will be applied on the checkout page</span>
                                </div> -->
                                <hr class="uk-divider-icon">
                                <div class="uk-gird" uk-grid>
                                    <h5>Total:</h5>
                                    <h4 id = "cartTotalPrice" class="uk-width-expand@l uk-text-right">Rs. {{$totalPrice}}</h4>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="button-group">
                                    <a href="{{route('frontend.shipping.index')}}" class="uk-button uk-button-large uk-button-primary">Proceed to Checkout</a>
                                    <a href="#" class="uk-button uk-button-large uk-button-secondary">Continue Shopping</a>
                                </div>
                            </aside>
                        </div>
                    </div>
                @else
                <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h3>Your cart is currently empty!</h3>
                <a class="btn btn-primary" href="{{route('frontend.product.index')}}">Continue Shopping</a>
            </div>
        </div>
                @endif    
                </div>
            </section>
            <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <h2 class="uk-h2 uk-text-center ">Best Selling Products</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                        <ul
                            class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small uk-grid">
                            @foreach($best_selling_products as $product)
                            
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}">
                                                        <img src="{{ url( 'storage/'.$product->image_first ) }}"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}">
                                                        <img src="{{ url( 'storage/'.$product->image_second ) }}"
                                                            alt="Image unavailable">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}">
                                                        <img src="{{ url( 'storage/'.$product->image_third ) }}"
                                                            alt="Image unavailable">
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>

                                        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin">
                                            <li class="uk-active blue" uk-slideshow-item="0"><a href="#"></a></li>
                                            <li class="black" uk-slideshow-item="1"><a href="#"></a></li>
                                            <li class="orange" uk-slideshow-item="2"><a href="#"></a></li>
                                        </ul>

                                    </div>
                                    
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a href = "{{route('frontend.product.single_product',['slug' => $product->slug])}}"
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">{{$product->name}}</a>
                                                
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">Rs {{$product->selling_price}}</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <a href="javascript:add_to_cart({{$product->id}})" id = "{{$product->id}}" route="{{route('frontend.cart.add_to_cart')}}"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="{{route('frontend.wishlist.add_wishlist',['product_id' => $product->id])}}" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>

                        <a class="uk-position-center-left uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </section>
        </main>
        @section('script')
            <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
        @endsection
@endsection