@extends('frontend.layouts.master')

@section('content')
    <div class="subpage-main-wrapper about-full">

        <!--Breadcrumb start-->
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
                                <li>{{ __('lang.about') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->

        <!--about us main area start-->

        <div class="about-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="abt-image">
                            <a href="#"><img src="images/about/abt1.jpg" alt="Domino" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="abt-content-wrapper">
                            <div class="abt-title title-head-normal">
                                <h3><span class="color-black-def">Why</span> We are?</h3>
                            </div>
                            <div class="abt-content">
                                <p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat
                                    dapibus sollicitudin. Morbi arcu nisi, mattis ut ullamcorper in, dapibus ac nunc. Cras
                                    bibendum mauris et sapien feugiat. scelerisque accumsan nibh gravida. Quisque aliquet
                                    justo elementum lectus ultrices bibendum.</p>
                            </div>
                            <div class="about-feature">
                                <ul>
                                    <li><i class="fa fa-check"></i> Amazing wordpress theme</li>
                                    <li><i class="fa fa-check"></i> HTML & CSS3 build with bootstrap</li>
                                    <li><i class="fa fa-check"></i> Powerfull admin panel</li>
                                    <li><i class="fa fa-check"></i> Icon well organized & SEO optimized friendy</li>
                                    <li><i class="fa fa-check"></i> Iconncredible design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="abt-middle-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="abt-title title-head-normal">
                            <h3><span class="color-black-def">Why</span> We do?</h3>
                        </div>
                        <div class="abt-content">
                            <p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo
                                consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius
                                claritas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="abt-title title-head-normal">
                            <h3><span class="color-black-def">Our</span> Mission</h3>
                        </div>
                        <div class="abt-content">
                            <p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo
                                consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius
                                claritas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="abt-title title-head-normal">
                            <h3><span class="color-black-def">Our</span> Vision</h3>
                        </div>
                        <div class="abt-content">
                            <p>Puis nostrud exerci tation ullamcorper suscipito lobortis nisl ut aliquip ex ea commodo
                                consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius
                                claritas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Counter up start-->
        <div class="abt-counter-up ptb-85">
            <div class="container">
                <div class="">
                    <div class="counterup-wrapper text-center row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter">
                                <h3><span class="counter">99</span></h3>
                                <p>projects completed</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter">
                                <h3><span class="counter">180</span></h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter">
                                <h3><span class="counter">500</span></h3>
                                <p>Cups of Coffe</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter single-counter-res">
                                <h3><span class="counter">320</span></h3>
                                <p>Awards Winner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Counter up start-->

        <!--Team section start-->
        <div class="abt-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="abt-main-title title-head-normal text-center">
                            <h3>Our Crazy<span class="color-black-def"> Team</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="team-image-total team-img def-hover-eff br-eff text-center">
                            <div class="team-img-wrap posr">
                                <div class="team-img def-hover-eff posr">
                                    <a href="#"><img src="images/about/at1.jpg" alt="" />
                                    </a>
                                </div>
                                <ul class="abt-social-icon animated">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="st-title-wrapper">
                                <div class="team-title">
                                    <h3>Marcos Alonso</h3>
                                </div>
                                <div class="team-desig">
                                    <span>Class Master</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="team-image-total team-img def-hover-eff br-eff text-center">
                            <div class="team-img-wrap posr">
                                <div class="team-img def-hover-eff posr">
                                    <a href="#"><img src="images/about/at2.jpg" alt="" />
                                    </a>
                                </div>
                                <ul class="abt-social-icon animated">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="st-title-wrapper">
                                <div class="team-title">
                                    <h3>Luis Aragones</h3>
                                </div>
                                <div class="team-desig">
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="team-image-total team-img def-hover-eff br-eff text-center">
                            <div class="team-img-wrap posr">
                                <div class="team-img def-hover-eff posr">
                                    <a href="#"><img src="images/about/at3.jpg" alt="" />
                                    </a>
                                </div>
                                <ul class="abt-social-icon animated">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="st-title-wrapper">
                                <div class="team-title">
                                    <h3>Maria Alessis</h3>
                                </div>
                                <div class="team-desig">
                                    <span>Class Master</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="team-image-total team-img def-hover-eff br-eff text-center">
                            <div class="team-img-wrap posr">
                                <div class="team-img def-hover-eff posr">
                                    <a href="#"><img src="images/about/at4.jpg" alt="" />
                                    </a>
                                </div>
                                <ul class="abt-social-icon animated">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="st-title-wrapper">
                                <div class="team-title">
                                    <h3>John Doe</h3>
                                </div>
                                <div class="team-desig">
                                    <span>PHP Devloper</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Team section end-->

        <!--Skill area start-->
        <div class="skill-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="abt-skill-left">
                            <div class="skill-title title-head-normal">
                                <h3>Why Choose <span class="color-black-def">Domino</span> HTML Template</h3>
                            </div>
                            <div class="skill-left-content">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat. sed diam voluptua ater vero. Lorem
                                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumys eirmod tempor empor
                                    invidunt ut labore et dolore.</p>
                            </div>
                            <div class="skill-readmore posr">
                                <p><a href="index.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="abt-skill-right">
                            <div class="progress-skill">
                                <div class="progress-strategy">
                                    <span class="skill-text">Strategy 79%</span>
                                </div>
                                <div class="progress skill-customp">
                                    <div class="progress-bar progress-bar-success wow fadeInLeft" style="width: 79%"
                                        data-wow-duration="1s" data-wow-delay="1s">
                                    </div>
                                </div>
                            </div>
                            <div class="progress-skill">
                                <div class="progress-strategy">
                                    <span class="skill-text">Marketing 96%</span>
                                </div>
                                <div class="progress skill-customp">
                                    <div class="progress-bar progress-bar-success wow fadeInLeft" style="width: 96%"
                                        data-wow-duration="1s" data-wow-delay="1s">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-skill">
                                <div class="progress-strategy">
                                    <span class="skill-text">Wordpress Theme 65%</span>
                                </div>
                                <div class="progress skill-customp">
                                    <div class="progress-bar progress-bar-success wow fadeInLeft" style="width: 65%"
                                        data-wow-duration="1s" data-wow-delay="1s">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-skill">
                                <div class="progress-strategy">
                                    <span class="skill-text">UI/UX Design 92%</span>
                                </div>
                                <div class="progress skill-customp">
                                    <div class="progress-bar progress-bar-success wow fadeInLeft" style="width: 92%"
                                        data-wow-duration="1s" data-wow-delay="1s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Skill area end-->

        <!--about us main area end-->

        <!--Brand slider area css start-->
        <div class="brand-area hp1-brand-area abt-brand">
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
