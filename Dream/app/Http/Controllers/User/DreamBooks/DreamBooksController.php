<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksController extends Controller
{
    public function show(){
        
        if (isset($_GET['words'])) {
            $words = $_GET['words'];
            if (is_numeric($words)) {
                DB::update('UPDATE `dream_book_biblioteca`.`dreambook` SET `LikeCol` = `LikeCol`+1 WHERE `idDreamBook` =?',[$words]);
            }
            else $words=0;
        }
        else $words=0;

        $array = $this->array;
        $book=request()->input('book');
        if ($book>=1000000) {
            return redirect()->route('infoDreamBooksAll');
        }
                if ($book<=-1) {
            return redirect()->route('dreamBooksUserAll');
        }
        $bookData=DB::select('SELECT * FROM dream_book_biblioteca.dreambook where idDream=:book', ['book'=>$book]);
        $DreamBooks=DB::select('SELECT biblioteca_tabl_name, biblioteca_tabl_discription,biblioteca_tabl_word_col FROM dream_book_biblioteca.biblioteca_tabl where id_biblioteca_tabl=:book', ['book'=>$book]);
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription FROM dream_book_biblioteca.biblioteca_tabl');
        $wordsStock=[];

        // dd(  $DreamBooks);
        foreach($bookData as $value){
            $temp=mb_substr(mb_strtoupper($value->DreamBookWord), 0, 1, "UTF-8");
            for ($i=0; $i < count($array); $i++) { 
                $temp2=$array[$i];
                if (strcmp($temp,$temp2)==0) {
                   $wordsStock[$temp2][]=$value;
                }
            }
        }
        $putBooks=$this->Sonnik2();
        $putBooks2=$this->SonnikSw();
        $putBooks3=$this->Sonnikmy();
        $putBooks4=$this->SonnikmyALL();
        $params=[
            'words'=>$words,
            // 'array'=>$array,
            'wordsStock'=>$wordsStock,
            'book'=> $book,
            // 'bookData'=>$bookData,
            'DreamBooks'=>$DreamBooks,
            'listDreamBooks'=>$listDreamBooks,
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
