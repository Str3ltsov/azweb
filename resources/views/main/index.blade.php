@extends('layout.app')

@section('title', $page->name)

@section('content')
    {{-- <main>
        <div class="banner5-area pos-rel fix bg-css" data-background="assets/img/hero/globe-bg.jpg"
            style="background-image: url(&quot;assets/img/hero/globe-bg.jpg&quot;);">
            <div class="slider5-height d-flex align-items-center">
                <div class="et-tsparticles">
                    <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"
                            width="3840" height="1620"></canvas></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="p-relative">
                                <h2 class="banner5-title mb-25 wow fadeInUp" data-wow-delay=".5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    {{ __('pages.mainTitle') }}
                                </h2>
                                <!--<div class="banner5-text wow fadeInUp mb-115" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                                                <p>UAB "Solita" yra start-up tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas. </p>
                                                            </div>-->
                                <div class="banner5-btn wow fadeInUp" data-wow-delay=".9s"
                                    style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                    <div class="et-btn-5">
                                        <a href="{{ url('/pages/paslaugos') }}">{{ __('buttons.services') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('main.blocks')
        <section class="et-artificial p-relative fix bg-css pt-120" data-background="assets/img/bg/artificial-bg.png"
            style="background-image: url('assets/img/bg/artificial-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="et-artificial-content wow fadeInUp" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="section-intro mb-60">
                                <h2 class="section-title white-color">{{ __('pages.blockTitle') }}</h2>
                            </div>
                            <p>{{ __('pages.blockParagraph1') }}
                                <br>{{ __('pages.blockParagraph2') }}</br>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="et-artificial-img-wrap p-absolute d-none d-xl-block">
                            <div class="et-artificial-shape et-artificial-shape-1 p-absolute">
                                <img src="assets/img/artificial/artificial-shape-1.png" alt="artificial">
                            </div>
                            <div class="et-artificial-shape et-artificial-shape-2 p-absolute">
                                <img src="assets/img/artificial/artificial-shape-2.png" alt="artificial">
                            </div>
                            <div class="et-artificial-img w-img">
                                <img src="assets/img/artificial/call_center.jpg" alt="artificial">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> --}}
    <div class="hero">
        <div class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15"
            style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: inherit;">
            <div class="hero-shape shape-1" style="transform: translate3d(0px, 0px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape1.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-2" style="transform: translate3d(0px, 0px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape2.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-3" data-depth="0.04" style="transform: translate3d(-3.4px, 2.6px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape3.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-4" data-depth="0.08" style="transform: translate3d(-6.7px, 5.2px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape4.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-5" data-depth="0.04" style="transform: translate3d(-3.4px, 2.6px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape5.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-6" data-depth="0.04" style="transform: translate3d(-3.4px, 2.6px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape6.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-7" data-depth="0.14" style="transform: translate3d(-11.7px, 9.1px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape7.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-8" data-depth="0.08" style="transform: translate3d(-6.7px, 5.2px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape8.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-9" data-depth="0.10" style="transform: translate3d(-8.4px, 6.5px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape9.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-10" data-depth="0.14" style="transform: translate3d(-11.7px, 9.1px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape10.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-12" style="transform: translate3d(0px, 0px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape12.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-13" style="transform: translate3d(0px, 0px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape13.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-14" data-depth="0.08" style="transform: translate3d(-6.7px, 5.2px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape14.png') }}" alt="Shape"></div>
            <div class="hero-shape shape-15" data-depth="0.08" style="transform: translate3d(-6.7px, 5.2px, 0px);"><img
                    src="{{ asset('template/images/slider/sliderthree-shape/shape15.png') }}" alt="Shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <span class="subtitle">{{ __('other.infoAvailableSoon') }}</span>
                        <h2 class="title">{{ __('other.infoAvailableSoon') }}</h2>
                        <p class="text">{{ __('other.infoAvailableSoon') }}.</p>
                        <a href="{{ route('otherPage', $pages[3]->route) }}" class="btn-style-one">
                            <span>{{ __('buttons.services') }}</span>
                        </a>
                    </div>
                    <!-- Hero Content End -->
                </div>
                <div class="col-lg-6">
                    <!-- Image Wrapper Start -->
                    <div class="hero-image-wrapper">
                        <!-- Hero Facts Start -->
                        <div class="hero-facts">
                            <div class="hero-facts-info">
                                <div class="hero-facts-info-review">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <p class="hero-facts-info-text">
                                    {{ __('other.infoAvailableSoon') }}.
                                </p>
                                <h5 class="hero-facts-client-name">
                                    - {{ __('other.infoAvailableSoon') }}
                                </h5>
                            </div>
                            <div class="hero-facts-client">
                                <img src="{{ asset('template/images/slider/slider3-2.png') }}" alt="">
                                <h5 class="hero-facts-client-name">
                                    {{ __('other.infoAvailableSoon') }}
                                </h5>
                            </div>
                            <div class="hero-facts-shape1">
                                <img src="{{ asset('template/images/slider/sliderthree-shape/shape18.png') }}"
                                    alt="">
                            </div>
                            <div class="hero-facts-shape2">
                                <img src="{{ asset('template/images/slider/sliderthree-shape/shape11.png') }}"
                                    alt="">
                            </div>
                            <div class="hero-facts-shape3">
                                <img src="{{ asset('template/images/slider/sliderthree-shape/shape16.png') }}"
                                    alt="">
                            </div>
                            <div class="hero-facts-shape4">
                                <img src="{{ asset('template/images/slider/sliderthree-shape/shape17.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <!-- Hero Facts End -->
                        <!-- Hero Images Start -->
                        <div class="hero-image">
                            <img class="js-tilt" src="{{ asset('template/images/slider/slider3-1.png') }}"
                                alt="HeroImage"
                                style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg);">
                        </div>
                        <!-- Hero Images End -->
                    </div>
                    <!-- Image Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    @include('main.blocks')
@endsection

@push('styles')
    <style>
        .about-two-images {
            height: fit-content;
        }

        .about-two-text ol li,
        .about-two-text ul li {
            font-size: 16px;
            font-weight: normal;
            color: #717788;
            margin-bottom: 10px;
            margin-left: 23px;
            font-family: "Open Sans", sans-serif;
        }

        .about-two-text p {
            line-height: 1.9rem;
        }
    </style>
@endpush
