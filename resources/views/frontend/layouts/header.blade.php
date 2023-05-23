<div class="header-area">
    <div class="header-topbar-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="header-login posr">
                        <ul>
                            @auth()
                            <li><a href="{{route('user.dashboard')}}">My Account</a>
                            </li>
                            @else
                            <li><a href="{{route('login')}}">Login/Sign Up</a>
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
                                        <div class="cur-title1 currency-ttl">
                                            <div class="cur-usd">
                                                <span>Currency : USD</span>
                                                <a href="#"><i class="zmdi zmdi-chevron-down"></i></a>
                                            </div>
                                            <div class="cur-text-wrapper cur-cury inner-btn currency-opt">
                                                <div class="inner-text">
                                                    <span class="usd"><a href="#">Dollar(USD)</a></span>
                                                </div>
                                                <div class="inner-text">
                                                    <span class="cbp"><a href="#">Pound(CBP)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-currency">
                                    <div class="currency-dd posr">
                                        <div class="cur-title2 currency-ttl">
                                            <div class="cur-usd">
                                                <span>English</span>
                                                <a href="#"><i class="zmdi zmdi-chevron-down"></i></a>
                                            </div>
                                            <div class="cur-text-wrapper cur-lanpos inner-btn2 currency-opt">
                                                <div class="inner-text">
                                                    <span class="usd"><a href="#">English</a></span>
                                                </div>
                                                <div class="inner-text">
                                                    <span class="cbp"><a href="#">Arabic</a></span>
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
                        <a href="{{route('home')}}"><img src="{{asset('/frontend/images/logo_1.jpeg')}}" alt="domino" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="header-whishlist">
                        <div class="header-whish-compare posr">
                            <div class="header-whish">
                                <a href="wishlist.html">My Wishlist</a>
                            </div>
                            <div class="header-compare">
                                <a href="single-product.html">Compare</a>
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
                            <li class="active"><a href="index.html" >Home <i class="zmdi zmdi-chevron-down"></i></a>
                                <ul class="main-drop firstli">
                                    <li><a href="index.html" >Home-1</a>
                                    </li>
                                    <li><a href="index2.html" >Home-2</a>
                                    </li>
                                    <li><a href="index3.html" >Home-3</a>
                                    </li>
                                    <li><a href="index4.html" >Home-4</a>
                                    </li>
                                    <li><a href="index5.html" >Home-5</a>
                                    </li>
                                    <li class="lastli"><a href="index6.html" >Home-6</a>
                                    </li>
                                    <li class="lastli"><a href="index7.html" >Home-7</a></li>
                                </ul>
                            </li>
                            <li class="mega-parent"><a href="shop.html">Shop <i class="zmdi zmdi-chevron-down"></i></a>
                                <div class="mega-menu-area hp1-style1">
                                    <ul class="single-mega-item mega-underline1 mega-underline3">
                                        <li class="mega-title"><a href="#">Shop Layouts</a>
                                        </li>
                                        <li><a href="shop-fullwidth.html">Fullwidth</a>
                                        </li>
                                        <li><a href="shop.html">Sidebar Left</a>
                                        </li>
                                        <li><a href="shop-right-sidebar.html">Sidebar right</a>
                                        </li>
                                        <li><a href="shop-list-view.html">List View</a>
                                        </li>
                                        <li><a href="shop-list-view-right.html">List View right</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item mega-underline1 mega-underline2">
                                        <li class="mega-title"><a href="#">Shop Pages</a>
                                        </li>
                                        <li><a href="shop.html">Category</a>
                                        </li>
                                        <li><a href="my-account.html">My Account</a>
                                        </li>
                                        <li><a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li><a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item mega-underline1">
                                        <li class="mega-title"><a href="#">Product Types</a>
                                        </li>
                                        <li><a href="single-product.html">Single Product</a>
                                        </li>
                                        <li><a href="shop.html">Variable Product</a>
                                        </li>
                                        <li><a href="shop.html">Group Product</a>
                                        </li>
                                        <li><a href="shop.html">External Product</a>
                                        </li>
                                        <li><a href="shop.html">New Product</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li class="mega-parent"><a href="about.html">About us</a>
                            </li>
                            <li><a href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="dropdown2"><a href="blog.html">Blog <i class="zmdi zmdi-chevron-down"></i></a>
                                <ul class="main-drop firstli">
                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                    </li>
                                    <li><a href="blog-fullwidth.html">Fullwidth</a>
                                    </li>
                                    <li><a href="single-blog-video.html">Single Video</a>
                                    </li>
                                    <li><a href="single-blog-audio.html">Single Audio</a>
                                    </li>
                                    <li><a href="single-blog-slider.html">Single Gallery</a>
                                    </li>
                                    <li><a href="single-blog.html">Single Image</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-parent"><a href="shop.html" >Pages <i class="zmdi zmdi-chevron-down"></i></a>
                                <div class="mega-menu-area hp1-style2">
                                    <ul class="single-mega-item single-mega-item2">
                                        <li class="mega-title"><a>Pages-01</a>
                                        </li>
                                        <li><a href="about.html">About us</a>
                                        </li>
                                        <li><a href="404.html">Page 404</a>
                                        </li>
                                        <li><a href="portfolio.html">Portfolio</a>
                                        </li>
                                        <li><a href="portfolio2.html">Portfolio2</a>
                                        </li>
                                        <li><a href="single-product.html">Single Product</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item single-mega-item2">
                                        <li class="mega-title"><a>Pages-02</a>
                                        </li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li><a href="single-blog-video.html">Single Video</a>
                                        </li>
                                        <li><a href="single-blog-audio.html">Single Audio</a>
                                        </li>
                                        <li><a href="single-blog-slider.html">Single Gallery</a>
                                        </li>
                                        <li><a href="single-blog.html">Single Image</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item single-mega-item2">
                                        <li class="mega-title"><a href="#">Pages-03</a>
                                        </li>
                                        <li><a href="cart.html">Cart</a>
                                        </li>
                                        <li><a href="address.html">Address</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li><a href="payment.html">Payment</a>
                                        </li>
                                        <li><a href="shipping.html">Shipping</a>
                                        </li>
                                    </ul>
                                    <ul class="single-mega-item single-mega-item2">
                                        <li class="mega-title"><a href="#">Pages-04</a>
                                        </li>
                                        <li><a href="my-account.html">My Account</a>
                                        </li>
                                        <li><a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li><a href="login.html">login</a>
                                        </li>
                                        <li><a href="shop.html">Dresses</a>
                                        </li>
                                        <li><a href="shop.html">T-Shirts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact us</a>
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
                                <a href="cart.html"><span><strong>Shopping cart</strong></span></a>
                            </div>
                            <div class="shopping-cart">
                                <a href="cart.html"><span class="cart-item">0 item(s)</span><span class="cart-amount"> - $0.00</span></a>
                            </div>

                            <div class="header-cart-box-wrapper cart-position-style1">
                                <div class="single-cart-box">
                                    <div class="cart-image">
                                        <a href="cart.html"><img src="{{asset('frontend/images/product/saving-tool.jpeg')}}" alt="" />
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
                                        <a href="cart.html"><img src="{{asset('frontend/images/product/saving-tool.jpeg')}}" alt="" />
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
                                    <a href="checkout.html">Check out <i class="checkout-dir-icon zmdi zmdi-chevron-right "></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area hp1-mobile-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <nav class="active-mobile-menu">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home-1</a>
                                        </li>
                                        <li><a href="index2.html">Home-2</a>
                                        </li>
                                        <li><a href="index3.html">Home-3</a>
                                        </li>
                                        <li><a href="index4.html">Home-4</a>
                                        </li>
                                        <li><a href="index5.html">Home-5</a>
                                        </li>
                                        <li><a href="index6.html">Home-6</a>
                                        </li>
                                        <li class="lastli"><a href="index7.html" >Home-7</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="shop-fullwidth.html">Fullwidth</a>
                                                </li>
                                                <li><a href="shop.html">Sidebar Left</a>
                                                </li>
                                                <li><a href="shop-right-sidebar.html">Sidebar right</a>
                                                </li>
                                                <li><a href="shop-list-view.html">List View</a>
                                                </li>
                                                <li><a href="shop-list-view-right.html">List View right</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop Pages</a>
                                            <ul>
                                                <li><a href="shop.html">Category</a>
                                                </li>
                                                <li><a href="my-account.html">My Account</a>
                                                </li>
                                                <li><a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="cart.html">Shopping Cart</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Product Types</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a>
                                                </li>
                                                <li><a href="shop.html">Variable Product</a>
                                                </li>
                                                <li><a href="shop.html">Group Product</a>
                                                </li>
                                                <li><a href="shop.html">External Product</a>
                                                </li>
                                                <li><a href="shop.html">New Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                </li>

                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li><a href="blog-fullwidth.html">Fullwidth</a>
                                        </li>
                                        <li><a href="single-blog-video.html">Single Video</a>
                                        </li>
                                        <li><a href="single-blog-audio.html">Single Audio</a>
                                        </li>
                                        <li><a href="single-blog-slider.html">Single Gallery</a>
                                        </li>
                                        <li><a href="single-blog.html">Single Image</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="#">Pages-01</a>
                                            <ul>
                                                <li><a href="about.html">About us</a>
                                                </li>
                                                <li><a href="404.html">Page 404</a>
                                                </li>
                                                <li><a href="portfolio.html">Portfolio</a>
                                                </li>
                                                <li><a href="portfolio2.html">Portfolio2</a>
                                                </li>
                                                <li><a href="single-product">Single Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages-02</a>
                                            <ul>
                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                                </li>
                                                <li><a href="single-blog-video.html">Single Video</a>
                                                </li>
                                                <li><a href="single-blog-audio.html">Single Audio</a>
                                                </li>
                                                <li><a href="single-blog-slider.html">Single Gallery</a>
                                                </li>
                                                <li><a href="single-blog.html">Single Image</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages-03</a>
                                            <ul>
                                                <li><a href="cart.html">Cart</a>
                                                </li>
                                                <li><a href="address.html">Address</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="payment.html">Payment</a>
                                                </li>
                                                <li><a href="shipping.html">Shipping</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages-04</a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a>
                                                </li>
                                                <li><a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="login.html">login</a>
                                                </li>
                                                <li><a href="shop.html">Dresses</a>
                                                </li>
                                                <li><a href="shop.html">T-Shirts</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a>
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
