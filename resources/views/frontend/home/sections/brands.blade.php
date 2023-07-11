<div class="brand-area hp1-brand-area">
    <div class="container">
        <div class="row">
            <div class="brand-slider-wrapper">
                <div class="active-brand-owl def-owl">
                    @foreach ($brands as $brand)
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
