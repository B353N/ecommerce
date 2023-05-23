@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumb start-->

    <div class="breadcrumbs-wrapper breadcumbs-bg1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                        <ul>
                            <li>
                                <div class="breadcrumbs-icon1">
                                    <a href="/"  title="Return to home"><i class="fa fa-home"></i></a>
                                </div>
                            </li>
                            <li> Authentication</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb end-->

    <!--login top heading start-->

    <div class="cart-top-heading">
        <div class="container">
            <div class="summery-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-sumttl">
                            <h3> Authentication</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login top heading end-->

    <!--login start-->
    <div class="cart-sum-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="progress-summery text-center">
                        <ul class="progress-steps">
                            <li class="steps-item  litext is-active"><a href="cart.html">01. Cart</a>
                            </li>
                            <li class="steps-item is-active"><a href="login.html">02. Sign in</a>
                            </li>
                            <li class="steps-item"><a href="address.html">03. Address</a>
                            </li>
                            <li class="steps-item"><a href="shipping.html">04. Shipping</a>
                            </li>
                            <li class="steps-item"><a href="payment.html">05. Payment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cart start end-->
    <div class="lp-email-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Create an account</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Please enter your email address to create an account.</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}" id="register">
                            @csrf
                            <div class="lp-input">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{old('name')}}" required/>
                            </div>
                            <div class="lp-input">
                                <label for="emailleft">Email address</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" required/>
                            </div>
                            <div class="lp-input">
                                <label for="emailleft">Password</label>
                                <input type="password" id="password" name="password" required autocomplete="new-password"/>
                            </div>
                            <div class="lp-input">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"/>
                            </div>
                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="javascript:;" onclick="document.getElementById('register').submit();"><i class="fa fa-user" aria-hidden="true"></i> Create an account</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Already registered?</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Please put your email address that was used at the time of registration.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}" id="login">
                            @csrf
                            <div class="lp-input">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" required autocomplete="email"/>
                            </div>
                            <div class="lp-input">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" required autocomplete="current-password"/>
                            </div>
                        </form>
                        <div class="" style="padding-top: 7px;">
                            <a href="{{route('password.request')}}">Forgot Password <i class="fa fa-question" aria-hidden="true"></i></a>
                        </div>
                        <div class=" lp-account-btn btn-ac btn-ac2">
                            <a href="javascript:;" onclick="document.getElementById('login').submit();"><i class="fa fa-lock" aria-hidden="true"></i>Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Brand slider area css start-->

    @include('frontend.home.sections.brands')

    <!--Brand slider area css end-->

    <!--Main shop area end-->

    <!--Hair top banner end-->
@endsection
