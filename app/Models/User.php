<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Competition;
use App\Models\Entraineurs;
use App\Models\Membre;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Authenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =['prenom_adr',
    'nom_adr',
     'age',
     'Ntele',
     'email',
     'username',
     'password',
     'dateAdhesion',
       'role'
   ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Membre()
      {
       return $this ->hasOne('App\Models\Membre' , 'idAdr');
      }


     public function Entraineurs()
      {
       return $this ->hasOne('App\Models\Entraineurs' , 'idAdr');
      }


      public function estMembre()
      {
          return $this->role === 'Membre';
      }

      public function estEntraineur()
      {
          return $this->role === 'entraineurs';
      }



      public function getAuthIdentifierName()
    {
        return 'idAdr';
    }

    public function getAuthIdentifier()
    {
        return $this->idAdr;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
