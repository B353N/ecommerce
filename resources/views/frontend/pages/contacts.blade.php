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
                                <li>{{ __('lang.contacts') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->

        <!--map area start-->
        <div class="map-area">
            <div id="">
                <!-- Google Map Area Start -->
                <div class="google-map-area">
                    <iframe class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"></iframe>
                </div>
                <!-- Google Map Area Start -->
            </div>
        </div>
        <!--map area end-->

        <!--Contact email start-->

        <div class="contact-email-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <form id="contact-form" class="contact-form" action="mail.php" method="post">
                                <div class="address-wrapper row">
                                    <div class="col-lg-12">
                                        <div class="address-fname">
                                            <input type="text" name="name" placeholder="{{ __('lang.name') }}*" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="address-email">
                                            <input type="email" name="email" placeholder="{{ __('lang.email') }}*" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="address-web">
                                            <input type="text" name="telephone" placeholder="{{ __('lang.website') }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="{{ __('lang.subject') }}*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="{{ __('lang.message') }}*"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-messege"></p>
                                <div class="col-sm-12">
                                    <div class="send-email">
                                        <button type="submit" class="btn btn-default">{{ __('lang.send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Contact email end-->

        <!--Brand slider area css start-->
        <div class="brand-area brand-area2 contact-brand">
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
