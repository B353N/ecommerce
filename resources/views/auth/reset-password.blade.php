
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
                            <li> New Password Set</li>
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
                            <h3> New Password Set</h3>
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
                            <h3>New Password Set</h3>
                        </div>
                        <form method="POST" action="{{ route('password.store') }}" id="reset-password">
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <!-- Email Address -->
                            <div class="lp-input">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" value="{{old('email', $request->email)}}" required autocomplete="username"/>
                            </div>
                            <!-- Password -->
                            <div class="lp-input">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password"  required autocomplete="new-password"/>
                            </div>
                            <!-- Confirm Password -->
                            <div class="lp-input">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"  required autocomplete="new-password"/>
                            </div>
                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="javascript:;" onclick="document.getElementById('reset-password').submit();"><i class="fa fa-user" aria-hidden="true"></i> Change Password</a>
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

