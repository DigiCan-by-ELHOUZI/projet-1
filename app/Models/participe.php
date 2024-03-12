<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participe extends Model
{
    use HasFactory;

    protected $table= "participe";
    protected $primaryKey="id";
    public $timestamps=false;

    protected $fillable =['idAdr','idComp','absence'];

}
