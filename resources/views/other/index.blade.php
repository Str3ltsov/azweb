@extends('layout.app')

@section('title', $page->name)

@section('content')
    <div class="section-padding about-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeIn;">
                    <!-- About Images Start -->
                    <div class="about-two-images me-0">
                        <div class="about-two-images-one">
                            <img class="js-tilt"
                                src="{{ $page->image ? asset($page->image) : asset('template/images/about/about-4.png') }}"
                                alt="{{ $page->name }}"
                                style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg);">
                            @if ($page->show_experience)
                                <div class="about-two-images-thumb gradient-2 text-center">
                                    <span class="text"
                                        style="max-width: min-content; line-height: calc(1rem + .5rem)">{{ __('pages.experienceYears') }}</span>
                                    <span class="date">{{ $page->experience_years }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- About Images End -->
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeIn;">
                    <!-- Heading Start -->
                    <div class="heading-one">
                        <span class="heading-one-subtitle">{{ $page->name }}</span>
                        <h2 class="heading-one-title">{{ $page->title }}</h2>
                        <div class="about-two-text">
                            {!! $page->text !!}
                        </div>
                    </div>
                    <!-- Heading End -->
                </div>
            </div>
        </div>
    </div>
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
            margin-left: 40px;
            font-family: "Open Sans", sans-serif;
        }

        .about-two-text p {
            line-height: 1.9rem;
        }
    </style>
@endpush
