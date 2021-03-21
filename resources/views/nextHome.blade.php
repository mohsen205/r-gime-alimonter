@extends('layouts.app')

@section('title','Resulat')

@section('content')
<div class="home res">
    <div class="container">
       
        @php
            $imc = session('status')
        @endphp
        @if ($imc < 18.5)
            <div class="alert alert-warning" role="alert">
                {{__('maigreur')}}
            </div>
        @elseif($imc >= 18.5 && $imc < 25)
            <div class="alert alert-success" role="alert">
                {{__('poid ideal')}}
            </div>
        @elseif($imc >= 25 && $imc < 30)
            <div class="alert alert-info" role="alert">
                {{__('superpoids')}}
            </div>
        @elseif($imc >= 30)
            <div class="alert alert-danger" role="alert">
                {{__('obésité')}}
            </div>
        @endif
        
    </div>
</div>

@endsection
