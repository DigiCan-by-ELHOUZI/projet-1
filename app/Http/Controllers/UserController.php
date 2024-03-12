<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Adherents;

class UserController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (user()->role === 'membre') {
                return '/membre/dashboard'; // Redirection pour les membres
            } elseif (user()->role === 'entraineurs') {
                return '/entraineurs/dashboard'; // Redirection pour les entraineurs
            }
        }

        return '/home'; // Redirection par défaut
    }

}
