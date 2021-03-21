@extends('layouts.app')

@section('title','Histroy')

@section('content')
<div class="home res">
    <div class="container">
       <div class="history">
            <div class="last-thing">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body text-center">
                              <h5 class="card-title">{{__('poids minimum')}}</h5>
                              <p class="card-text">{{$poids_minimum}}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body text-center">
                              <h5 class="card-title">{{__('poids moyen')}}</h5>
                              <p class="card-text">{{$poids_avr}}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body text-center">
                              <h5 class="card-title">{{__('poids maximum')}}</h5>
                              <p class="card-text">{{$poids_maximuin}}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" >
                            <div class="card-body text-center">
                              <h5 class="card-title">{{__('poids de départ')}}</h5>
                              <p class="card-text">{{$poids_start}}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" >
                            <div class="card-body text-center">
                              <h5 class="card-title">{{__('poids actuel')}}</h5>
                              <p class="card-text">{{$poids_current}}</p>
                            </div>
                          </div>
                    </div>
                    
                </div>
               
            </div>
            <div class="chart">
                <img src="https://image-charts.com/chart?chbr=8&chd=t%3A10%2C15%2C25%2C30%2C40%2C80&chf=b0%2Clg%2C90%2C05B142%2C1%2C0CE858%2C0.2&chl=%7C%7C%7C%7C%2033%25%20%21%7Cx2%20&chma=0%2C0%2C10%2C10&chs=700x450&cht=bvs&chtt=Revenue%20per%20month&chxl=0%3A%7CJan%7CFev%7CMar%7CAvr%7CMay&chxs=1N%2AcUSD0sz%2A%2C000000%2C14&chxt=x%2Cy" alt="">
            </div>
            <div class="d-flex justify-content-end">
             <a href="{{route('add')}}"><button class="btn btn-success btn-1">Ajouter</button></a>   
            </div>
       </div>
       
        
    </div>
</div>

@endsection
