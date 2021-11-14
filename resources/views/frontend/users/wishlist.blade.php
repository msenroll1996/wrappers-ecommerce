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
                            <div class="uk-card uk-card-default">
                                
                                <a href="{{route('frontend.product.single_product',['slug' => $wishlist_product->slug])}}"><img src="{{ url( 'storage/'.$wishlist_product->image_first ) }}"
                                alt=""></a>

                                <div class=" uk-card-body">
                                    <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <a href="{{route('frontend.product.single_product',['slug' => $wishlist_product->slug])}}" class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">{{$wishlist_product->name}}</a>
                                            
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">Rs {{$wishlist_product->selling_price}}</span>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <a href="javascript:add_to_cart({{$wishlist_product->id}})" id = "{{$wishlist_product->id}}" route="{{route('frontend.cart.add_to_cart')}}"
                                                class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom"><span
                                                    uk-icon="cart"></span></a>
                                            <a href="{{route('frontend.wishlist.remove',['product_id' => $wishlist_product->id])}}" class="uk-button uk-button-icon uk-button-secondary"><span
                                                    uk-icon="close"></span></a>
                                        </div>
                                    </div>
                                </div>
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