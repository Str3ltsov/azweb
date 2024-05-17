@extends('layout.app')

@section('title', __('menu.contacts'))

@section('content')
    {{-- <section class="contact__area pt-100 pb-60">
        <div class="container">
            @include('messages')
            <div class="row wow fadeInUp mt-50" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-lg-6">
                    <div class="contact__info-wrapper mb-30">
                        <div class="section__title-one mb-20">
                            <span>// {{ __('pages.contactUs') }}</span>
                            <h2>{{ __('pages.contacts') }}</h2>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[0]->title }}</span>
                                <h5>{{ $contacts[0]->description }}</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[1]->title }}</span>
                                <h5>{{ $contacts[1]->description }}</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[2]->title }}</span>
                                <h5><a
                                        href="tel:{{ implode(explode(' ', $contacts[2]->description)) }}">{{ $contacts[2]->description }}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[3]->title }}</span>
                                <h5><a href="mailto:{{ $contacts[3]->description }}">{{ $contacts[3]->description }}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[4]->title }}</span>
                                <h5><a target="_blank"
                                        href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">{{ $contacts[4]->description }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form bd-ud-contact-form mb-60">
                        @include('contacts.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="contact-us section-margin">
        <div class="container position-relative">
            <div class="row">
                <!-- Heading Start -->
                <div class="heading-one text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <span class="heading-one-subtitle">{{ __('menu.contacts') }}</span>
                    <h2 class="heading-one-title">{{ __('pages.stayConnected') }}</h2>
                </div>
                <!-- Heading End -->
            </div>
            <div class="row mb-n30">
                <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <!-- Contact Information Start -->
                    <ul class="contact-info">
                        <li>
                            <div class="icon"><i class="fas fa-solid fa-tag"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">{{ $contacts[0]->title }}</h3>
                                <span class="text">{{ $contacts[0]->description }}</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-solid fa-file-invoice"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">{{ $contacts[1]->title }}</h3>
                                <span class="text">{{ $contacts[1]->description }}</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">{{ $contacts[4]->title }}</h3>
                                <span class="text">
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                        {{ $contacts[4]->description }}
                                    </a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">{{ $contacts[2]->title }}</h3>
                                <span class="text">
                                    <a href="tel:{{ $contacts[2]->description }}">
                                        {{ $contacts[2]->description }}
                                    </a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-info-content">
                                <h3 class="title">{{ $contacts[3]->title }}</h3>
                                <span class="text">
                                    <a href="mailto:{{ $contacts[3]->description }}">{{ $contacts[3]->description }}</a>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <!-- Contact Information End -->
                </div>

                <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    @include('contacts.contact_form')
                </div>
            </div>
        </div>
    </div>
@endsection
