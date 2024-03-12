<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adherents;

class Competition extends Model
{
    use HasFactory;

    protected $table= "competition";
    protected $primaryKey="idComp";
    public $timestamps=false;

    protected $fillable =['nom_comp','nb_max_participants','date_comp', 'idLieu'];

   public function participe(){
    return $this->belongsToMany('App\Models\Membre','participe','idComp', 'idAdr',)->withPivot('absence');
   }


}
