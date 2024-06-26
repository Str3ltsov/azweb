@foreach ($blocks as $block)
    @if ($block->block_type_id == \App\Enums\BlockTypeEnum::LEFT)
        <div class="section-padding about-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                        style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <!-- About Images Start -->
                        <div class="about-two-images me-0">
                            <div class="about-two-images-one">
                                <img class="js-tilt"
                                    src="{{ $block->image ? asset($block->image) : asset('template/images/about/about-4.png') }}"
                                    alt="{{ $block->name }}"
                                    style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg);">
                                @if ($block->show_experience)
                                    <div class="about-two-images-thumb gradient-2 text-center">
                                        <span class="text"
                                            style="max-width: min-content; line-height: calc(1rem + .5rem)">{{ __('pages.experienceYears') }}</span>
                                        <span class="date">{{ $block->experience_years }}</span>
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
                            <span class="heading-one-subtitle">{{ $block->name }}</span>
                            <h2 class="heading-one-title">{{ $block->title }}</h2>
                            <div class="about-two-text">
                                {!! htmlspecialchars_decode(nl2br($block->text)) !!}
                            </div>
                        </div>
                        <!-- Heading End -->
                    </div>
                </div>
            </div>
        </div>
    @elseif ($block->block_type_id == \App\Enums\BlockTypeEnum::RIGHT)
        <div class="section-padding about-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeIn;">
                        <!-- Heading Start -->
                        <div class="heading-one">
                            <span class="heading-one-subtitle">{{ $block->name }}</span>
                            <h2 class="heading-one-title">{{ $block->title }}</h2>
                            <div class="about-two-text">
                                {!! htmlspecialchars_decode(nl2br($block->text)) !!}
                            </div>
                        </div>
                        <!-- Heading End -->
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s"
                        style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <!-- About Images Start -->
                        <div class="about-two-images me-0">
                            <div class="about-two-images-one">
                                <img class="js-tilt"
                                    src="{{ $block->image ? asset($block->image) : asset('template/images/about/about-4.png') }}"
                                    alt="{{ $block->name }}"
                                    style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg);">
                                @if ($block->show_experience)
                                    <div class="about-two-images-thumb gradient-2 text-center">
                                        <span class="text"
                                            style="max-width: min-content; line-height: calc(1rem + .5rem)">{{ __('pages.experienceYears') }}</span>
                                        <span class="date">{{ $block->experience_years }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- About Images End -->
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
