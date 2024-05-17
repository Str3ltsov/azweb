<div class="footer-three">
    <div class="shape scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15"
        style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: inherit;">
        <div class="shape1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/1.png') }}" alt="shape">
        </div>
        <div class="shape2 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/2.png') }}" alt="shape">
        </div>
        <div class="shape3 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/3.png') }}" alt="shape">
        </div>
        <div class="shape4" data-depth="0.08" style="transform: translate3d(-15px, 2.9px, 0px);">
            <img src="{{ asset('template/images/footer/shape/4.png') }}" alt="shape">
        </div>
        <div class="shape5 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/5.png') }}" alt="shape">
        </div>
        <div class="shape6 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/6.png') }}" alt="shape">
        </div>
        <div class="shape7" style="transform: translate3d(0px, 0px, 0px);">
            <img src="{{ asset('template/images/footer/shape/7.png') }}" alt="shape">
        </div>
        <div class="shape8 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/8.png') }}" alt="shape">
        </div>
        <div class="shape9 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/9.png') }}" alt="shape">
        </div>
        {{-- <div class="shape10 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/10.png') }}" alt="shape">
        </div> --}}
        <div class="shape11 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/11.png') }}" alt="shape">
        </div>
        <div class="shape12" data-depth="0.04" style="transform: translate3d(-7.5px, 1.4px, 0px);">
            <img src="{{ asset('template/images/footer/shape/12.png') }}" alt="shape">
        </div>
        <div class="shape13 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s"
            style="transform: translate3d(0px, 0px, 0px); visibility: visible;">
            <img src="{{ asset('template/images/footer/shape/13.png') }}" alt="shape">
        </div>
        <div class="shape14" data-depth="0.04" style="transform: translate3d(-7.5px, 1.4px, 0px);">
            <img src="{{ asset('template/images/contact/1.png') }}" alt="shape">
        </div>
    </div>

    <!-- Footer Two Start -->
    <div class="footer-two">
        <div class="container">
            <div class="row mb-n30">
                <div class="@auth col-lg-3 @else col-lg-5 @endauth col-md-6 col-sm-6 mb-30 wow fadeIn"
                    data-wow-duration="1.5s" data-wow-delay=".1s" style="visibility: visible;">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget-two">
                        <div class="logo negative-margin">
                            <a href="{{ route('mainPage') }}">
                                <img src="{{ asset('images/azweb_logo.jpeg') }}" alt="AZWeb"
                                    style="max-width: 15rem">
                            </a>
                        </div>
                        <ul class="footer-widget-two-list-icon list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt me-1"></i>
                                <span>{{ $contacts[4]->description }}</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>{{ $contacts[2]->description }}</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>{{ $contacts[3]->description }} </span>
                            </li>
                        </ul>
                        {{-- <ul class="social-icon d-flex flex-start list-unstyled">
                            <li>
                                <a href="https://www.facebook.com/" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="linkedin"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s"
                    style="visibility: visible;">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget-two">
                        <div class="widget-list-wrapper">
                            <div class="widget-list-single">
                                <h5 class="footer-widget-two-title">{{ __('menu.menu') }}</h5>
                                <ul class="footer-widget-two-list list-unstyled">
                                    @foreach ($pages as $page)
                                        <li class="menu-last">
                                            <a href="{{ url("/pages/$page->route") }}">{{ $page->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                @auth
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30 wow fadeIn" data-wow-duration="1.5s"
                        data-wow-delay=".3s" style="visibility: visible;">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget-two">
                            <div class="widget-list-wrapper">
                                <div class="widget-list-single">
                                    <h5 class="footer-widget-two-title">{{ __('menu.adminMenu') }}</h5>
                                    <ul class="footer-widget-two-list list-unstyled">
                                        <li>
                                            <a href="{{ route('puslapiai.index') }}">
                                                {{ __('menu.pages') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('kontaktai.index') }}">
                                                {{ __('menu.contacts') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pranesimai.index') }}">
                                                {{ __('menu.messages') }}
                                            </a>
                                        </li>
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); confirm('{{ __('messages.confirmLogout') }}') && document.getElementById('logout-form').submit();">
                                                    {{ __('menu.logout') }}
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                @endauth
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30 wow fadeIn" data-wow-duration="1.5s"
                    data-wow-delay=".3s" style="visibility: visible;">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget-two">
                        <div class="widget-list-wrapper">
                            <div class="widget-list-single">
                                <h5 class="footer-widget-two-title">{{ __('pages.stayConnected') }}</h5>
                                <a href="{{ route('contacts') }}" class="btn btn-style-one" type="submit">
                                    <span>{{ __('buttons.contactUs') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
            <div class="row footer-two-copyright">
                <div class="col-12 position-relative">
                    <div class="footer-two-copyright-inner justify-content-center">
                        <p class="order-md-1 order-2">
                            {{ __('footer.allRightsReserved') . ' © 2024 "MB Azweb"' }}
                        </p>

                        {{-- <ul class="footer-two-bootm-list order-md-2 order-1 list-unstyled">
                            <li><a href="contact.html">Terms &amp; Condition</a></li>
                            <li><a href="contact.html">Privecy Policy</a></li>
                            <li><a href="contact.html">Legal</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Two End -->
</div>
