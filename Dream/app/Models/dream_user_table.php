<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dream_user_table extends Model
{
    use HasFactory;
    protected $table = 'dream_user_table';
    protected $primaryKey = 'id_dream_user_table';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class,'dream_user_Id_User','id');
    }
}
