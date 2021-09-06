@extends('layouts.app')
@section('title', 'Comics')

@section('section')
<h1>Libreria Comics :</h1>


<div class="container">
    <div class="card-container">
        @foreach($volumi as $volume)
           <div class="card">
               <img src="{{$volume['thumb']}}" alt="">
               <div>
                   <h2><a href="">{{$volume['title']}}</a></h2>
               </div>
           </div>
           
        @endforeach


    </div>


</div>



@endsection
