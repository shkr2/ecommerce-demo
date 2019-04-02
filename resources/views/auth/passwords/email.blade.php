@extends('layout')

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home.index') }}"><i class="fa fa-home">
                        <dd>Home</dd>
                    </i></a></li>
            {{--<li><a href="">Account</a></li>--}}
            <li><a href="{{ route('password.request') }}">Forgotten Password</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-9"><h1>Forgot Your Password?</h1>
                <p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to
                    you.</p>

                <form action="{{ route('password.email') }}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    <fieldset>
                        <legend>Your E-Mail Address</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                            <div class="col-sm-10">
                                {{--<input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">--}}
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="{{ route('login') }}" class="btn btn-default">Back</a></div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Continue') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            @include('partials.auth_sidebar')
        </div>
    </div>
@endsection
