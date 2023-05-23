<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{

    public function index(){
        $listDreamBooks=DB::select('SELECT biblioteca_tabl_name,biblioteca_tabl_discription FROM dream_book_biblioteca.biblioteca_tabl');
        $params=[
            'listDreamBooks'=>$listDreamBooks,
            // 'getPuttBooks3'=>$putBooks3,
            // 'getPuttBooks4'=>$putBooks4,
        ];
        return view('dashboard', $params);
        // return view("User.dreamBooksWords",$params);    
        // return view("User.dreamBooksAll",$params);
        // return view("User.dreamBooks",$params);
       return view("User.homeUser", $params); 
    }
}
