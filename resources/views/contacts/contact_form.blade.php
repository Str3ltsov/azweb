{{-- <form method="POST" action="{{ route('submitContactForm') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="contact__from-input">
                <input type="text" name="name" placeholder="{{ __('inputs.name') . ' *' }}"
                    class=" mb-1 @error('topic') is-invalid @enderror">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact__from-input">
                <input type="email" name="email" placeholder="{{ __('inputs.email') . ' *' }}"
                    class="mb-1 @error('topic') is-invalid @enderror">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact__from-input">
                <input type="text" name="topic" placeholder="{{ __('inputs.topic') . ' *' }}"
                    class="mb-1 @error('topic') is-invalid @enderror">
                @error('topic')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact__from-input">
                <textarea name="description" id="Message" placeholder="{{ __('inputs.description') }}" rows="4"></textarea>
            </div>
        </div>
        <div class="col-12">
            <button class="comment__btn e-btn" type="submit">{{ __('buttons.send') }}</button>
        </div>
    </div>
</form> --}}

<form class="contact-form" method="POST" action="{{ route('submitContactForm') }}">
    @csrf
    <div class="row">
        <div class="col-12 mb-3">
            <!--== Message Notification ==-->
            <div class="form-message mt-4">
                @include('messages')
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <input type="text" name="name" placeholder="{{ __('inputs.name') . ' *' }}"
                class=" mb-1 @error('name') is-invalid @enderror">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 mb-3">
            <input type="email" name="email" placeholder="{{ __('inputs.email') . ' *' }}"
                class="mb-1 @error('email') is-invalid @enderror">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12 mb-3">
            <input type="text" name="topic" placeholder="{{ __('inputs.topic') . ' *' }}"
                class="mb-1 @error('topic') is-invalid @enderror">
            @error('topic')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12 mb-3">
            <textarea name="description" id="Message" placeholder="{{ __('inputs.description') }}" rows="4"></textarea>
        </div>
        <div class="col-12 text-left">
            <button class="btn btn-style-one" type="submit">
                <span>{{ __('buttons.send') }}</span>
            </button>
        </div>
    </div>
</form>
