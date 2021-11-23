@extends('frontend.layouts.master')
@section('content')
  <!-- Category Navlist -->
  <section class="site__section-def site__category-nav-list uk-padding uk-padding-remove-horizontal">
            <div class="uk-container">
                <div class="uk-text-center uk-margin-large-bottom">
                    <h1>I'm looking for... </h1>
                </div>
                <div class="uk-child-width-1-3 uk-child-width-1-6@l" uk-grid>
                    @foreach($categories as $category)
                    <div class="site__category-nav-list__link uk-position-relative">
                        <a href="#">
                            <img src="{{url( 'storage/'.$category->cover_image )}}"
                                class="image-cover uk-border-circle" alt="{{$category->name}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Category Navlist end -->

        <!-- Main -->
        <main class="site__main">
            <!-- Feature -->
            <section class="site__feature-list uk-padding-large pb-0 uk-margin-large-top uk-padding-remove-horizontal">
                <div uk-slideshow="animation: push">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slideshow-items">
                            <li>
                                <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg" alt="" uk-cover>
                            </li>
                        </ul>
                
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                
                    </div>
                
                </div>
            </section>
            <!-- Feature end -->

            <!-- Best Sellers -->
            <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
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
                            <!-- <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div uk-slideshow="animation: push">

                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="https://cdn.pixabay.com/photo/2014/10/07/09/17/earphones-477446_960_720.jpg"
                                                            alt="">
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
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
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
                            </li> -->
                        </ul>

                        <a class="uk-position-center-left uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </section>
            <!-- Best Sellers end -->

            <!-- banner -->
            <section class="site__info-banner ">
                <div class="uk-container-expand">
                    <div class="uk-background uk-background-center-center uk-background-cover uk-height-viewport uk-panel uk-flex uk-flex-middle uk-flex-left uk-padding uk-light" uk-parallax="bgy: -200"
                        style="background-image: url(https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg);">
                        <div class="uk-width-1-2">
                            <dl class="uk-description-list">
                                <dt>
                                    <div class="uk-h2 uk-text-primary uk-text-bold">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                </dt>
                                <dd>
                                    <p class="uk-text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, dolore?</p>
                                    <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                </dd>
                            </dl>                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- Best Sellers -->
            <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <h2 class="uk-h2 uk-text-center ">Popular Propduct</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                        <ul
                            class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small uk-grid">
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <a href="{{route('frontend.product.single_product',['slug' => 265])}}"><img
                                            src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg"
                                            alt=""></a>
                                    <div class=" uk-card-body">
                                        <div class="uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <a
                                                    class="uk-text-secondary uk-text-light uk-h5 uk-display-block uk-margin-remove-vertical mb-card-title">Lorem
                                                    ipsum dolor sit amet.</a>
                                                <span
                                                    class="uk-h5 uk-text-secondary uk-text-light line-through uk-margin-small-right">$500</span>
                                                <span class="uk-h5 uk-text-secondary uk-text-lead ">$500</span>
                                            </div>
                                            <div class="uk-width-1-3">
                                            <a href="#"
                                                    class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom" uk-tooltip="Add to cart"><span
                                                        uk-icon="cart"></span></a>
                                                <a href="#" class="uk-button uk-button-icon uk-button-secondary" uk-tooltip="Add to wishlist"><span
                                                        uk-icon="heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-text-white uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </section>
            <!-- Best Sellers end -->

            <!-- Best Sellers -->
            <section class="site__best-seller uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-grid-small uk-light" uk-grid>
                        
                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/03/27/19/31/fashion-1283863_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Sweater</p>
                           </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Lady's Bags</p>
                           </div>
                        </div>
                        
                        <div class="uk-width-1-1 uk-width-1-4@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/03/27/19/31/fashion-1283863_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Sweater</p>
                           </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-3-4@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Lorem ipsum dolor sit.</p>
                           </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-1-3@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Lorem, ipsum dolor.</p>
                           </div>
                        </div>
                        
                        <div class="uk-width-1-1 uk-width-1-4@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/03/27/19/31/fashion-1283863_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Lorem, ipsum.</p>
                           </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" uk-parallax="bgy: -200" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804_960_720.jpg);">
                                <p class="uk-text-lead uk-text-bold uk-text-primary bg-primary-light uk-button">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, esse?</p>
                           </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Best Sellers end -->

            <!-- banner -->
            <section class="site__info-banner ">
                <div class="uk-container-expand">
                    <div class="uk-background uk-background-center-center uk-background-cover uk-height-viewport uk-panel uk-flex uk-flex-middle uk-flex-left uk-padding uk-light" uk-parallax="bgy: -200"
                        style="background-image: url(https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg);">
                        <div class="uk-width-1-2">
                            <dl class="uk-description-list">
                                <dt>
                                    <div class="uk-h2 uk-text-primary uk-text-bold">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                </dt>
                                <dd>
                                    <p class="uk-text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, dolore?</p>
                                    <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                </dd>
                            </dl>                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- Video Slider -->
            <section class="site__video-slide uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                        uk-slideshow="animation: push">

                        <ul class="uk-slideshow-items">
                            <li>
                                <iframe  src="https://www.youtube.com/embed/TDNGEFd-aEE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe  src="https://www.youtube.com/embed/377AQ0y6LPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe  src="https://www.youtube.com/embed/8wA6uPEu9hM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                            uk-slideshow-item="next"></a>

                    </div>
                </div>
            </section>
            <!-- Video Slider end -->

            <!-- zig-jag blog post -->
            <section class="site__blog-list site__blog-list--zig-jag">
                <div class="uk-container-expand">
                    <div class="uk-card">
                        <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                            <div>
                                <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                    style="height:100%;">
                                    <h2><a href="#">Laptop Accessories</a></h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sunt vero
                                        mollitia sapiente eaque deleniti voluptates aliquid quaerat? At, corrupti!</p>
                                    <a href="#" class="uk-button uk-button-default">Shop Now</a>
                                </article>
                            </div>
                            <figure>
                                <a href="#">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"
                                        alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="uk-card">
                        <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                            <div>
                                <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                    style="height:100%;">
                                    <h2><a href="#">Laptop Accessories</a></h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sunt vero
                                        mollitia sapiente eaque deleniti voluptates aliquid quaerat? At, corrupti!</p>
                                    <a href="#" class="uk-button uk-button-default">Shop Now</a>
                                </article>
                            </div>
                            <figure>
                                <a href="#">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"
                                        alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="uk-card">
                        <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                            <div>
                                <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                    style="height:100%;">
                                    <h2><a href="#">Laptop Accessories</a></h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sunt vero
                                        mollitia sapiente eaque deleniti voluptates aliquid quaerat? At, corrupti!</p>
                                    <a href="#" class="uk-button uk-button-default">Shop Now</a>
                                </article>
                            </div>
                            <figure>
                                <a href="#">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"
                                        alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="uk-card">
                        <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                            <div>
                                <article class="uk-padding uk-flex uk-flex-column uk-flex-center uk-flex-middle"
                                    style="height:100%;">
                                    <h2><a href="#">Laptop Accessories</a></h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sunt vero
                                        mollitia sapiente eaque deleniti voluptates aliquid quaerat? At, corrupti!</p>
                                    <a href="#" class="uk-button uk-button-default">Shop Now</a>
                                </article>
                            </div>
                            <figure>
                                <a href="#">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"
                                        alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- zig-jag blog post end -->

            <!-- New Arriable -->
            <section class="site__new-arriable uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    
                    <h2 class="uk-h2 uk-text-center uk-text-bold">Check Out Our New Arriable</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

                        <ul class="uk-slider-items uk-grid uk-grid-small">
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Earbud</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Laptop</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Earbud</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Laptop</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Earbud</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-width-3-4">
                                <div class="uk-panel">
                                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                                    <div class="uk-position-center uk-text-center uk-panel">
                                        <h1>New Laptop</h1>
                                        <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                    </div>
                </div>
            </section>
            <!-- New Arriable end -->
            

            <!-- Client  -->
            <section class="site__client uk-padding-large uk-padding-remove-horizontal">
                <div class="uk-contaier-expand uk-padding uk-padding-remove-vertical">
                    <!-- <h2 class="uk-h2 uk-text-center ">Our Client</h2>
                    <hr class="uk-divider-icon uk-margin-medium-bottom"> -->

                    <div class="uk-child-width-1-3 uk-child-width-1-5@m uk-flex-middle" uk-grid>
                        <figure>
                            <img src="./assets/image/client-1.png" alt="">
                        </figure>
                        <figure>
                            <img src="./assets/image/client-2.png" alt="">
                        </figure>
                        <figure>
                            <img src="./assets/image/client-3.png" alt="">
                        </figure>
                        <figure>
                            <img src="./assets/image/client-4.png" alt="">
                        </figure>
                        <figure>
                            <img src="./assets/image/client-1.png" alt="">
                        </figure>
                    </div>
                </div>
            </section>
            <!-- Client end -->
            
            <!-- Instagram -->
            <section class="site__gallery uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <h2 class="uk-h2 uk-text-center ">#Shopping form <span class="uk-text-bold" style="color: #405de6;">Instagram</span></h2>
                    <h4 class="uk-h5 uk-text-center uk-text-light">Shop from Instagram</h4>
                    <hr class="uk-divider-icon uk-margin-medium-bottom">

                    <div class="uk-grid-small uk-child-with-1-3 uk-child-width-1-5@m" uk-grid>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                        <div class="">
                            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Instagram end -->
        </main>
        <!-- Main end -->
        @section('script')
            <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
        @endsection
@endsection