<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WrappersWrap</title>
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugin/uikit/css/uikit.min.css')}}">
    <!-- Google Fonts CSS -->
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
</head>

<body>
    <div class="site site--home">
        <!-- Header -->
        <header class="site__header uk-padding-small uk-padding-remove-horizontal pb-0 bg-accent-cloud">
            <section class="site__header-top">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
                        <div>
                            <a href="{{route('frontend.index')}}">
                                <img class="logo" src="{{URL::asset('assets/image/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="uk-text-right">
                            <div class="uk-flex-middle uk-flex-right uk-flex">
                                <a href = "{{route('frontend.cart.index')}}"
                                    class="uk-button uk-button-transparent uk-padding-remove-vertical uk-border-pill uk-flex uk-flex-middle">
                                    <span class="mr-2" uk-icon="cart"></span>
                                    <span class="uk-display-inline-block">
                                        <span class="cart-text">Cart</span>
                                        @if(Session::has('cart'))
                                        
                                  <span id="totalQty" class="uk-badge">
                                      {{Session::get('cart')->totalQty}}
                                  </span>
                                @else
                                    <span id="totalQty" class="uk-badge" style="display: none">
                                  </span>
                                @endif
                                        <!-- <span class="uk-badge">1</span> -->
                                    </span>
</a>
                                @guest
                                <div 
                                    class="uk-button uk-button-transparent uk-padding-remove-vertical uk-border-pill uk-flex uk-flex-middle">
                                    <span class="mr-2" uk-icon="user"></span>
                                    <span class="uk-display-inline-block uk-text-left">
                                        <a href="{{route('frontend.login.get_login')}}" class="cart-text uk-button uk-padding-remove-vertical uk-flex">Login</a>
                                        <a href = "{{route('frontend.register.get_register')}}" class="cart-text uk-button uk-padding-remove-vertical uk-flex">Register</a>
                                    </span>
                                </div>
                                @endguest
                                @auth
                                <div
                                    class="uk-button uk-button-transparent uk-padding-remove-vertical uk-border-pill uk-flex uk-flex-middle">
                                    <span class="mr-2" uk-icon="user"></span>
                                    <span class="uk-display-inline-block uk-text-left">
                                        <a href = "{{route('frontend.account.logout')}}" class="cart-text uk-button uk-padding-remove-vertical uk-flex">Logout</a>
                                        <a href = "{{route('frontend.account.index')}}" class="cart-text uk-button uk-padding-remove-vertical uk-flex">My Account</a>
                                    </span>
                                </div>
                                @endauth
                                <button class="uk-toggle-button uk-hidden@m" type="button" uk-toggle="target: #offcanvas-nav">
                                    <a class="uk-navbar-toggle" href="#">
                                        <span uk-navbar-toggle-icon></span>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="uk-navbar-container uk-margin uk-visible@m bg-primary uk-light" uk-navbar="mode: hover;">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical w-full">
                    <div class="uk-navbar-center uk-flex-center">

                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="{{route('frontend.index')}}">Home</a></li>
                            @foreach(App\Models\Category::whereNull('parent_id')->get() as $category)
                            <li class="uk-active"><a href="">{{$category->name}}</a></li>
                            @endforeach
                            <li>
                                <a href="#">Mobile Acc</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-nav-header">Innerpages Link</li>
                                        <li class="uk-nav-divider"></li>
                                        <li class="uk-active"><a href="{{route('frontend.default')}}">Default Page</a></li>
                                        <li class=""><a href="{{route('frontend.about_us')}}">About Us</a></li>
                                        <li class=""><a href="{{route('frontend.product.index')}}">Product</a></li>
                                        <li class=""><a href="{{route('frontend.product.single_product',['slug' => 265])}}">Single Product</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Mega Menu  <span uk-icon="chevron-down"></span></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-nav-header">Header</li>
                                                <li class="uk-nav-divider"></li>
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-nav-header">Header</li>
                                                <li class="uk-nav-divider"></li>
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-nav-header">Header</li>
                                                <li class="uk-nav-divider"></li>
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </nav>

            <div id="offcanvas-nav" uk-offcanvas="overlay: true; mode: reveal;">
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                        <li class="uk-active"><a href="#">Home</a></li>
                            <li class="uk-parent">
                                <a href="#">Mobile</a>
                                <ul class="uk-nav uk-nav-sub">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">Electornics</a></li>
                            <li><a href="#">Kitcen</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Cameras</a></li>
                    </ul>

                </div>
            </div>
        </header>
        <!-- Header end -->

        @yield('content')

        <!-- Footer -->
        <section
            class="site__footer-social uk-padding-small uk-padding-remove-horizontal uk-background-primary">
            <div class="uk-container">
                <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle" uk-grid>
                    <div>
                        <h3 class="uk-light uk-h3">Get connected with us on social networks!</h3>
                    </div>
                    <div>
                        <ul
                            class="uk-iconnav uk-flex uk-flex-wrap uk-flex-row uk-flex-center uk-flex-right uk-text-right uk-light">
                            <li><a href="#"><span uk-icon="facebook"></span></a></li>
                            <li><a href="#"><span uk-icon="twitter"></span></a></li>
                            <li><a href="#"><span uk-icon="instagram"></span></a></li>
                            <li><a href="#"><span uk-icon="google"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site__footer uk-padding uk-padding-remove-horizontal bg-primary uk-light">
            <section class="site__footer__top">
                <div class="uk-container">
                    <div class="uk-grid-divider" uk-grid>
                        <div>
                            <h4>Sign up for newsletter</h4>
                            <form action="">
                                <div class="uk-grid-collapse" uk-grid>
                                    <div class="uk-inline uk-width-expand@m">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input h-full" type="text" placeholder="Email Address">
                                    </div>
                                    <div>
                                        <button type="submit" class="uk-button uk-button-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-divider"
                                uk-grid>
                                <div>
                                    <h4>Customer Services</h4>
                                    <ul class="uk-list">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Track Your Order</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Shop</h4>
                                    <ul class="uk-list">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Track Your Order</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Information</h4>
                                    <ul class="uk-list">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Track Your Order</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="uk-divider-icon">
            <section class="site__footer__bottom uk-margin-small-top">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-flex-middle uk-grid-divider" uk-grid>
                        <div>
                            <a href="#">
                                <img class="logo" src="./assets/image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="uk-width-expand uk-text-center">
                            <p>&copy; Copyright 2021 | All right reserved.</p>
                        </div>
                        <div class="">
                            <uk class="uk-flex uk-iconnav">
                                <li><a href="#" class="uk-text-primary">Privacy Policy</a></li>
                                <li><a href="#" class="uk-text-primary">Terms & Conditions</a></li>
                            </uk>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- Footer end -->
    </div>

    <!-- UIKit JS -->
    <script src="{{URL::asset('assets/plugin/uikit/js/uikit.js')}}"></script>
    <script src="{{URL::asset('assets/plugin/uikit/js/uikit-icons.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    @yield('script')

</body>

</html>