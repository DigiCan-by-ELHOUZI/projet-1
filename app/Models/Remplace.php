<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remplace extends Model
{
    use HasFactory;

    protected $table= "Remplace";
    protected $primaryKey="idAdr";
    public $timestamps=false;

    protected $fillable =['idAdr_1', 'dat_deb', 'dat_fin'];

}
