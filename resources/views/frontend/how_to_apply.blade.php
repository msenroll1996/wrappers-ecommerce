@extends('frontend.layouts.master')
@section('content')
<!-- Main -->
<main class="site__main">
    
<section class="site__video-slide uk-padding uk-padding-remove-horizontal bg-accent-cloud">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                        uk-slideshow="animation: push">

                        <ul class="uk-slideshow-items">
                            <li>
                                <iframe  src="https://www.youtube.com/embed/bunYgW6M79M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                            uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                            uk-slideshow-item="next"></a>

                    </div>
                </div>
            </section>
        </main>
        <!-- Main end -->
@endsection