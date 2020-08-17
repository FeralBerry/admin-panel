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
                    <h1 class="title">Register Account</h1>
                    <p class="title-desc">If you already have an account, please login at <a href="{{ route('login') }}">login page</a>.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="sub-title">YOUR PERSONAL DETAILS</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">First Name&#42;</span></span>
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control input-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!-- End .input-group -->
                            <div class="input-group">
                                <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!-- End .input-group -->
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Confirm&#42;</span></span>
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div><!-- End .input-group -->
                        </div>
                        <div class="input-group custom-checkbox">
                            <input type="checkbox"> <span class="checbox-container">
									 <i class="fa fa-check"></i>
									 </span>
                            I have reed and agree to the <a href="#">Privacy Policy</a>.
                        </div><!-- End .input-group -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-custom-2 md-margin">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('layouts.user.footer')
@endsection
