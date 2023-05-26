<!--slider area are start-->
<div class="slider-container">
    <!-- Slider Image -->
    <div id="mainSlider" class="nivoSlider slider-image">
        @foreach ($sliders as $slider)
            <img src="{{ asset($slider->image) }}" alt="main slider" title="#htmlcaption1" />
        @endforeach
    </div>
    @foreach ($sliders as $slider)
        <!-- Slider Caption -->
        <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slider3-cap-wrapper3 slide-text">
                    <div class="slide-one-text slide-def hp1-cap1">
                        <div class="slide-one-dec wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                            @if ($slider->h4 != '')
                                <h4>{{ $slider->h4 }}</h4>
                            @endif
                        </div>
                        <div class="slide-one-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                            @if ($slider->h2 != '')
                                <h2>{{ $slider->h2 }}</h2>
                            @endif
                        </div>
                        <div class="slide-one-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                            @if ($slider->h1 != '')
                                <h1><span class="slide-text-big">70%</span>off</h1>
                            @endif
                        </div>
                        <div class="check-it-out slide2btn-check1 wow fadeInDown" data-wow-duration=".9s"
                            data-wow-delay="0.8s">
                            <a class="btn-def-black" href="{{ $slider->btn_url }}">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!--slider area are end-->
