@extends('frontend.layouts.master')

    @section('content')
    <main class="site__main">
            <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                        <b class="uk-h2">My Account</b>
                </div>
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                        <b class="uk-h2">Welcome {{$user->first_name}}</b>
                </div>
            </section>
</main>
    @endsection