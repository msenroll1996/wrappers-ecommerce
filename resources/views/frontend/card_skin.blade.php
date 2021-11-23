@extends('frontend.layouts.master')
@section('content')
<main class="site__main">
   <!-- Default page -->
   <section class="site__default uk-padding uk-padding-remove-horizontal ">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="uk-text-left">
                <h1 class="uk-h1">CARD SKINS </h1>
            </div>
        </div>
        <section class="grid-changer" style="padding: 10px 0; background-color: #f5f5f5;">
            <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-1-1 uk-width-1-2@l">
                        <div class="uk-flex uk-flex-middle">
                            View As:
                            <ul class="uk-iconnav" uk-switcher="connect: #item-list" style="margin-left: 20px;">
                                <li><a href="#" uk-icon="icon: grid"></a></li>
                                <li><a href="#" uk-icon="icon: list"></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@l">
                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@s">
                                <div class="uk-flex uk-flex-middle">
                                    <label for="page_limit" class="uk-text-uppercase uk-width-1-1 uk-width-1-3@l" style="font-size: 12px;">Items Per Page</label>
                                    <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                        <select id="page_limit" name="page_limit">
                                            <option value="1">10</option>
                                            <option value="2">12</option>
                                            <option value="3">16</option>
                                            <option value="4">20</option>
                                            <option value="5">30</option>
                                            
                                        </select>
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-flex uk-flex-middle">
                                    <label for="sort" class="uk-text-uppercase uk-width-1-1 uk-width-1-5@l" style="font-size: 12px;">Sort By</label>
                                    <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                        <select id="page_limit" name="sort">
                                            <option value="1">Featured</option>
                                            <option value="2">Best Selling</option>
                                            <option value="3">Alphabetically, A-Z</option>
                                            <option value="4">Alphabetically, Z-A</option>
                                            <option value="5">Price, low to high</option>
                                            <option value="6">Price, high to low</option>
                                            <option value="7">Date, old to new</option>
                                            <option value="8">Date, new to old</option>
                                            
                                        </select>
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section> 


    <!-- Item List -->
    <div class="uk-switcher" id="item-list">
        <section class="site__default grid-view uk-padding uk-padding-remove-horizontal" style="padding-top: 0;">
            <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-4@l" uk-grid>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-position-relative">
                            <a href="#" class="uk-card-media-top">
                                <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" class="uk-border-rounded" alt="">
                                <a href="#" class="uk-position-absolute uk-position-top-right uk-text-white" style="margin-right: 10px; margin-top: 10px;">Quick View</a>
                            </a>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="site__default list-view uk-padding uk-padding-remove-horizontal uk-width-3-4@l" style="padding-top: 0;">
            <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding uk-padding-remove-vertical" style="box-shadow: none;">
                    <div uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-1-1 uk-width-1-5@l">
                            <img src="https://cdn.pixabay.com/photo/2015/01/20/12/51/mobile-605422_960_720.jpg" alt="" uk-cover>
                            <canvas width="" height=""></canvas>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@l">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title" style="margin-bottom: 10px;"><a href="#" class="uk-text-secondary">Custom Card</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eveniet hic itaque sint iusto quisquam dolore suscipit perspiciatis fugit explicabo ab est inventore corrupti, dolor omnis recusandae nemo unde maxime?</p>
                                <span class="uk-text-bold uk-text-secondary">Rs. 150</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>
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