@extends('layouts.header')

@section('content')
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container sign-up">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading"><img src="{{ url('img/logo-xx.png') }}" alt="logo" width="102"
                                                        height="27"
                                                        class="logo-img"><span class="splash-description">Please enter your user information.</span>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}"><span
                                            class="splash-title xs-pb-20">Sign Up</span>
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-md-12">
                                            <input id="name" type="text"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus
                                                   placeholder="Username"
                                            >

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   placeholder="Email"
                                            >

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="phone" type="number"
                                                   class="form-control"
                                                   name="phone"
                                                   placeholder="Phone Number"
                                            >
                                        @error('phonenumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="new-password"
                                                   placeholder="Password"
                                            >

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required autocomplete="new-password"
                                                   placeholder="Password Confirm"
                                            >
                                        </div>
                                    </div>

                                    <div class="form-group xs-pt-10">
                                        <button type="submit" class="btn btn-block btn-primary btn-xl">
                                            {{ __('Sign Up') }}
                                        </button>
                                    </div>
                                    <div class="title"><span class="splash-title xs-pb-15">Or</span></div>
                                    <div class="form-group row social-signup">
                                        <div class="col-xs-6">
                                            <button type="button"
                                                    class="btn btn-lg btn-block btn-social btn-facebook btn-color"><i
                                                        class="mdi mdi-facebook icon icon-left"></i> Facebook
                                            </button>
                                        </div>
                                        <div class="col-xs-6">
                                            <button type="button"
                                                    class="btn btn-lg btn-block btn-social btn-google-plus btn-color"><i
                                                        class="mdi mdi-google-plus icon icon-left"></i> Google Plus
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group xs-pt-10">
                                        <div class="be-checkbox">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">By creating an account, you agree the <a href="#">terms
                                                    and conditions</a>.</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="splash-footer">&copy; {{ now()->year }} Your Company</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.footer')
