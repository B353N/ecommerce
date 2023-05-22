<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Domino || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- Bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- jQuery-ui.min css -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <!-- Font-awesome css -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
    <!-- Material design iconic css -->
    <link rel="stylesheet" href="{{asset('frontend/css/material-design-iconic-font.min.css')}}">
    <!-- Nivo Slider css -->
    <link rel="stylesheet" href="{{asset('frontend/css/nivo-slider.css')}}" />
    <!--Slider css -->
    <link rel="stylesheet" href="{{asset('frontend/css/slider.css')}}" />
    <!-- Default css -->
    <link rel="stylesheet" href="{{asset('frontend/css/default.css')}}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Toaster css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('frontend.layouts.header')

<div class="clearfix"></div>

    @yield('content')

<!-- Main footer area start-->
    @include('frontend.layouts.footer')
<!--Footer bottom area end-->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <!--modal tab start-->
                            <div class="portfolio-thumbnil-area-2">
                                <div class="tab-content active-portfolio-area-2">
                                    <div role="tabpanel" class="tab-pane active" id="view1">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="images/product/p1.jpg" alt="Single portfolio" />
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view2">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="images/product/p5.jpg" alt="Single portfolio" />
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view3">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="images/product/p10.jpg" alt="Single portfolio" />
                                            </a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="view4">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="images/product/p4.jpg" alt="Single portfolio" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-more-views-2">
                                    <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                        <a href="#view1" aria-controls="view1" data-bs-toggle="tab"><img src="images/product/p1.jpg" alt="" />
                                        </a>
                                        <a href="#view2" aria-controls="view2" data-bs-toggle="tab"><img src="images/product/p5.jpg" alt="" />
                                        </a>
                                        <a href="#view3" aria-controls="view3" data-bs-toggle="tab"><img src="images/product/p10.jpg" alt="" />
                                        </a>
                                        <a href="#view4" aria-controls="view4" data-bs-toggle="tab"><img src="images/product/p4.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modal tab end-->
                        <!-- .product-images -->
                        <div class="product-info">
                            <h1>Aenean eu tristique</h1>
                            <div class="price-box-3">
                                <div class="s-price-box"> <span class="new-price">$160.00</span> <span class="old-price">$190.00</span> </div>
                            </div> <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3"> </div>
                                    <button class="single_add_to_cart_button cart-stylei" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Nam fringilla tristique auctor. </div>
                            <div class="social-sharing-modal">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons-modal">
                                        <li><a  title="Facebook" href="#" class="facebook m-single-icon"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a  title="Twitter" href="#" class="twitter m-single-icon"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a  title="Pinterest" href="#" class="pinterest m-single-icon"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li><a  title="Google +" href="#" class="gplus m-single-icon"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li><a  title="LinkedIn" href="#" class="linkedin m-single-icon"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .modal-product -->
                </div>
                <!-- .modal-body -->
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->

<!-- all js here -->
<!-- jquery latest version -->
<script src="{{asset('frontend/js/vendor/jquery.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<!-- Nivo slider pack js -->
<script src="{{asset('frontend/js/slider/jquery.nivo.slider.pack.js')}}"></script>
<!-- fancybox js -->
<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
<!-- Nivo active js -->
<script src="{{asset('frontend/js/slider/nivo-active.js')}}"></script>
<!-- counter up js -->
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Treeview js -->
<script src="{{asset('frontend/js/jquery.treeview.js')}}"></script>
<!-- main js -->
<script src="{{asset('frontend/js/main.js')}}"></script>
<!-- Toaster js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{$error}}")
    @endforeach
    @endif
</script>
</body>

</html>
