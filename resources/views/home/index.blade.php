@extends('home.slice.master')

@section('title', 'Page Title')

@section('slider')

    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url(images/splash.jpg)"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Kreasikan <span>Idemu</span>
                            sekarang!</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

@stop

@section('content')
    <p>This is my body content.</p>
@stop