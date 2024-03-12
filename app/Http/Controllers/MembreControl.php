<?php

namespace App\Http\Controllers;
use App\Models\Membre;
use App\Models\Adherents;

use Illuminate\Http\Request;

class MembreControl extends Controller
{
    public function getUsers(){
        $users= Membre::all();
        return view('membre.listemembre',['Membre'=>$users]);
    }
}
