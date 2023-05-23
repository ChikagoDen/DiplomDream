<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksAllController extends Controller
{
    public function showAll(){
        $bookDataAll=DB::select('SELECT DreamBookWord, DreamBookDescription, biblioteca_tabl_name, biblioteca_tabl_author, idDreamBook,LikeCol FROM dream_book_biblioteca.dreambook, dream_book_biblioteca.biblioteca_tabl where dream_book_biblioteca.dreambook.idDream=dream_book_biblioteca.biblioteca_tabl.id_biblioteca_tabl order by DreamBookWord');
        
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
        // $bookData=DB::select('SELECT DreamBookWord, DreamBookDescription, biblioteca_tabl_name, biblioteca_tabl_author FROM dream_book_biblioteca.dreambook, dream_book_biblioteca.biblioteca_tabl where dream_book_biblioteca.dreambook.idDream=dream_book_biblioteca.biblioteca_tabl.id_biblioteca_tabl order by DreamBookWord');
        $DreamBooks=DB::select('SELECT sum(biblioteca_tabl_word_col) as biblioteca_tabl_word_col FROM dream_book_biblioteca.biblioteca_tabl');
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription FROM dream_book_biblioteca.biblioteca_tabl');
        $wordsStock=[];

        
        foreach($bookDataAll as $value){
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
            'bookDataAll'=>$bookDataAll,
            'words'=>$words,
            'array'=>$array,
            'wordsStock'=>$wordsStock,
            'book'=> $book,
            // 'bookData'=>$bookData,
            'DreamBooks'=>$DreamBooks,
            'listDreamBooks'=>$listDreamBooks,
            // 'getPuttBooks'=>$putBooks,
            // 'getPuttBooks2'=>$putBooks2,
            // 'getPuttBooks3'=>$putBooks3,
            // 'getPuttBooks4'=>$putBooks4,
        ];
        return view("User.dreamBooksAll",$params);
    }
}
