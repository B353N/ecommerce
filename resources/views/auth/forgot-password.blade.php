
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
                            <li> Forgot Password</li>
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
                            <h3> Forgot Password</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login top heading end-->


    <!--Cart start end-->
    <div class="lp-email-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Forgot Password</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}" id="forgot-password">
                            @csrf
                            <div class="lp-input">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" required/>
                            </div>
                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="javascript:;" onclick="document.getElementById('forgot-password').submit();"><i class="fa fa-user" aria-hidden="true"></i> Reset Password</a>
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

