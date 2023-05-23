<!--login start-->
<div class="cart-sum-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="progress-summery text-center">
                    <ul class="progress-steps">
                        <li class="steps-item {{ (Route::current()->getName() == 'user.dashboard') ? 'litext is-active' : '' }}"><a href="{{route('user.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="steps-item {{ (Route::current()->getName() == 'user.profile') ? 'litext is-active' : '' }}"><a href="{{route('user.profile')}}">Profile</a>
                        </li>
                        <li class="steps-item"><a href="login.html">Addresses</a>
                        </li>
                        <li class="steps-item"><a href="address.html">Orders</a>
                        </li>
                        <li class="steps-item"><a href="shipping.html">Bookings</a>
                        </li>
                        <li class="steps-item"><a href="payment.html">Payments</a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <li class="steps-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
