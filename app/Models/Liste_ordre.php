<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liste_ordre extends Model
{
    use HasFactory;

    protected $table= "liste_ordre";
    protected $primaryKey="idOrdr";
    public $timestamps=false;

    protected $fillable =['ordre', 'idReu'];
}
