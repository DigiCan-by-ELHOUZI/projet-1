<?php

namespace App\Http\Controllers;
use App\Models\Adherents;

use Illuminate\Http\Request;

class AdherentControl extends Controller
{
    public function getUsers(){
        $users= Adherents::all();
        return view('adherent.listeAdherent',['adherent'=>$users]);
    }
}
