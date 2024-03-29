<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use App\Models\dreambook;
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
                dreambook::where("DreamBookWord", "LIKE",$words)->increment("LikeCol");
            }
            else return redirect()->back();
        }
            // выбор слов из сонника
        $bookData=dreambook::with('DreambookBiblioteca_tabl')->where('idDream',$book)->get();    
        // $bookData=DB::table('dreambook')
        //             ->join('biblioteca_tabl','id_biblioteca_tabl','idDream')
        //             ->select('*')
        //             ->where('idDream',$book)
        //             ->get();
                     
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
            'bookData'=>$bookData,
        ];
        return view("User.dreamBooks",$params);
    }
}
