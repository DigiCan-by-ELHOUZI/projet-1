<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function dashboard()
    {
        // Ajoutez ici la logique spécifique au tableau de bord des membres

        return view('membre.dashboard');
    }
}
