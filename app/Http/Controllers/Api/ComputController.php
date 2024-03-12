<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComputController extends BaseControlle
{

    public function index()
    {
        $competit = Competition::all();
        $result = CompetitionResource::collection($competit);
        return $this->handleResponse($result , 'Les competition ont été reçues!');
    }


    public function create(Request $request)
    {

        $input = $request->all();

        $validator = Validator::make($input, [
          'nom_comp' => 'required',
          'nb_max_participants' => 'required',
          'date_comp' => 'required',
          'idLieu' => 'required',
        ]);

        if($validator->fails()){
        return $this->handleError($validator->errors());
        }

       $competit = Competition::create($input);

       $resource = new CompetitionResource($competit);

       return $this->handleResponse($resource, 'competition créée avec succés!');

    }



    public function show($id)
    {
       $Activite = Activite::find($id);

        if (is_null($Activite)) {
          return $this->handleError('Activite non trouvée!');
        }

       $resource =new ActiviteResource($Activite);
       return $this->handleResponse($resource, 'Activité reçue.');

    }
}
