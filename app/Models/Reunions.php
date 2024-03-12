<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunions extends Model
{
    use HasFactory;

    protected $table= "Reunions";
    protected $primaryKey="idReu";
    public $timestamps=false;

    protected $fillable =['date_reu', 'obj_reu'];

    // public function administration()
    // {
    //    return $this ->belongsTo(administration::class ,'id_Admin');
    // }
}
