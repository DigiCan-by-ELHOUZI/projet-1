<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherents extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $table= "adherents";
    protected $primaryKey="idAdr";
    public $timestamps=false;

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



?>
