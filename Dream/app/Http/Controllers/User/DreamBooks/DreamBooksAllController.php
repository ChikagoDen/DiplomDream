<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksAllController extends Controller
{
    public function showAll(){
        $bookDataAll=DB::select('SELECT DreamBookWord, DreamBookDescription, biblioteca_tabl_name, biblioteca_tabl_author, idDreamBook,LikeCol FROM dream_book_biblioteca.dreambook, dream_book_biblioteca.biblioteca_tabl where dream_book_biblioteca.dreambook.idDream=dream_book_biblioteca.biblioteca_tabl.id_biblioteca_tabl order by DreamBookWord');
        // количество слов в сонниках
        $sumWordCol=count($bookDataAll);
        $array = $this->array;
        $book=request()->input('book');
        // разобратся с сохранением и передачей данных по всему сайту
        // данные всех сонников
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription, biblioteca_tabl_word_col FROM dream_book_biblioteca.biblioteca_tabl');
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
        $params=[
            'sumWordCol'=>$sumWordCol,
            'wordsStock'=>$wordsStock,
            'listDreamBooks'=>$listDreamBooks,
        ];
        return view("User.dreamBooksAll",$params);
    }
}
