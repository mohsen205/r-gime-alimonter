@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="home">
    <div class="container">
       <div class="account">
           <div class="row">
                <div class="col-md-6">
                    <div class="form">
                        <h4> {{__('modifier le compte')}} </h4>
                        <strong style="color : green">{{session('msg')}}</strong>
                        <strong style="color : red">{{session('error')}}</strong>
                        <form action="{{route('update')}}" method="POST">
                            @csrf
                           <div class="form-group">
                               <label >{{__('Nom')}}</label>
                               <input type="text" value={{Auth::user()->name}} name="name" class="form-control  @error('name') is-invalid @enderror" >
                               @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                           <div class="form-group">
                            <label >{{__('Adreess email')}}</label>
                            <input type="email" value={{Auth::user()->email}} name="email" class="form-control @error('email') is-invalid @enderror" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success " >{{__('Enregister')}}</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">

                    <h4> {{__('changer le mot de passe')}} </h4>
                    <form action="{{route('change')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <div class="form-group">
                            <label for="password"  >{{__('Ancien mot de passe')}}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                         <label for="password-confirm"  >{{__('nouveau mot de passe')}}</label>
                         <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                     </div>
                     <div class="form-group">
                         <button class="btn btn-success" >{{__('Enregister')}}</button>
                     </div>
                    </form>
                </div>
                
              </div>
            
                
        </div>
        
    </div>
</div>

@endsection
