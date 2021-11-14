@extends('frontend.layouts.master')
@section('content')
<!-- Main -->
<main class="site__main">
            <!-- Default page -->
            <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-text-center">
                        <h1 class="uk-h1">Our Product</h1>
                    </div>
                </div>
            </section>

            <!-- banner -->
            <section class="site__info-banner ">
                <div class="uk-container-expand">
                    <div class="uk-background uk-background-center-center uk-background-cover uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-left uk-padding uk-light"
                        uk-parallax="bgy: -200"
                        style="background-image: url(https://cdn.pixabay.com/photo/2017/06/29/10/28/games-2453777_960_720.jpg);">
                        <div class="uk-width-1-2">
                            <dl class="uk-description-list">
                                <dt>
                                    <div class="uk-h2 uk-text-primary uk-text-bold">Lorem ipsum dolor sit amet
                                        consectetur adipisicing.</div>
                                </dt>
                                <dd>
                                    <p class="uk-text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Numquam, dolore?</p>
                                    <a href="#" class="uk-button uk-button-primary">Shop Now</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->


            <!-- Product -->
            <section class="site__product-list uk-padding uk-padding-remove-horizontal">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-4@l" uk-grid>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                        <div>
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
                                            <span class="uk-h5 uk-text-primary uk-text-lead ">$500</span>
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product end -->

            
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
            <!-- Default page end -->
        </main>
        <!-- Main end -->
@endsection