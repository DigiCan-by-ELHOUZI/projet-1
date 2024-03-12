@extends('template')

@section('content')

@foreach ($adherent as $a)
    {{-- <p><a href="{{route('adherent.show',$a->idAdr)}}">{{$a->nom_adr}}</a></p> --}}

    <p>{{$a->nom_adr}}     {{$a->age}}</p>

@endforeach

@endsection
