<div class="new-arrival-product-area hp1-napa pt-60">
    <div class="container">
        <div class="row">
            <div class="product-tab-category-wrapper">
                <div class="col-xs-12">
                    <div class="home-product-tab-category text-center">
                        <div class="section-title title-head">
                            <h3>{{ __('lang.our_products') }}</h3>
                            <img src="{{ asset('images/icons/icon-title.jpeg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-conttab-wrapper">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane show active" id="newArrival" role="tabpanel"
                            aria-labelledby="tab1">
                            <div class="active-owl-product def-owl">
                                {{-- Start Product --}}
                                @foreach ($productArea as $product)
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="product-wrapper posr">
                                                <div class="product-label">
                                                    <div class="label-sale">Ново</div>
                                                </div>
                                                <div class="priduct-img-wrapper posr">
                                                    <div class="product-img">
                                                        <a href="{{ route('product-detail', $product->slug) }}"><img
                                                                src="{{ asset($product->thumb_image) }}"
                                                                alt="" />
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
                                {{-- Stop Product --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
