@extends('layouts.user.layout')
@section('header')
    @include('layouts.user.header')
@endsection
@section('content')
    @include('layouts.user.breadcrumb')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Login or Create An Account</h1>
                    <div class="md-margin"></div><!-- space -->
                </header>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2>New Customer</h2>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <div class="md-margin"></div><!-- space -->
                        <a href="{{ route('register') }}" class="btn btn-custom-2">Create An Account</a>
                        <div class="lg-margin"></div><!-- space -->
                    </div><!-- End .col-md-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2>Registered Customers</h2>
                        <p>If you have an account with us, please log in.</p>
                        <div class="xs-margin"></div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- End .input-group -->
                            <div class="input-group xs-margin">
                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- End .input-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <span class="help-block text-right">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </span>
                            @endif
                            <button type="submit" class="btn btn-custom-2">
                                {{ __('Login') }}
                            </button>
                        </form>
                        <div class="sm-margin"></div><!-- space -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End.row -->
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
@endsection
@section('footer')
    @include('layouts.user.footer')
@endsection
