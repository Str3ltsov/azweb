<div class="section-padding breadcrumb" data-bg-image="{{ asset('template/images/breadcrumb/breadcrumb-1.png') }}"
    style="background-image: url(&quot;template/images/breadcrumb/breadcrumb-1.png&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12 align-items-center text-center">
                <!-- Breadcrumb Wrapper Start -->
                <div class="breadcrumb-wrapper">
                    <h1 class="title">{{ $title ?? __('names.title') }}</h1>
                    <ul class="breadcrumb-list">
                        <li>
                            <a href="{{ route('mainPage') }}">{{ __('mainPage') }}</a>
                        </li>
                        <li><span>{{ $title ?? __('names.title') }}</span></li>
                    </ul>
                </div>
                <!-- Breadcrumb Wrapper End -->
            </div>
        </div>
    </div>
</div>
