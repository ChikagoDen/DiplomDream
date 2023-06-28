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
}
