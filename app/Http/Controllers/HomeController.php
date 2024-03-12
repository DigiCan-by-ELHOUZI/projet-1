<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Entraineurs;
use App\Models\Membre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $id= $user->idAdr;

        if (Entraineurs::find($id)){
            return redirect(route('entrainements.index'));
        }
        else if (Membre::find($id)){
            return redirect(route('membre.index'));
        }
        else {
            return view('home');
        }
    }
}
