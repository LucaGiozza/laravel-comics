@extends('layouts.app')
@section('title', 'Comics')

@section('section')
<h1>Libreria Comics :</h1>


<div class="container">
    <div class="card-container">
        @foreach($volumi as $key => $volume)
        
           <div class="card">
               <img src="{{$volume['thumb']}}" alt="">
               <div class="layover">
                   <h2><a href="{{route('dettaglio-comics', ['id' => $key ])}}">{{$volume['title']}}</a></h2>
               </div>
           </div>
           
        @endforeach


    </div>


</div>



@endsection
