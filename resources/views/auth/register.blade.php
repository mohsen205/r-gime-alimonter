@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   

                    <div class="card-body">
                        <div class="h1 text-center">{{ __('Singup With') }} </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" >{{ __('Name') }}</label>

                                
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row">
                                <label for="email" >{{ __('E-Mail Address') }}</label>

                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row">
                                <label for="password" >{{ __('Password') }}</label>

                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
                            </div>
                            <!-- strat recaptcha --->
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            </div>
                            <!--end recaptcha-->
                            <div class="form-group row mb-0">
                                
                                    <button type="submit" class="btn btn-primary btn-1">
                                        {{ __('Register') }}
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
