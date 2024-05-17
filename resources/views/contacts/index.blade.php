@extends('layout.app')

@section('title', __('menu.contacts'))

@section('content')
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
                                    {{ $contacts[4]->description }}
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
