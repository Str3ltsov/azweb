@extends('layout.app')

@section('content')
    <div class="contact-us section-margin" style="padding-block: 9rem">
        <div class="container position-relative">
            <div class="row">
                <!-- Heading Start -->
                <div class="heading-one d-flex flex-column align-items-center gap-2 text-center wow fadeInUp"
                    data-wow-duration="1.5s" data-wow-delay=".1s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <span class="heading-one-subtitle">{{ __('pages.login') }}</span>
                    <h2 class="heading-one-title col-md-6">
                        {{ __('pages.loginAsAdministrator') }}</h2>
                </div>
                <!-- Heading End -->
            </div>
            <div class="row mb-n30 justify-content-center">
                <div class="col-lg-6 col-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <form class="contact-form"method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <!--== Message Notification ==-->
                                <div class="form-message mt-4">
                                    @include('messages')
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" name="email" placeholder="{{ __('inputs.email') . ' *' }}"
                                    value="{{ old('email') }}" class="mb-1 @error('email') is-invalid @enderror" required
                                    autocomplete="email" autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" name="password" placeholder="{{ __('inputs.password') . ' *' }}"
                                    class="mb-1 @error('password') is-invalid @enderror" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="d-flex align-items-center gap-3 text-muted" for="remember">
                                    <input type="checkbox" name="remember" id="remember" style="width: 20px; "
                                        {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('buttons.rememberMe') }}
                                </label>

                            </div>
                            <div class="col-12 text-left">
                                <button class="btn btn-style-one" type="submit">
                                    <span>{{ __('buttons.login') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('styles')
    <style>
        .remember-me-checkbox {
            width: 21px;
            height: 21px;
            border-radius: 2px;
            font-weight: var(--bd-fw-black);
            line-height: 21px;
            font-size: 13px;
        }

        .remember-me-checkbox:checked {
            background: var(--clr-theme-1);
            color: var(--clr-common-white);
        }
    </style>
@endpush --}}
