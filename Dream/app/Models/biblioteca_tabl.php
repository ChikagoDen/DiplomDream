<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biblioteca_tabl extends Model
{
    use HasFactory;
    protected $table = 'biblioteca_tabl';
    protected $primaryKey = 'id_biblioteca_tabl';
    // const CREATED_AT = 'biblioteca_tabl_data';1
    public $timestamps = false;

    public function Biblioteca_tablDreamUserTables(){
        return $this->hasMany(dreambook::class,'idDream','id_biblioteca_tabl');
    }



}
