<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Membre;
use App\Models\Adherents;
use App\Models\participe;

class ComputControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competit = Competition::all();
        return view('competition.gestionCompetition',['competition'=>$competit]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $participe = Membre::all(); // Récupération de tous les membres depuis la base de données
         $competit = new Competition(); // Création d'une nouvelle compétition

         return view('competition.createComput', [
         'competi' => $competit,
          'participe' => $participe,
    ]);
    }

      /**
       * Store a newly created resource in storage.
       */
    public function store(Request $request)
    {
        $competit = new Competition();
        $competit->nom_comp = $request->input('nom_comp');
        $competit->nb_max_participants = $request->input('nb_max_participants');
        $competit->date_comp = $request->input('date_comp');
        $competit->idLieu = $request->input('idLieu');
        // Enregistrement de la compétition dans la base de données
        $competit->save();

        // Attacher les membres sélectionnés à la compétition nouvellement créée
        $competit->participe()->attach($request->input('participe'));

        // Rediriger l'utilisateur vers la page de détails de la compétition créée
        return redirect()->route('afcompetition.show', ['competit' => $competit->idComp]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $competit = Competition::find($id);
      $participe= $competit->participe;

      return view('competition.detailCompet', ['competi'=>$competit , 'participe'=>$participe]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $competit = Competition::find($id);
        $participe = participe::where('idComp', $id)->get();
        return view('competition.editComput', compact('competit', 'participe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $competit = Competition::find($id);
        $competit ->nom_comp = $request->input('nom_comp');
        $competit ->nb_max_participants = $request->input('nb_max_participants');
        $competit ->date_comp = $request->input('date_comp');
        $competit ->idLieu = $request->input('idLieu');

        $competit->save();
        $participe = participe::where('idComp', $id)->get();
        foreach($participe as $i => $participe) {
            $participe->idAdr = $request->input('idAdr')[$i];
            $participe->save();
        }

        return redirect('afcompetition');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {




        participe::where('idComp', $id)->delete();
        Competition::find($id)->delete();
        return redirect('afcompetition');


    }
}
