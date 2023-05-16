<?php declare(strict_types = 1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    // public function index(){
    //     $putBooks=$this->Sonnik();
        
    //     $params=[
    //         'getPuttBooks'=>$putBooks,
    //         'name'=>'Den'
    //     ];
    //    return view("User.homeUser",$params); 
    //    return view("User.userIndex",$params); 
    // }
    public function index(){
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription FROM dream_book_biblioteca.biblioteca_tabl');

        $putBooks=$this->Sonnik2();
        $putBooks2=$this->SonnikSw();
        $putBooks3=$this->Sonnikmy();
        $putBooks4=$this->SonnikmyALL();
        $params=[
            'listDreamBooks'=>$listDreamBooks,

            'getPuttBooks'=>$putBooks,
            'getPuttBooks2'=>$putBooks2,
            'getPuttBooks3'=>$putBooks3,
            'getPuttBooks4'=>$putBooks4,
        ];

        // return view("dashboard", $params); 
        // return view("User.Horoscope.horoscope",$params);
        // return view("User.dreamBooksMyAll",$params);
        // return view("User.dreamBooksMy",$params);         
        // return view("User.dreamBooksWords",$params);    
        // return view("User.dreamBooksAll",$params);
        // return view("User.dreamBooks",$params);
       return view("User.homeUser", $params); 
    }
    // public function index2($id_user_tabl){
    //     $putBooks=DB::select('SELECT user_tabll_name_nick,user_tabl_date_of_registration,user_tabl_password FROM dream_book_website.user_tabl where id_user_tabl=:id_user_tabl',
    // ['id_user_tabl'=>$id_user_tabl]);
        

    //    return view("User.userIndex",['putBooks'=>$putBooks[0]]); 
    // }
    
    
}
