@php
    $categories = \App\Models\Category::where('status', 1)
        ->with([
            'subCategories' => function ($query) {
                $query->where('status', 1);
            },
        ])
        ->get();

@endphp

<div class="header-area">
    <div class="header-topbar-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="header-login posr">
                        <ul>
                            @auth()
                                <li><a href="{{ route('user.dashboard') }}">{{ __('lang.my_account') }}</a>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">{{ __('lang.login') }}</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="header-currency-area">
                        <ul>
                            <li>
                                <div class="header-currency">
                                    <div class="currency-dd posr">
                                        <div class="cur-title2 currency-ttl">
                                            <div class="cur-usd">
                                                <span>{{ session()->get('locale') == 'en' ? 'English' : 'Български' }}</span>
                                                <a href="#"><i class="zmdi zmdi-chevron-down"></i></a>
                                            </div>
                                            <div class="cur-text-wrapper cur-lanpos inner-btn2 currency-opt">
                                                <div class="inner-text">
                                                    <span class="usd"><a
                                                            href="{{ route('changeLang') }}?lang=en">English</a></span>
                                                </div>
                                                <div class="inner-text">
                                                    <span class="cbp"><a
                                                            href="{{ route('changeLang') }}?lang=bg">Български</a></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <ul class="header-social-icon text-center text-md-end">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('/frontend/images/logo_1.jpeg') }}"
                                alt="domino" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="header-whishlist">
                        <div class="header-whish-compare posr">
                            <div class="header-whish">
                                <a href="wishlist.html">{{ __('lang.wish_list') }}</a>
                            </div>

                        </div>
                        <div class="header-middle-phone">
                            <span><i class="fa fa-phone"></i>1-888-123-456-89</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header main menu start-->

    <div id="sticky-header" class="main-menu-wrapper hp1-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10 hidden-sm">
                    <nav>
                        <ul class="main-menu">
                            <li class="{{ setActive(['home']) }}"><a
                                    href="{{ route('home') }}">{{ __('lang.homeBtn') }}</a>
                            </li>
                            <li class="mega-parent"><a href="/store">{{ __('lang.shop') }} <i
                                        class="zmdi zmdi-chevron-down"></i></a>
                                <div class="mega-menu-area hp1-style1">
                                    @foreach ($categories as $category)
                                        <ul class="single-mega-item mega-underline1 mega-underline3">
                                            <li class="mega-title"><a
                                                    href="{{ route('shop.byCat', $category->slug) }}"><i
                                                        class="{{ $category->icon }}"></i> {{ $category->name }}</a>
                                            </li>
                                            @if ($category->subCategories != null)
                                                @foreach ($category->subCategories as $subCategory)
                                                    <li><a
                                                            href="{{ route('shop.bySubCat', $subCategory->slug) }}">{{ $subCategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    @endforeach
                                </div>
                            </li>
                            <li class="mega-parent"><a href="{{ route('about') }}">{{ __('lang.about_us') }}</a>
                            </li>

                            <li><a href="{{ route('contacts') }}">{{ __('lang.contacts') }}</a>
                            </li>
                            <li class="mega-parent"><a href="{{ route('portfolio') }}">{{ __('lang.treatments') }} <i
                                        class="zmdi zmdi-chevron-down"></i></a>

                                <div class="mega-menu-area hp1-style1">
                                    <ul class="single-mega-item mega-underline1 mega-underline3">
                                        <li class="mega-title"><a href="#">РЕЗЕРВАЦИИ</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item mega-underline1 mega-underline3">
                                        <li class="mega-title"><a href="#">ПОДАРЪЧЕН ВАУЧЕР</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item mega-underline1 mega-underline3">
                                        <li class="mega-title"><a href="#">РЕВЮТА</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-md-2 col-sm-12">
                    <div class="main-cart-area  cart-sticky-display posr">
                        <div class="header-search header-search-position posr">
                            <form action="#">
                                <input type="text" value="" placeholder="Search Product..." />
                                <button type="submit"><i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="header-cart-area cart-hover-effect">
                            <div class="shopping-cart style-shopping-bag strong-up">
                                <a href="cart.html"><span><strong>{{ __('lang.shopping_cart') }}</strong></span></a>
                            </div>
                            <div class="shopping-cart">
                                <a href="cart.html"><span class="cart-item">0 {{ __('lang.items') }}</span><span
                                        class="cart-amount"> -
                                        0.00 {{ __('lang.lv') }}</span></a>
                            </div>

                            <div class="header-cart-box-wrapper cart-position-style1">
                                <div class="single-cart-box">
                                    <div class="cart-image">
                                        <a href="cart.html"><img
                                                src="{{ asset('frontend/images/product/saving-tool.jpeg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="cart-content">
                                        <div class="cart-heading">
                                            <a href="cart.html"> <span class="cart-qty">2 x</span> soluta dress</a>
                                        </div>
                                        <div class="cart-dress-color"><span>s, yellow</span>
                                        </div>
                                        <div class="cart-price">$200.00</div>
                                    </div>
                                    <div class="cart-remove deft-remove-icon">
                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                    </div>
                                    <div class="cart-shipping-cost">
                                        <span class="shipping-text">Shipping </span>
                                        <span class="shipping-amt">$7.00</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="single-cart-box">
                                    <div class="cart-image">
                                        <a href="cart.html"><img
                                                src="{{ asset('frontend/images/product/saving-tool.jpeg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="cart-content">
                                        <div class="cart-heading">
                                            <a href="cart.html"> <span class="cart-qty">2 x</span> soluta dress</a>
                                        </div>
                                        <div class="cart-dress-color"><span>s, yellow</span>
                                        </div>
                                        <div class="cart-price">$250.00</div>
                                    </div>
                                    <div class="cart-remove deft-remove-icon">
                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                    </div>
                                    <div class="cart-shipping-cost">
                                        <span class="shipping-text">Shipping</span>
                                        <span class="shipping-amt">$8.00</span>
                                    </div>
                                </div>
                                <div class="cart-subtotal">
                                    <span class="subttl-text">Grand total</span>
                                    <span class="subttl-amt">$465.00</span>
                                </div>

                                <div class="cart-checkout-btn btn-def-checkout">
                                    <a href="checkout.html">{{ __('lang.checkout') }} <i
                                            class="checkout-dir-icon zmdi zmdi-chevron-right "></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU -->
        <div class="mobile-menu-area hp1-mobile-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <nav class="active-mobile-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('lang.homeBtn') }}</a>
                                </li>
                                <li><a href="shop.html">{{ __('lang.shop') }}</a>
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li><a href="#">{{ $category->name }}</a>
                                                @if ($category->subCategories != null)
                                                    <ul>
                                                        @foreach ($category->subCategories as $subCategory)
                                                            <li><a
                                                                    href="shop-fullwidth.html">{{ $subCategory->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="about.html">{{ __('lang.about_us') }}</a>
                                </li>
                                <li><a href="portfolio.html">{{ __('lang.portfolio') }}</a>
                                </li>

                                <li><a href="blog.html">{{ __('lang.blog') }}</a>
                                </li>

                                <li><a href="contact.html">{{ __('lang.contacts') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--header main menu end-->
</div>
