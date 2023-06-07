<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksAllController extends Controller
{
    public function showAll(){
        $abc = $this->array;
        $bookDataAll=DB::table('dreambook')
                    ->join('biblioteca_tabl','idDream','id_biblioteca_tabl')
                    ->select('*')
                    ->orderBy('DreamBookWord')
                    ->get();
    
        
        // $bookDataAll=DB::select('SELECT DreamBookWord, DreamBookDescription, biblioteca_tabl_name, biblioteca_tabl_author, idDreamBook,LikeCol FROM dream_book_biblioteca.dreambook, dream_book_biblioteca.biblioteca_tabl where dream_book_biblioteca.dreambook.idDream=dream_book_biblioteca.biblioteca_tabl.id_biblioteca_tabl order by DreamBookWord');
        
        
        
        // количество слов в сонниках
        $sumWordCol=count($bookDataAll);
        // $book=request()->input('book');
        // разобратся с сохранением и передачей данных по всему сайту
        // данные всех сонников
        $listDreamBooks=DB::table('biblioteca_tabl')
                            ->select('*')
                            ->get();
        $wordsStock=[];
        foreach($bookDataAll as $value){
            // первая буква в слове

            $temp=ltrim($value->DreamBookWord);
            $temp=mb_substr(mb_strtoupper($temp), 0, 1, "UTF-8");
            
            for ($i=0; $i < count($abc); $i++) { 
                $temp2=$abc[$i];
                if (strcmp($temp,$temp2)==0) {
                   $wordsStock[$temp2][]=$value;
                }
            }
        } ;

        $params=[
            'sumWordCol'=>$sumWordCol,
            'wordsStock'=>$wordsStock,
            'listDreamBooks'=>$listDreamBooks,
        ];
        return view("User.dreamBooksAll",$params);
    }
}
