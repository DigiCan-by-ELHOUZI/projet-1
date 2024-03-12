<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entraineurs extends Model
{
    use HasFactory;

       protected $table= "entraineurs";
       protected $primaryKey="idAdr";
       public $timestamps=false;

    protected $fillable =['niveau_certification', 'specialite', 'salaire'];

     public function Adherents(){
        return $this ->belongsTo(Adherents::class, 'idAdr');
        // return $this ->hasOne(Adherents::class, 'idAdr');
     }


     public function groupe(){
        return $this->hasMany('App\Models\Groupe', 'idGroupe');
    }
}
