<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksMyController extends Controller
{
    public function index(){
        if (!empty($_GET)) {
            if (!empty($_GET['statusShow'])) {
                $idDream = $_GET['statusShow'];
                DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('id_dream_user_table',$idDream)
                    ->update(['dream_user_access'=>0]);
            }
            elseif(!empty($_GET['statusClose'])){
                $idDream = $_GET['statusClose'];
                DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('id_dream_user_table',$idDream)
                    ->update(['dream_user_access'=>1]);
            }
            // редерикт на правила!!!!
            else return redirect()->back();
        }
        $listDreamBooks=DB::table('dream_book_biblioteca.biblioteca_tabl')
                        ->select('biblioteca_tabl_name','biblioteca_tabl_discription')
                        ->get();
        $id=Auth()->id();
        $dataDremMy=DB::table('dream_book_biblioteca.dream_user_table')
                    // ->select('dream_user_title', 'dream_user_discription', 'dream_user_date', 'dream_user_coment_col','dream_user_access')
                    ->where('dream_user_Id_User',$id)
                    ->orderBy('dream_user_date', 'desc')
                    ->get();
                    


        $putBooks=$this->Sonnik2();
        $putBooks2=$this->SonnikSw();
        $putBooks3=$this->Sonnikmy();
        $putBooks4=$this->SonnikmyALL();
        $params=[
            'dataDremMy'=>$dataDremMy,
            'getPuttBooks'=>$putBooks,
            'getPuttBooks2'=>$putBooks2,
            'getPuttBooks3'=>$putBooks3,
            'getPuttBooks4'=>$putBooks4,
            'listDreamBooks'=>$listDreamBooks,

        ];
        return view("User.dreamBooksMy",$params);         
    }
    // public function index($id_user_tabl=1){
    //     $putBooks=DB::select('SELECT user_tabll_name_nick,user_tabl_date_of_registration,user_tabl_password FROM dream_book_website.user_tabl where id_user_tabl=:id_user_tabl',
    // ['id_user_tabl'=>$id_user_tabl]);
        

    //    return view("User.userIndex",['putBooks'=>$putBooks[0]]); 
    // }
}
