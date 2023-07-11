<div class="featured-product-area pt-90">
    <div class="container">
        <div class="row">
            <div class="featured-wrapper">
                <div class="col-xs-12">
                    <div class="home-featured-head text-center">
                        <div class="section-title title-head">
                            <h3>{{ __('lang.feature_products') }}</h3>
                            <img src="{{ asset('frontend/images/icons/icon-title.jpeg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="featured-product-wrapper">
                    <div class="active-featured-owl def-owl">
                        @foreach ($featureArea as $product)
                            <div class="col-md-3">
                                <div class="single-product single-featured-product">
                                    <div class="product-wrapper posr">
                                        <div class="product-label">
                                            <div class="label-sale">ТОП</div>
                                        </div>
                                        <div class="priduct-img-wrapper posr">
                                            <div class="product-img">
                                                <a href="{{ route('product-detail', $product->slug) }}"><img
                                                        src="{{ asset($product->thumb_image) }}" alt="" />
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-bottom-text posr">
                                            <div class="product-bottom-title deft-underline2">
                                                <a href="{{ route('product-detail', $product->slug) }}"
                                                    title="{{ $product->name }}">
                                                    <h4>{{ $product->name }}</h4>
                                                </a>
                                            </div>
                                            <div class="product-bottom-price">
                                                @if ($product->offer_price != 0)
                                                    <span>{{ $product->offer_price }} лв</span>
                                                    <del>{{ $product->price }} лв</del>
                                                @else
                                                    <span>{{ $product->price }} лв</del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
