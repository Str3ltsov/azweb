<div class="offcanvas offcanvas-end" id="offcanvas-header">

    <div class="offcanvas-header">
        <!-- Header Logo Start -->
        <div class="logo">
            <a href="{{ route('mainPage') }}">
                <img src="{{ asset('images/azweb_logo.jpeg') }}" alt="AZWeb">
            </a>
        </div>
        <!-- Header Logo End -->
        <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <!-- mobile menu navigation start -->
        <nav>
            <ul class="mobile-menu list-unstyled">
                @foreach ($pages as $page)
                    <li>
                        <a href="{{ url("/pages/$page->route") }}">{{ $page->name }}</a>
                    </li>
                @endforeach
                <li>
                    <a href="{{ route('contacts') }}">
                        {{ __('buttons.contactUs') }}
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <span class="menu-expand">
                        <i class="fas fa-angle-down"></i>
                    </span>
                    <a href="javascript:void(0)">
                        {{ __('menu.language') }}
                    </a>
                    <ul class="dropdown" style="display: none;">
                        @foreach (config('app.locales') as $key => $locale)
                            <li>
                                <a href="/{{ $key }}">
                                    {{ $locale }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- mobile menu navigation end -->
    </div>

</div>
