@extends('template')

@section('content')

@foreach ($competition as $e)
    <p>{{$e->nom_comp}}   ||     {{$e->nb_max_participants}}     ||     {{$e->date_comp}}</p>

@endforeach

@endsection

