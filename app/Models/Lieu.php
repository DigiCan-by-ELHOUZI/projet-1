<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;

    protected $table= "lieu";
    protected $primaryKey="idLieu";
    public $timestamps=false;

    protected $fillable =['adresse', 'nomLieu'];
}
