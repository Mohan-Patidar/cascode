@extends('layouts.authLayout')

@section('content')
     <div class="page-inner login-page">
                    <div id="main-wrapper" class="login-main-wrapper">
                           <div class="login-head">
                        <a href="{{url('/')}}">
                           <img style="width:100%" src="{{url('/')}}/assets/images/minebytes-logo.png" alt="">
                        </a>
                    </div>
                        <div class="login-wrapper-inr">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Medische afkortingen Admin') }}</div>

                <div class="card-body">
                    <form  id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <label class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                   <label class="error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </label>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">-->
                        <!--    <div class="">-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                        <!--            <label class="form-check-label" for="remember">-->
                        <!--                {{ __('Remember Me') }}-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group row mb-0">
                            <div class="width-100 margin-top-15 ">
                                <button type="submit" class="btn-blue btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                                
                                <div class="width-100">
                                    <p class=" margin-top-15 text-center"> 
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No access yet? </font></font><a  href="{{ route('register') }}" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register  here</font></font></a>
                        </span></p>
                                 <!--<a  class="btn btn-default margin-top-15" href="{{ route('register') }}">Register</a>-->

                                <!--@if (Route::has('password.request'))-->
                                <!--    <a class="btn btn-link" href="{{ route('password.request') }}">-->
                                <!--        {{ __('Forgot Your Password?') }}-->
                                <!--    </a>-->
                                <!--@endif-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additionalscripts')
    <script>
        $("#login-form").validate();
    </script>
@endsection

