<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Adherents;
use App\Models\Entraineurs;
use App\Models\Membre;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'prenom_adr' => ['required', 'string', 'max:255'],
            'nom_adr' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'Ntele' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:adherents'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'role' => ['required', 'string', Rule::in(['Membre', 'entraineurs'])],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Adherents
     */
    protected function create(array $data)
    {


        return Adherents::create([



                'prenom_adr' => $data['prenom_adr'],
                'nom_adr' => $data['nom_adr'],
                'age' => $data['age'],
                'Ntele' => $data['Ntele'],
                // Ajoutez les autres champs spécifiques aux membres
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                // 'role' => $data['role'],

        ]);




    }
}
