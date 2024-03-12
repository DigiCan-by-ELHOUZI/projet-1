@extends('template')

@section('content')
<h1>Création d'une nouvelle compétition</h1>
<form method="POST" action="{{ route('afcompetition.store') }}">
    @csrf
    <div class="form-group">
        <label for="nom_comp">Nom de la compétition :</label>
        <input type="text" name="nom_comp" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nb_max_participants">nb_max_participants :</label>
        <input type="text" name="nb_max_participants" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="date_comp">date_comp :</label>
        <input type="date" name="date_comp" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="idLieu">idLieu :</label>
        <input type="text" name="idLieu" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Membre">Membres</label>
        @foreach($participe as $m)
            <div class="form-check">

                <label for="{{ $m->id }}">{{ $m->idAdr }}</label>
                <input type="checkbox" name="Membre[]" id="{{ $m->id }}" value="{{ $m->id }}">
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection


