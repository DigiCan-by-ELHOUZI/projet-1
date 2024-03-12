@extends('template')

@section('content')
<h1>Modification compétition</h1>

<form method="POST" action="{{ route('afcompetition.update', $competit->idComp) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nom_comp">Nom de la compétition :</label>
        <input type="text" name="nom_comp" class="form-control" value="{{ $competit->nom_comp }}">
    </div>

    <div class="form-group">
        <label for="nb_max_participants">nb_max_participants :</label>
        <input type="text" name="nb_max_participants" class="form-control" value="{{ $competit->nb_max_participants }}">
    </div>

    <div class="form-group">
        <label for="date_comp">date_comp :</label>
        <input type="date" name="date_comp" class="form-control" value="{{ $competit->date_comp }}">
    </div>

    <div class="form-group">
        <label for="idLieu">idLieu :</label>
        <input type="text" name="idLieu" class="form-control" value="{{ $competit->idLieu }}">
    </div>


    <table>
        @foreach($participe as $m)
        <tr>
            <td>Nom du membre :</td>
            <td><input type="text" class="form-control" name="idAdr[]" value="{{ $m->idAdr }}"></td>
        </tr>
        @endforeach
    </table>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection


