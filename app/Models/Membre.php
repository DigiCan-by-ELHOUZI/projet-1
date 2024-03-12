<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competition;
use App\Models\Adherents;
class Membre extends Model
{
    use HasFactory;

       protected $table= "Membre";
       protected $primaryKey="idAdr";
       public $timestamps=false;

    protected $fillable =['date_inscription', 'type_abonnement', 'date_exp_abnm', 'idGroup'];



      public function Adherents(){
         return $this ->belongsTo(Adherents::class, 'idAdr');
        //  return $this ->hasOne(Adherents::class, 'idAdr');
       }


       public function groupe(){
        return $this->belongsTo(Groupe::class, 'idGroupe');
       }


       public function competition(){
          return $this->belongsToMany('App\Models\Competition','participe','idAdr','idComp')->withPivot('absence');
       }


}
