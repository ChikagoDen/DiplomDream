<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DreamBooksController extends Controller
{
    public function index(){
        $putBooks=$this->Sonnik2();
        $putBooks2=$this->SonnikSw();
        $putBooks3=$this->Sonnikmy();
        $putBooks4=$this->SonnikmyALL();
        $params=[
            'getPuttBooks'=>$putBooks,
            'getPuttBooks2'=>$putBooks2,
            'getPuttBooks3'=>$putBooks3,
            'getPuttBooks4'=>$putBooks4,
        ];
        return view("User.dreamBooks",$params);
    }
    // public function index($id_user_tabl=1){
    //     $putBooks=DB::select('SELECT user_tabll_name_nick,user_tabl_date_of_registration,user_tabl_password FROM dream_book_website.user_tabl where id_user_tabl=:id_user_tabl',
    // ['id_user_tabl'=>$id_user_tabl]);
        

    //    return view("User.userIndex",['putBooks'=>$putBooks[0]]); 
    // }
}
