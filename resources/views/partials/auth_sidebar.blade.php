<column id="column-right" class="col-sm-3 hidden-xs">
    <h3><span>Account</span></h3>
    <div class="list-group">
        <ul class="list-item">

            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('password.request') }}">Forgotten Password</a></li>
            @else
            @endguest
            <li><a href="">My Account</a></li>
            <li><a href="">Address Book</a></li>
            <li><a href="">Wish List</a></li>
            <li><a href="">Order History</a></li>
            <li><a href="">Downloads</a></li>
            <li><a href="">Recurring payments</a></li>
            <li><a href="">Reward Points</a></li>
            <li><a href="">Returns</a></li>
            <li><a href="">Transactions</a></li>
            <li><a href="">Newsletter</a></li>
        </ul>
    </div>
</column>