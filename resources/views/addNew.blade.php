@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="home">
    <div class="container  justify-content-center">
       <div class="from">
        <form action="/addNew" method="POST">
            @csrf
            <input type="hidden" name="id_user" value={{ Auth::user()->id }}/>
        <div class="carousel">
                <div class="form-group">
                    <label>{{__('taille')}} (cm)</label>
                    <input type="number" max="250"  name="taille" step="0.1" class="form-control @error('taille') is-invalid @enderror"/>
                    @error('taille')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror  
                </div>
            
                <div class="form-group">
                    <label>{{__('Poid')}} (kg)</label>
                    <input type="number" max="250" min="50" name="poid" step="0.1" class="form-control @error('poid') is-invalid @enderror"/>
                    @error('poid')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{__('Date')}} </label>
                    <input type="date" max="250" min="50" name="date" class="form-control @error('poid') is-invalid @enderror"/>
                    @error('date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                
            </div>
        <button class="btn btn-success btn-1">{{__('Ajouter')}}</button>
        </div>
        </form>
    </div>
          </div>
    </div>
</div>

@endsection
