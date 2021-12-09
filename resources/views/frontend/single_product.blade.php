@extends('frontend.layouts.master')
@section('content')
<!-- Main -->
<main class="site__main">
            <!-- Default page -->
            <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-text-center uk-margin-large-bottom">
                        <h1 class="uk-h1">{{$single_product->first()->name}}</h1>
                    </div>

                    <div uk-grid>
                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <div class="site__product-gallery">
                                <div class="uk-position-relative" uk-slideshow="animation: fade">
                                    <div class="uk-grid-small" uk-grid>
                                        
                                        <div class="">
                                            <ul class="uk-thumbnav uk-thumbnav-vertical">
                                                <li uk-slideshow-item="0"><a href="#"><img src="{{ url( 'storage/'.$single_product->first()->image_first ) }}" width="100" alt=""></a></li>
                                                <li uk-slideshow-item="1"><a href="#"><img src="{{ url( 'storage/'.$single_product->first()->image_second ) }}" width="100" alt=""></a></li>
                                                <li uk-slideshow-item="2"><a href="#"><img src="{{ url( 'storage/'.$single_product->first()->image_third ) }}" width="100" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="uk-width-expand">
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <img src="{{ url( 'storage/'.$single_product->first()->image_first ) }}" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="{{ url( 'storage/'.$single_product->first()->image_second ) }}" alt="" uk-cover>
                                                </li>
                                                <li>
                                                    <img src="{{ url( 'storage/'.$single_product->first()->image_third ) }}" alt="" uk-cover>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <h2 class="uk-h2 uk-text-primary">{{$single_product->first()->name}}</h2>
                            <!-- <ul class="uk-iconnav">
                                <li><a href="#" class="uk-text-primary" uk-icon="star"></a></li>
                                <li><a href="#" class="uk-text-primary" uk-icon="star"></a></li>
                                <li><a href="#" class="uk-text-primary" uk-icon="star"></a></li>
                                <li><a href="#" class="uk-text-primary" uk-icon="star"></a></li>
                                <li><a href="#" class="uk-text-primary" uk-icon="star"></a></li>
                            </ul> -->
                            <div class="price-wrap uk-margin-top">
                                <span class="price uk-text-lead uk-text-primary uk-text-bold">Rs {{$single_product->first()->selling_price}}</span> 
                                <!-- <span class="uk-h5">+ Free Shipping</span> -->
                            </div>
                            <div class="price-wrap uk-margin-top">
                                @if($single_product->first()->quantity > 0)
                                <span class="bg-primary text-white">In Stock</span>
                                @else
                                <span class="bg-danger text-white">Out Of Stock</span>
                                @endif
                            </div>
                            <div class="quantity-wrap uk-margin-top uk-grid-small uk-grid-divider" uk-grid>
                                <div class="uk-width-1-5">
                                    <input id = "qtyValue{{$single_product->first()->id}}" class="uk-input h-full" type="number" value="1" min = "1">
                                </div>
                                <div class="uk-width-expand">
                                    <button {{$single_product->first()->quantity == 0 ? 'disabled' : ''}} onclick = "javascript:add_to_cart({{$single_product->first()->id}})" id = "{{$single_product->first()->id}}" route="{{route('frontend.cart.add_to_cart')}}" class="uk-button uk-button-secondary">Add To Cart</button>
                                    @if($isWishlist)
                                    <button disabled class="uk-button uk-button-secondary">Added to wishlist</button>
                                    @else
                                    <button onclick = "window.location = '{{route('frontend.wishlist.add_wishlist',['product_id' => $single_product->first()->id])}}'" class="uk-button uk-button-secondary">Add To Wishlist</button>

                                    @endif
                                </div>
                            </div>
                            <!-- <div class="buy-wrap uk-margin-top">
                                <button class="uk-button uk-button-primary w-full">Buy Product</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="site__default__content uk-padding uk-padding-remove-horizontal">
                        <ul uk-tab>
                            <li class="uk-active"><a href="#">Description</a></li>
                            <li><a href="#">Key Points</a></li>
                            <!-- <li><a href="#">Reviews</a></li> -->
                        </ul>
                        <div class="uk-switcher uk-margin">
                            <div>
                                <h2 class="uk-text-lead">Discription</h2>
                                <p>{{$single_product->first()->description}}</p>
                            </div>
                            <div>
                                <h2 class="uk-text-lead">Key Point</h2>
                                <ul>
                                    <li>{{$single_product->first()->key_points}}</li>
                                    <!-- <li>Asperiores vel magni autem voluptatum quaerat harum. Omnis, quo vel?</li>
                                    <li>Quisquam excepturi magni deleniti porro quasi eaque alias amet dolores!</li>
                                    <li>Provident, architecto? Eos quaerat itaque odit sint dignissimos id optio.</li>
                                    <li>Aut dolor iste sed maxime optio exercitationem, facilis voluptatem temporibus.</li> -->
                                </ul>
                            </div>
                            <!-- <div>
                                <h2 class="uk-text-lead">Reviews</h2>

                            </div> -->
                        </div>

                    </div>
                </div>
            </section>

            
            <!-- New Arriable -->
            <section class="site__new-arriable uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    
                    <h2 class="uk-h2 uk-text-center uk-text-bold">Check Out Our New Arriable</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

                        <ul class="uk-slider-items uk-grid uk-grid-small">
                            @foreach($new_arrivals as $new_arrival)
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="{{url('storage/'.$new_arrival->image_first)}}" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>{{$new_arrival->name}}</h1>
                                        <a href="{{route('frontend.product.single_product',['slug' => $new_arrival->slug])}}" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                    </div>
                </div>
            </section>
            <!-- New Arriable end -->
            <!-- Default page end -->
        </main>
        <!-- Main end -->
        @section('script')
            <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
        @endsection
@endsection