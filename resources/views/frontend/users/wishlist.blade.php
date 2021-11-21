@extends('frontend.layouts.master')

@section('content')
<main class="site__main">
            <!-- Default page -->
            <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="">
                        <h1 class="uk-h2">My Wishlist</h1>
                    </div>
                </div>
            </section>


            <!-- Product -->
            <section class="site__product-list uk-padding uk-padding-remove-horizontal" style="padding-bottom: 70px;">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-4@l uk-flex-center@l" uk-grid>
                        @forelse($wishlist_products as $wishlist_product)
                        <div>
                        <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-divider uk-table-striped uk-table-small site__add-to-cart__table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Stock Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button type="button"  class="close-btn">
                                                    <span uk-icon="close"></span>
                                                </button>
                                            </td>
                                            <td>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-1-3">
                                                        <a href="{{route('frontend.product.single_product',['slug' => $wishlist_product->slug])}}"><img src="{{ url( 'storage/'.$wishlist_product->image_first ) }}" alt=""></a>
                                                    </div>
                                                    <div class="uk-width-2-3">
                                                        <div class="product-title">
                                                            <a href="{{route('frontend.product.single_product',['slug' => $wishlist_product->slug])}}" class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">{{$wishlist_product->name}}</a>
                                                        </div>
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
                                                <a href="javascript:add_to_cart({{$wishlist_product->id}})" id = "{{$wishlist_product->id}}" route="{{route('frontend.cart.add_to_cart')}}"
                                                class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom">
                                                    Add to cart
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @empty
                        <div style="float: left;">
                                <b >Your wishlist is empty!</b>
                        </div>
                        @endforelse
                        
                    </div>
                </div>
            </section>
            <!-- Product end -->
            <!-- Default page end -->
        </main>
        @section('script')
            <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
        @endsection
@endsection