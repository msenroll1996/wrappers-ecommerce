@extends('frontend.layouts.master')
@section('content')
<main class="site__main">
   <!-- Default page -->
   <section class="site__default uk-padding uk-padding-remove-horizontal ">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="uk-text-left">
                <h1 class="uk-h1">{{$title}}</h1>
            </div>
        </div>
    </section> 
    <!-- <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <h2 class="uk-h2 uk-text-center ">Best Seller</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                        <ul
                            class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small uk-grid">
                            @foreach($products as $product)
                            
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
    </section> -->
           <!-- zig-jag blog post -->
            <section class="site__blog-list site__blog-list--zig-jag bg-accent-cloud">
                <div class="uk-container-expand">
                @foreach($child_categories as $child)
                    @if($child->child_categories->count() > 0)
                        @foreach($child->child_categories as $c)
                            <div class="uk-card">
                            <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                                <div>
                                    <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                        style="height:100%;">
                                        <h2 class="uk-text-primary">{{$c->name}}</h2>
                                        <p>{{$c->description}}</p>
                                        <a href="{{route('frontend.product.collection',['page' => $c->slug])}}" class="uk-button uk-button-default">Shop Now</a>
                                    </article>
                                </div>
                                <figure>
                                    <a href="#">
                                        <img src="{{ url( 'storage/'.$c->cover_image ) }}"
                                            alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="uk-card">
                            <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                                <div>
                                    <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                        style="height:100%;">
                                        <h2 class="uk-text-primary">{{$child->name}}</h2>
                                        <p>{{$child->description}}</p>
                                        <a href="{{route('frontend.product.collection',['page' => $child->slug])}}" class="uk-button uk-button-default">Shop Now</a>
                                    </article>
                                </div>
                                <figure>
                                    <a href="{{route('frontend.product.collection',['page' => $child->slug])}}">
                                        <img src="{{ url( 'storage/'.$child->cover_image ) }}"
                                            alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    @endif    
                @endforeach    
                   
                </div>
            </section>
            <br/>
            <!-- <section class="site__section-gap uk-padding uk-padding-remove-horizontal"></section> -->
            <!-- zig-jag blog post end -->
            <!-- Default page end -->
            <!-- Item List -->
            <section class="site__default mobile-acc-wrapper uk-padding uk-padding-remove-horizontal" style="padding-top: 0;">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
                        @foreach($child_categories as $child)
                            @if($child->child_categories->count() > 0)
                                @foreach($child->child_categories as $c)
                                <div>
                                    <div class="overfow-hidden uk-position-relative">
                                        <a 
                                        href="{{route('frontend.product.collection',['page' => $c->slug])}}" 
                                        class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                        data-src="{{ url( 'storage/'.$c->cover_image ) }}" 
                                        uk-img
                                        >
                                            <div class="uk-overlay-default uk-position-cover"></div>
                                            <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3 class="uk-text-secondary">{{$c->name}}</h3></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div>
                                    <div class="overfow-hidden uk-position-relative">
                                        <a 
                                        href="{{route('frontend.product.collection',['page' => $child->slug])}}" 
                                        class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                        data-src="{{ url( 'storage/'.$child->cover_image ) }}" 
                                        uk-img
                                        >
                                            <div class="uk-overlay-default uk-position-cover"></div>
                                            <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3 class="uk-text-secondary">{{$child->name}}</h3></div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- <div>
                            <div class="overfow-hidden uk-position-relative">
                                <a 
                                href="#" 
                                class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                                uk-img
                                >
                                    <div class="uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3>Items Title</h3></div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="overfow-hidden uk-position-relative">
                                <a 
                                href="#" 
                                class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                                uk-img
                                >
                                    <div class="uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3>Items Title</h3></div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="overfow-hidden uk-position-relative">
                                <a 
                                href="#" 
                                class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                                uk-img
                                >
                                    <div class="uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3>Items Title</h3></div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="overfow-hidden uk-position-relative">
                                <a 
                                href="#" 
                                class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                                uk-img
                                >
                                    <div class="uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3>Items Title</h3></div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="overfow-hidden uk-position-relative">
                                <a 
                                href="#" 
                                class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                                data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                                uk-img
                                >
                                    <div class="uk-overlay-default uk-position-cover"></div>
                                    <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3>Items Title</h3></div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- Item list -->

            <!-- Best Sellers -->
            @if($products->isNotEmpty())
            <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <h2 class="uk-h2 uk-text-center ">Featured Products</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                        <ul
                            class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small uk-grid">
                            @foreach($products as $product)
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}"><img
                                            src="{{url('storage/'.$product->image_first)}}"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">{{$product->name}}</a>
                                                <!-- <span class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span> -->
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">Rs {{$product->selling_price}}</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary"><span
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
            @endif
            <!-- Best Sellers end -->
</main>
@section('script')
            <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
        @endsection
@endsection