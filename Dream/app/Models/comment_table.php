<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_table extends Model
{
    use HasFactory;
    protected $table = 'comment_table';
    protected $primaryKey = 'idcomment_table';
    public $timestamps = false;

    public function userCommit(){
        return $this->belongsTo(User::class,'comment_id_user','id');
    }
    public function dream(){
        return $this->belongsTo(dream_user_table::class,'comment_id_dream','id_dream_user_table');
    }
    public function userAnswer(){
        return $this->belongsTo(User::class,'dream_user_Id_User','id');
    }
    
}
