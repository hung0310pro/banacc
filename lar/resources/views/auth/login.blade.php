@extends('layouts.header')

@section('content')
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading"><img src="{{ url('img/logo-xx.png') }}" alt="logo" width="102"
                                                        height="27"
                                                        class="logo-img"><span class="splash-description">Please enter your user information.</span>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   placeholder="Email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password"
                                                   placeholder="Password"
                                            >

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row login-tools">
                                        <div class="col-xs-6 login-remember">
                                            <div class="be-checkbox">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="form-group login-submit">
                                        <div class="col-md-12 offset-md-12">
                                            <button type="submit" class="btn btn-primary btn-xl">
                                                {{ __('Sign me in') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="splash-footer"><span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.footer')