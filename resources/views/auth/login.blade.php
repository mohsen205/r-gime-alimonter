@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="login">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center">{{__('Login')}}</h1>
                    <!-- sociel media Login -->
                    <div class="d-flex justify-content-center">

                       <a href="{{ route('login.facebook')}}" ><button class="btn btn-primary m-3 facebook-btn"><i class="fab fa-facebook-square  fa-lg"></i> Facebook</button></a>
                       
                       <a href="{{ route('login.google')}}"  ><button class="btn  btn-link m-3 google-btn"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"  class="img-fluid"  alt="logo google" >Google</button></a>
                       
                    </div>
                    <!--end sociel media Login-->

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row">
                                <label for="password" >{{ __('Password') }} 

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot ?') }}
                                        </a>
                                    @endif
                            
                            </label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row">
                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                
                            </div>

                            <div class="form-group row mb-0">
                                    <button type="submit" class="btn btn-primary btn-1">
                                        {{ __('Login') }}
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
