@extends('frontend.layouts.master')

@section('content')
    <!--Breadcrumb start-->
    <div class="subpage-main-wrapper about-full">
        <div class="breadcrumbs-wrapper breadcumbs-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                            <ul>
                                <li>
                                    <div class="breadcrumbs-icon1">
                                        <a href="{{ route('home') }}" title="Return to home"><i class="fa fa-home"></i></a>
                                    </div>
                                </li>
                                <li>{{ $product->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->

        <div class="compare-area compare-single-productt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="single-thumbnail-wrapper">
                            <div class="single-product-tab">
                                <ul class="single-tab-control" role="tablist">
                                    <li>
                                        <a class="active" href="#tab-1" aria-controls="tab-1" role="tab"
                                            data-bs-toggle="tab"><img src="{{ asset($product->thumb_image) }}"
                                                alt="{{ $product->name }}" />
                                        </a>
                                    </li>
                                    @if ($images != null)
                                        @php($count = 1)
                                        @foreach ($images as $image)
                                            @php($count++)
                                            <li>
                                                <a href="#tab{{ $count }}" aria-controls="tab{{ $count }}"
                                                    role="tab" data-bs-toggle="tab"><img
                                                        src="{{ asset($image->image) }}" alt="" />
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="single-cat-main">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab-1">
                                        <div class="tab-single-image">
                                            <a href="{{ asset($product->thumb_image) }}" class="fancybox"
                                                data-fancybox-group="gallery"><img src="{{ asset($product->thumb_image) }}"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    @if ($images != null)
                                        @php($count = 1)
                                        @foreach ($images as $image)
                                            @php($count++)
                                            <div role="tabpanel" class="tab-pane" id="tab{{ $count }}">
                                                <div class="tab-single-image">
                                                    <a href="{{ asset($image->image) }}" class="fancybox"
                                                        data-fancybox-group="gallery"><img src="{{ asset($image->image) }}"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="compare-content-wrap">
                            <div class="cmain-heading text-uppercase">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="compare-conpart compare-single-mgr">
                                <div class="compare-social">
                                    <div class="compare-social">
                                        <button class=" btn btn-default com-tw"><i class="fa fa-twitter"></i>
                                            Twitter</button>
                                        <button class=" btn btn-default com-fb"><i class="fa fa-facebook"></i>
                                            Share</button>
                                        <button class="btn btn-default com-gp"><i class="fa fa-google-plus"></i> Google
                                            +</button>
                                        <button class=" btn btn-default com-pi"><i class="fa fa-pinterest"></i>
                                            Pinterest</button>
                                    </div>
                                </div>
                                <div class="skill-referance">
                                    <p> SKU: {{ $product->sku }}</p>

                                </div>
                            </div>
                            <div class="compare-conpart compare-conpart-text">
                                <div class="skill-long-text">
                                    <p>{!! $product->long_description !!}</p>
                                </div>
                            </div>
                            <div class="compare-conpart-pm compare-bottom">
                                <div class="old-new-price">
                                    @if ($product->offer_price != null)
                                        <span>{{ $product->offer_price }} лв<del class="skill-gray"> {{ $product->price }}
                                                лв</del></span>
                                    @else
                                        <span>{{ $product->price }} лв</span>
                                    @endif
                                </div>
                                <div class="plus-minus-text">Количество</div>
                                <div class="skill-plusminus-wrap">
                                    <div class="skill-plusminus">
                                        <div class="skill-minus qtybutton">-</div>
                                        <input type="text" name="#" value="1" class="cart-plus-minus-box" />
                                        <div class="skill-plus qtybutton">+</div>
                                    </div>
                                </div>
                                <div class="skill-cart-option skill-sep posr">
                                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> Добави в количката</a>
                                </div>
                            </div>
                            <div class="compare-conpart skill-communicate">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> Изпрати на приятел</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-print"></i> Принтирай</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i> Добави в любимиt</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="color-instock">


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- up sale product area start-->
        <div class="featured-product-area single-upsale-product">
            <div class="container">
                <div class="row">
                    <div class="featured-wrapper">
                        <div class="col-xs-12">
                            <div class="home-featured-head text-center ">
                                <div class="section-title title-head">
                                    <h3>Up-sells</h3>
                                    <img src="images/icons/icon-title.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="featured-product-wrapper">
                            <div class="active-featured-owl def-owl">
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p13.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$260.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p8.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Eodem modo typi">
                                                        <h4>Eodem modo typi</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$450.00</span> <del>$500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p10.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$320.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p6.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Soluta nobis">
                                                        <h4>soluta nobis</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$160.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p5.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Typi non habent">
                                                        <h4>Typi non habent</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$260.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-salee"></div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p11.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Up sale area end-->

        <!--related product area start-->
        <div class="featured-product-area single-related-product">
            <div class="container">
                <div class="row">
                    <div class="featured-wrapper">
                        <div class="col-xs-12">
                            <div class="home-featured-head text-center">
                                <div class="section-title title-head">
                                    <h3>Related Products</h3>
                                    <img src="images/icons/icon-title.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="featured-product-wrapper">
                            <div class="active-featured-owl def-owl">
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p13.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p8.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Eodem modo typi">
                                                        <h4>Eodem modo typi</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$450.00</span> <del>$500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p10.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p4.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p11.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="images/product/p7.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                href="#"><i
                                                                    class=" product-search fa fa-search"></i> quick
                                                                View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare">
                                                        <h4>Mirum est notare</h4>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--related product area end-->

        <!--Brand slider area css start-->
        <div class="brand-area hp1-brand-area brand-single-product">
            <div class="container">
                <div class="row">
                    <div class="brand-slider-wrapper">
                        <div class="active-brand-owl def-owl">
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb1.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb2.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb3.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb4.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb5.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb6.jpg" alt="Domino" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Brand slider area css end-->

    </div>
@endsection
