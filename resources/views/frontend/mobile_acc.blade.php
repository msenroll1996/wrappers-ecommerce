@extends('frontend.layouts.master')
@section('content')
<main class="site__main">
   <!-- Default page -->
   <section class="site__default uk-padding uk-padding-remove-horizontal ">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="uk-text-left">
                <h1 class="uk-h1">Mobile Accessories</h1>
            </div>
        </div>
    </section> 

    <!-- Item List -->
    <section class="site__default mobile-acc-wrapper uk-padding uk-padding-remove-horizontal" style="padding-top: 0;">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
                <div>
                    <div class="overfow-hidden uk-position-relative">
                        <a 
                        href="#" 
                        class="uk-height-large uk-text-decoration-none mobile-acc--card uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                        data-src="https://cdn.pixabay.com/photo/2014/08/05/10/27/iphone-410311_960_720.jpg" 
                        uk-img
                        >
                            <div class="uk-overlay-default uk-position-cover"></div>
                            <div class="uk-overlay uk-dark" style="position: relative; z-index: 2;"><h3 class="uk-text-secondary">Items Title</h3></div>
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
            </div>
        </div>
    </section>
    <!-- Item list -->

    <!-- Best Sellers -->
    <section class="site__best-seller uk-padding uk-padding-remove-horizontal">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <h2 class="uk-h2 uk-text-center ">Trending Skins</h2>
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
                                            class="uk-button uk-button-icon uk-button-primary uk-margin-small-bottom"><span
                                                uk-icon="cart"></span></a>
                                        <a href="#" class="uk-button uk-button-icon uk-button-secondary"><span
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
</main>
@endsection