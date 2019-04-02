@extends('layout')

@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ route('home.index') }}"><i class="fa fa-home"><dd>Home</dd></i></a></li>
        {{--<li><a href="">Account</a></li>--}}
        <li><a href="{{ route('login') }}">Login</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Account Login</h1>
            <div class="row">
                <div class="col-sm-6">
                    <h2>New Customer</h2>
                    <p><strong>Register Account</strong></p>
                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Continue</a>
                </div>
                <div class="col-sm-6">
                    <h2>Returning Customer</h2>
                    <p><strong>I am a returning customer</strong></p>

                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="input-email">E-Mail Address</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">Password</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif


                            <br>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
        @include('partials.auth_sidebar')
    </div>
</div>
@endsection