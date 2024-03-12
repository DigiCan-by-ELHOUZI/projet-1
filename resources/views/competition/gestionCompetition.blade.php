
@extends('template')

@section('content')

<div>

    </div>
    <h1 style="margin-left: 500px">Liste des Competition</h1>
    <div>
        <a style="margin-top: 50px" href="{{route('afcompetition.create')}}" class="btn btn-primary">Ajouter une Nouvelle competition</a>
        </div>
    <table style="margin-top: 30px">
        <thead>
            <tr>

                <th> Nom_Competition</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($competition as $competit)

                <tr>

                    <td> <p><a href="{{route('afcompetition.show',$competit->idComp)}}">{{$competit->nom_comp}}</a></p></td>

                    <td> <a class="btn btn-danger" href="{{ route('afcompetition.edit',$competit->idComp) }}">Modifier</a></td>


                    <td>
                        <form action="{{ route('afcompetition.destroy' ,$competit->idComp) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
