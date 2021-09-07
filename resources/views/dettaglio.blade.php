@extends('layouts.app')
@section('title', 'dettaglio-comics')

@section('section')
   

<div class="det">
    
    
    
    <h2>{{$volumi['title']}}</h2>
    <p>{{$volumi['series']}}</p>
    <p>{{$volumi['description']}}</p>
    <p>{{$volumi['type']}}</p>
    <p>{{$volumi['sale_date']}}</p>
    
     
</div>


@endsection
