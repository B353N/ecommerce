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
                                        <a href="{{ route('home') }}" title="Return to home"><i class="fa fa-home"></i></a>
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

                    <div class="col-xl-5 col-xl-12 col-xl-12">
                        <div class="abt-content-wrapper">
                            <div class="abt-title title-head-normal">
                                <h3><span class="color-black-def">За</span> Нас</h3>
                            </div>
                            <div class="abt-content">
                                <p>{!! $about->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
