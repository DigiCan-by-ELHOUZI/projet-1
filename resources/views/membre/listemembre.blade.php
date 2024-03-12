@extends('template')

@section('content')

@foreach ($Membre as $a)
   <br>

    <p>{{$a->date_inscription}}            |||                {{$a->type_abonnement}}                |||                   {{$a->date_exp_abnm}}</p>

@endforeach

@endsection
