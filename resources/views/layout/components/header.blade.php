<header class="header-wrapper-two header-two sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="flex-center justify-content-between">
                    <!-- Header Logo Start -->
                    <div class="logo">
                        <a href="{{ route('mainPage') }}">
                            <img class="logo-2" src="{{ asset('images/azweb_logo.jpeg') }}" alt="AZWeb"
                                style="max-width: 13rem">
                        </a>
                    </div>
                    <!-- Header Logo End -->

                    <div class="flex-center header-right">
                        <!-- Header Menu Start -->
                        <div class="d-none d-lg-flex header-right_menu">
                            <nav class="main-menu">
                                <ul class='list-unstyled'>
                                    @foreach ($pages as $page)
                                        <li>
                                            <a href="{{ url("/p/$page->route") }}">{{ $page->name }}</a>
                                        </li>
                                    @endforeach
                                    <li class="has-children">
                                        <a href="javascript:void(0)">
                                            @foreach (config('app.locales') as $key => $locale)
                                                @if ($key == app()->getLocale())
                                                    @if ($key == 'lt')
                                                        <img src="{{ asset('images/flags/lt.png') }}" alt="LT"
                                                            style="width: 20%; padding-right: 4px;">
                                                    @elseif ($key == 'en')
                                                        <img src="{{ asset('images/flags/gb.png') }}" alt="GB"
                                                            style="width: 20%; padding-right: 4px;">
                                                    @endif
                                                    {{ $locale }}
                                                @endif
                                            @endforeach
                                            <i class="fas fa-solid fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu list-unstyled">
                                            @foreach (config('app.locales') as $key => $locale)
                                                <li>
                                                    <a href="/{{ $key }}">
                                                        @if ($key == 'lt')
                                                            <img src="{{ asset('images/flags/lt.png') }}" alt="LT"
                                                                style="width: 15%; padding-right: 4px;">
                                                        @elseif ($key == 'en')
                                                            <img src="{{ asset('images/flags/gb.png') }}" alt="GB"
                                                                style="width: 15%; padding-right: 4px;">
                                                        @endif
                                                        {{ $locale }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Actions Start -->
                        <div class="header-right_actions flex-center">
                            <div class="header-right_button header-button">
                                <a class="btn-style-one" href="{{ route('contacts') }}">
                                    <span>{{ __('buttons.contactUs') }}</span>
                                </a>
                            </div>

                            <div class="hamburger d-block d-lg-none">
                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a class="header-action-btn header-action-btn-menu hamburger_button d-flex"
                                    href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->
                            </div>

                        </div>
                        <!-- Header Social Actions End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
