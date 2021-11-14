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
                                        <div class="flash-message">
                                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                    @if(Session::has('alert-validation-' . $msg))

                                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-validation-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <h3 class="uk-card-title uk-text-center">Create an Account</h3>
                                            <form class="uk-form-stacked" action="{{route('frontend.register.post_register')}}" method="post">
                                            
                                            @csrf
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="first_name">
                                                        First Name
                                                    </label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-inline uk-width-1-1">
                                                            <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Alpha-numeric characters.<br>Minimum 3 characters.<br>Maximum 16 characters.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                                            <input class="uk-input" id="first_name" name="first_name" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="last_name">
                                                        Last Name
                                                    </label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-inline uk-width-1-1">
                                                            <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Alpha-numeric characters.<br>Minimum 3 characters.<br>Maximum 16 characters.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                                            <input class="uk-input" id="last_name" name="last_name" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="email">
                                                        Email
                                                    </label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-inline uk-width-1-1">
                                                            <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Must be a valid email.<br>One account per email.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                                            <input class="uk-input" id="email" name="email" type="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="password">
                                                        Password
                                                    </label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-inline uk-width-1-1">
                                                            <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Minimum 8 characters.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                                            <input class="uk-input" id="password" name="password" type="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="confirm_password">
                                                        Repeat Password
                                                    </label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-inline uk-width-1-1">
                                                            <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Must match the password field.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                                            <input class="uk-input" id="confirm_password" name="confirm_password" type="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label>
                                                        <input class="uk-checkbox" name="terms_of_service" type="checkbox"> I accept the <a href="">terms of service</a>.
                                                    </label>
                                                </div>
                                                <button class="uk-button uk-button-primary uk-width-1-1" type="submit">Register</button>
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