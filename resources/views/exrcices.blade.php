@extends('layouts.app')

@section('title','Exrcices')

@section('content')
<div class="home res">
    <div class="container">
       <div class="exrsices">
        @foreach ($datas as $data)
        <div class="media">
            <img src="{{$data->image}}" class="align-self-start mr-3" alt="{{$data->name}}">
            <div class="media-body">
              <h5 class="mt-0">{{$data->id}} - {{$data->name}}</h5>
              <p>{{$data->description}}</p>
              <p class="deriction">{{$data->deriction}}</p>
            </div>
          </div>
        @endforeach
         
        {{ $datas->links() }}
       </div>
    </div>
</div>

@endsection
