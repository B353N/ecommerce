@extends('frontend.layouts.master')

@section('content')
    <div class="hair-main-wrapper">
        <div class="page-banner1">
            <img src="images/banner/hair.jpg" alt="" />
        </div>
        <div class="breadcrumbs-wrapper breadcumbs-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                            <ul>
                                <li>
                                    <div class="breadcrumbs-icon1">
                                        <a href="index.html" title="Return to home"><i class="fa fa-home"></i></a>
                                    </div>
                                </li>
                                <li>{{ __('lang.shop') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main shop area start-->

        <div class="main-shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="top-full-tarea">
                            <div class="full-ttlleft">
                                <p>{{ __('lang.shop') }}</p>
                            </div>
                            <div class="full-ttlright">

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="mainshop-area">
                            <div class="mainshop-top">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="category-short">
                                            <div class="sproduct-tab">
                                                <ul class="tabcate" role="tablist">
                                                    <li role="presentation"><a class="active" href="#productWidgets"
                                                            aria-controls="productWidgets" role="tab"
                                                            data-bs-toggle="tab"><i class="fa fa-th-large"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li role="presentation"><a href="#productList"
                                                            aria-controls="productList" role="tab"
                                                            data-bs-toggle="tab"><i class="fa fa-list-alt"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sproduct-short">
                                                <div class="top-product-short">
                                                    <label for="viewby15">Сортирай по</label>
                                                    <select name="#" id="viewby15">
                                                        <option value="default">Подразбиране</option>
                                                        <option value="name">Име (A-Z)</option>
                                                        <option value="pricelh">Цена (Ниска > Висока)</option>
                                                        <option value="pricehl">Price (Висока > Ниска)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="category-short">
                                            <div class="quantity-short">
                                                <label for="viewby16">
                                                    Покажи
                                                    <select name="#" id="viewby16">
                                                        <option value="25">20</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                    на страница
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="shop-mega-category">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="productWidgets">
                                    <div class="tab-content-wrapper">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-wrapper posr">
                                                            <div class="product-label">
                                                                @if ($product->is_top != null)
                                                                    <div class="label-sale">ТОП</div>
                                                                @elseif ($product->is_best != null)
                                                                    <div class="label-sale">BEST</div>
                                                                @elseif ($product->is_feature)
                                                                    <div class="label-sale">НОВО</div>
                                                                @else
                                                                @endif
                                                            </div>
                                                            <div class="priduct-img-wrapper posr">
                                                                <div class="product-img">
                                                                    <a href="{{ route('product-detail', $product->slug) }}"><img
                                                                            src="{{ asset($product->thumb_image) }}"
                                                                            alt="{{ $product->name }}" />
                                                                    </a>
                                                                </div>
                                                                <div class="product-inner-text">
                                                                    <div class="product-social-icon social-icon">

                                                                    </div>
                                                                    <div class="product-btn">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-review">

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
                                <div role="tabpanel" class="tab-pane" id="productList">
                                    <div class="tab-content-wrapper">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-single-tab2">
                                                    <div class="product-wrapper posr">
                                                        <div class="priduct-img-wrapper posr">
                                                            <div class="product-img">
                                                                <a href="single-product.html"><img
                                                                        src="images/product/p9.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-inner-text">
                                                                <div class="product-social-icon social-icon">
                                                                    <ul>
                                                                        <li><a href="cart.html"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="index.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </li>
                                                                        <li><a href="single-product.html"><i
                                                                                    class="fa fa-refresh"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-btn">
                                                                    <div class="product-qview-search">
                                                                        <a class="btn-def btn-product-qview q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                                            href="#"><i
                                                                                class=" product-search fa fa-search"></i>
                                                                            quick View</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-single-tab2">
                                                    <div class="product-wrapper posr">
                                                        <div class="priduct-img-wrapper posr">
                                                            <div class="product-img">
                                                                <a href="single-product.html"><img
                                                                        src="images/product/p7.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-inner-text">
                                                                <div class="product-social-icon social-icon">
                                                                    <ul>
                                                                        <li><a href="cart.html"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="index.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </li>
                                                                        <li><a href="single-product.html"><i
                                                                                    class="fa fa-refresh"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-btn">
                                                                    <div class="product-qview-search">
                                                                        <a class="btn-def btn-product-qview q-view"
                                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                                            href="#"><i
                                                                                class=" product-search fa fa-search"></i>
                                                                            quick View</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="compare-content-wrap">
                                                    <div class="cmain-heading cmain-heading-tab2">
                                                        <h3>Mirum est notare</h3>
                                                    </div>
                                                    <div class="compare-conpart">
                                                        <div class="compare-social">
                                                            <div class="compare-social">
                                                                <button class=" btn btn-default com-tw"><i
                                                                        class="fa fa-twitter"></i> Twitter</button>
                                                                <button class=" btn btn-default com-fb"><i
                                                                        class="fa fa-facebook"></i> Share</button>
                                                                <button class="btn btn-default com-gp"><i
                                                                        class="fa fa-google-plus"></i> Google +</button>
                                                                <button class=" btn btn-default com-pi"><i
                                                                        class="fa fa-pinterest"></i> Pinterest</button>
                                                            </div>
                                                        </div>
                                                        <div class="skill-rating skill-rating-tab2">
                                                            <div class="rating-text">
                                                                <span>Rating</span>
                                                            </div>
                                                            <ul class="skill-star-rating">
                                                                <li><a href="#"><i class="fa fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="compare-conpart">
                                                        <div class="skill-long-text">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                                                aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                                                dolor in hendreri</p>
                                                        </div>
                                                    </div>
                                                    <div class="compare-conpart-pm compare-tab2">
                                                        <div class="old-new-price">
                                                            <span>$342.00 <del class="skill-gray"> $360.00</del></span>
                                                        </div>
                                                        <div class="plus-minus-text">Quantity</div>
                                                        <div class="skill-plusminus-wrap">
                                                            <div class="skill-plusminus">
                                                                <div class="skill-minus qtybutton">-</div>
                                                                <input type="text" name="#" value="1"
                                                                    class="cart-plus-minus-box" />
                                                                <div class="skill-plus qtybutton">+</div>
                                                            </div>
                                                        </div>
                                                        <div class="skill-cart-option skill-sep posr">
                                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i> Add to
                                                                cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content-wrapper">
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Pagination-->
                        <div class="pagination-wrapper">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="shop-pagination pagi-style1">

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand slider area css start-->

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

        <!--Brand slider area css end-->
    </div>
@endsection
