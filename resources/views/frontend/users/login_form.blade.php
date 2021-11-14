@extends('frontend.layouts.master')

    @section('content')
    <main class="site__main">
            <!-- Default page -->
            <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <!-- <div class="uk-text-center">
                        <h1 class="uk-h1">My Wishlist</h1>
                    </div> -->

                    <div class="uk-section uk-flex uk-flex-middle uk-animation-fade" >
                        <div class="uk-width-1-1">
                            <div class="uk-container">
                                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-1-1@m">
                                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                                            <h3 class="uk-card-title uk-text-center">Customer Login!</h3>
                                            <div class="flash-message">
                                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))

                                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
                                            @endif
                                            @endforeach
                                        </div>
                                            <form method = "post" action = "{{route('frontend.login.post_login')}}">
                                                @csrf
                                                <div class="uk-margin">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                                        <input class="uk-input uk-form-large" type="email" name = "email" placeholder = "Email" required>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                                        <input class="uk-input uk-form-large" type="password" name = "password" placeholder = "Password" required>	
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                                </div>
                                                <div class="uk-text-small uk-text-center">
                                                    Not registered? <a href="{{route('frontend.register.get_register')}}">Create an account</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Default page end -->
        </main>
    @endsection