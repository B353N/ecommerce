@extends('frontend.layouts.master')

@section('content')

@include('frontend.home.sections.banner-slider')
@include('frontend.home.sections.offers')

@include('frontend.home.sections.middle-discount')

<!--Our product area start-->
@include('frontend.home.sections.product-area')

<!--Our product area end-->

<!--Center banner area start-->
@include('frontend.home.sections.central-banner')
<!--Center banner area end-->

<!--Featured product area start-->
@include('frontend.home.sections.featured-products')
<!--Featured product area end-->

<!--Blog area start-->
@include('frontend.home.sections.blog')
<!--Blog area end-->

<!--Email area start-->
@include('frontend.home.sections.email')
<!--Email area start-->

<!--Brand slider area css start-->
@include('frontend.home.sections.brands')
<!--Brand slider area css end-->

<!-- Google map area start-->
@include('frontend.home.sections.map')
<!-- Google map area end-->
@endsection
