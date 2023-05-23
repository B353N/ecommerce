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
                            <li> Hello <b>{{Auth::user()->name}}</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb end-->
    @include('frontend.dashboard.sections.menu')
    <!--login top heading start-->

    <div class="cart-top-heading">
        <div class="container">
            <div class="summery-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-sumttl">
                            <h3> My Profile</h3>
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
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>{{Auth::user()->name}} Profile</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>From this section you can change your profile details</p>
                        </div>
                        <form method="POST" action="{{ route('user.profile.update') }}" id="updateProfile">
                            @csrf
                            @method('PUT')
                            <div class="lp-input">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" value="{{Auth::user()->name}}" required/>
                            </div>
                            <div class="lp-input">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" value="{{Auth::user()->email}}" required/>
                            </div>
                            <div class="lp-input">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" value="{{Auth::user()->phone}}" required/>
                            </div>

                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="javascript:;" onclick="document.getElementById('updateProfile').submit();"><i class="fa fa-user" aria-hidden="true"></i> Update Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Password Change</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>You can change your password</p>
                        </div>
                        <form method="POST" action="{{ route('user.profile.update.password') }}" id="changePassword">
                            @csrf
                            <div class="lp-input">
                                <label for="current_password">Current Password</label>
                                <input type="password" id="current_password" name="current_password" required/>
                            </div>
                            <div class="lp-input">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password" required/>
                            </div>
                            <div class="lp-input">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required/>
                            </div>

                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="javascript:;" onclick="document.getElementById('changePassword').submit();"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
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
