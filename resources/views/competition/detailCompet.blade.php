
@extends('template')

@section('content')
   <h1>{{$competi->nom_comp}}</h1>
   <ul>
      <li>  nb_max_participants  :     {{$competi->nb_max_participants}}</li>
      <li>  Date Competition :       {{$competi->date_comp}}</li>

   </ul>
    <h2>Membre participe a cette competition</h2>
    <ul>
      @foreach ($participe  AS $m)
            <li> id Membre :    {{$m->idAdr}}</li>
            <li> type_abonnement  :     {{$m->type_abonnement}}</li>
             <li> Date d'inscription  :     {{$m->date_inscription}}</li>


      @endforeach


    </ul>

@endsection


