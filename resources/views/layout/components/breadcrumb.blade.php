<div class="section-padding breadcrumb" data-bg-image="{{ asset('template/images/breadcrumb/breadcrumb-1.png') }}"
    style="background-image: url(&quot;template/images/breadcrumb/breadcrumb-1.png&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12 align-items-center text-center">
                <!-- Breadcrumb Wrapper Start -->
                <div class="breadcrumb-wrapper">
                    <h1 class="title">@yield('title', __('inputs.title'))</h1>
                    <ul class="breadcrumb-list list-unstyled">
                        <li>
                            <a href="{{ route('mainPage') }}">{{ __('menu.home') }}</a>
                        </li>
                        <li><span>@yield('title', __('inputs.title'))</span></li>
                    </ul>
                </div>
                <!-- Breadcrumb Wrapper End -->
            </div>
        </div>
    </div>
</div>
