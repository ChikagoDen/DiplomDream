<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dreambook extends Model
{
    use HasFactory;
    protected $table = 'dreambook';
    protected $primaryKey = 'idDreamBook';
    public $timestamps = false;

    public function DreambookBiblioteca_tabl(){
        return $this->belongsTo(biblioteca_tabl::class,'idDream','id_biblioteca_tabl');
    }
}
