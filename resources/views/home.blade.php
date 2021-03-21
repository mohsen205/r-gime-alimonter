@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="home">
    <div class="container  justify-content-center">
       <div class="from">
        <form action="/home" method="POST">
            @csrf
            <input type="hidden" name="id_user" value={{ Auth::user()->id }}/>
        <div class="carousel">
                <div class="form-group" style="text-align: center;">
                    <label class="@error('sex') is-invalid @enderror">
                        <input type="radio" name="sex"  value="male">
                        <i class="fas fa-male fa-5x"></i>
                      </label>
                      
                      <label class="@error('sex') is-invalid @enderror">
                        <input type="radio" name="sex"  value="female">
                        <i class="fas fa-female fa-5x"></i>
                      </label>

                      @error('sex')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror   

                </div>
                <div class="form-group">
                    <label>{{__('taille')}} (cm)</label>
                    <input type="number" max="250"  name="taille" class="form-control @error('taille') is-invalid @enderror"/>
                    @error('taille')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror  
                </div>
            
                <div class="form-group">
                    <label>{{__('Poid')}} (kg)</label>
                    <input type="number" max="100" min="50" name="poid" class="form-control @error('poid') is-invalid @enderror"/>
                    @error('poid')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label>{{__('Age')}} (année)</label>
                    <input type="number" max="80" min="15" name="age" class="form-control @error('age') is-invalid @enderror"/>
                    @error('age')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>
        <button class="btn btn-success btn-1">{{__('Calculé')}}</button>
        </div>
        </form>
    </div>
          </div>
    </div>
</div>

@endsection
