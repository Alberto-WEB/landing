@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>    
            @forelse ($portfolio as $portfolioitem)
                <li>{{  $portfolioitem['title'] }}</li>
               
                @empty
               
             <li>no hay proyectos ahora...</li>
            @endforelse
    </ul>

@endsection