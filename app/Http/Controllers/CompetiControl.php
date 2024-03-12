<?php

namespace App\Http\Controllers;
use App\Models\Competition;

use Illuminate\Http\Request;

class CompetiControl extends Controller
{
    public function getUsers(){
        $users= Competition::all();
        return view('competition.listecompetition',['competition'=>$users]);
    }
}
