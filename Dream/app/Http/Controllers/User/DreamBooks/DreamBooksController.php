<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksController extends Controller
{
    public function show(){
        $abc = $this->array;
        $book=request()->input('book');
        if ($book>=1000000) {
            return redirect()->route('infoDreamBooksAll');
        }
        elseif ($book<=-1) {
            return redirect()->route('dreamBooksUserAll');
        }
        // добавление количества просмотров
        if (isset($_GET['words'])) {
            $words = $_GET['words'];
            if (!is_numeric($words)) {
                DB::update('UPDATE `dream_book_biblioteca`.`dreambook` SET `LikeCol` = `LikeCol`+1 WHERE `DreamBookWord` =?',[$words]);
            }
            // редерикт на правила!!!!
            else $words=0;
        }
        else $words=0;
        // разобратся с сохранением и передачей данных по всему сайту
        // данные всех сонников
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription, biblioteca_tabl_word_col FROM dream_book_biblioteca.biblioteca_tabl');

        // выбор слов из сонника
        $bookData=DB::select('SELECT * FROM dream_book_biblioteca.dreambook where idDream=:book', ['book'=>$book+1]);
        $wordsStock=[];
        foreach($bookData as $value){
            $temp=mb_substr(mb_strtoupper($value->DreamBookWord), 0, 1, "UTF-8");
            for ($i=0; $i < count($abc); $i++) { 
                $temp2=$abc[$i];
                if (strcmp($temp,$temp2)==0) {
                   $wordsStock[$temp2][]=$value;
                }
            }
        }

        $params=[
            'wordsStock'=>$wordsStock,
            'listDreamBooks'=>$listDreamBooks,
        ];
        return view("User.dreamBooks",$params);
    }
}
