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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form id="register-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <label class="error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </label>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="lname" class=" col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="">
                                <input id="lname" type="text" class="form-control @error('last name') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                   <label class="error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </label>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                   <label class="error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </label>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="width-100 margin-top-15 ">
                                <button type="submit" class="btn-blue btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </div>
                                <div class="width-100">
                                <a  class="btn btn-default margin-top-15" href="{{ route('login') }}">Back to Login</a>
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
        $("#register-form").validate();
    </script>
@endsection
