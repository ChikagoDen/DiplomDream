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
                DB::table('dreambook')
                ->where(`DreamBookWord`,$words)
                ->increment(`LikeCol`);
                // DB::table(`dreambook`)
                //     ->where(`DreamBookWord`,$words)
                //     ->update([`LikeCol`=>(`LikeCol`+1)]);
                // DB::update('UPDATE `dream_book_biblioteca`. SET `LikeCol` = `LikeCol`+1 WHERE `DreamBookWord` =?',[$words]);
            }
            else return redirect()->back();
        }
        // else $words=0;
        // разобратся с сохранением и передачей данных по всему сайту
        // данные всех сонников
        $listDreamBooks=DB::table('biblioteca_tabl')
                            ->select('*')
                            ->get();
                        // выбор слов из сонника
        $bookData=DB::table('dreambook')
                    ->join('biblioteca_tabl','id_biblioteca_tabl','idDream')
                    ->select('*')
                    ->where('idDream',$book)
                    ->get();
                     
        $wordsStock=[];
        foreach($bookData as $value){
            // первая буква в слове
            $temp=ltrim($value->DreamBookWord);
            $temp=mb_substr(mb_strtoupper($temp), 0, 1, "UTF-8");
            
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
            'bookData'=>$bookData,
        ];
        return view("User.dreamBooks",$params);
    }
}
