<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $table= "groupe";
    protected $primaryKey="idGroupe";
    public $timestamps=false;

    protected $fillable =['numero_Grp', 'idAdr'];


    public function membre(){
        return $this->hasMany('App\Models\Membre', 'idGroupe');
    }




}
