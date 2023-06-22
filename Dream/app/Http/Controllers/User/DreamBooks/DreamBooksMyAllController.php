<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksMyAllController extends Controller
{
    public function index(){
        // добавление количества просмотров
        if (isset($_GET['idComent'])) {
            $idComent = $_GET['idComent'];

            if (is_numeric($idComent)) {
                DB::table('comment_table')
                    ->where('idcomment_table', '=', $idComent)
                    ->increment('comment_like');
            }
            else return redirect()->back();
        }
        if (isset($_GET['comentId'])) {
            $idComent = $_GET['comentId'];

            if (is_numeric($idComent)) {
                DB::table('comment_table')
                    ->where('idcomment_table', '=', $idComent)
                    ->decrement('comment_like');
            }
            else return redirect()->back();
        }
        
        $listDreamBooks=DB::table('biblioteca_tabl')
                            ->select('*')
                            ->get();


        // все по коментам
        $dataALLComent=DB::table("comment_table")
                        ->join("dream_user_table","comment_id_dream","=","id_dream_user_table")
                        ->join("users","comment_id_user","=","id")
                        ->select("idcomment_table","comment_id_dream","dream_user_title","dream_user_discription","comment_id_user",
                                "name","comment_discription","comment_nesting_level","comment_date","comment_id_user_answer","comment_status","comment_like")
                        ->orderByDesc("idcomment_table")
                        ->where("comment_status","!=",1) 
                        ->get();
        // $dataALLComent=DB::select('SELECT idcomment_table,
        // comment_id_dream, dream_user_title, dream_user_discription,
        // comment_id_user, name, comment_discription, comment_nesting_level,
        // comment_date, comment_id_user_answer,comment_status,comment_like
        //  FROM dream_book_biblioteca.comment_table,dream_user_table,users where comment_id_dream=id_dream_user_table And comment_id_user=id   order by idcomment_table desc');

        // все сны
        $AllDream=DB::table('dream_user_table')
                    ->join('users',"dream_user_Id_User","=","users.id")        
                    ->select('id_dream_user_table',
                    'dream_user_title','dream_user_discription','dream_user_Id_User','id','name','dream_user_date','dream_user_coment_col')
                    ->orderByDesc("dream_user_date")
                    ->where("dream_user_access","=",1)
                    ->get();
        // $AllDream=Db::select('SELECT id_dream_user_table,
        // dream_user_title,dream_user_discription,dream_user_Id_User,dream_user_access,id,name,dream_user_date,dream_user_coment_col
        //  FROM dream_book_biblioteca.dream_user_table, users where dream_user_Id_User=id order by dream_user_date desc;');
        $params=[
            'AllDream'=>$AllDream,
            'listDreamBooks'=>$listDreamBooks,
            'dataALLComent'=>$dataALLComent,
        ];
       
        return view("User.dreamBooksMyAll",$params);
    }

    public function showDreamUser(){
        if (is_null(request()->input('nameUser'))) {
           return redirect()->back();
        }
        else{
              $idUser=request()->input('nameUser');
        }

        // добавление количества просмотров
        if (isset($_GET['idComent'])) {
            $idComent = $_GET['idComent'];

            if (is_numeric($idComent)) {
                DB::table('dream_book_biblioteca.comment_table')
                    ->where('idcomment_table', '=', $idComent)
                    ->increment('comment_like');
            }
            else return redirect()->back();
        }
        if (isset($_GET['comentId'])) {
            $idComent = $_GET['comentId'];

            if (is_numeric($idComent)) {
                DB::table('dream_book_biblioteca.comment_table')
                    ->where('idcomment_table', '=', $idComent)
                    ->decrement('comment_like');
            }
            else return redirect()->back();
        }
        
        $listDreamBooks=DB::table('biblioteca_tabl')
                            ->select('*')
                            ->get();

        // все по коментам
        $dataALLComent=DB::table("dream_book_biblioteca.comment_table")
                        ->join("dream_book_biblioteca.dream_user_table","comment_id_dream","=","id_dream_user_table")
                        ->join("dream_book_biblioteca.users","comment_id_user","=","id")
                        ->select("idcomment_table","comment_id_dream","dream_user_title","dream_user_discription","comment_id_user",
                                "name","comment_discription","comment_nesting_level","comment_date","comment_id_user_answer","comment_status","comment_like")
                        ->orderByDesc("idcomment_table")
                        ->where("comment_status","!=",1) 
                        ->get();
        // $dataALLComent=DB::select('SELECT idcomment_table as Ncoment,
        // comment_id_dream as Nsna, dream_user_title as TitlSna, dream_user_discription as opisSna,
        // comment_id_user as NktoComentit, name, comment_discription as textComent, comment_nesting_level as levelComent,
        // comment_date as dataComenta, comment_id_user_answer as NKomuOtvet,comment_status,comment_like
        //  FROM dream_book_biblioteca.comment_table,dream_user_table,users where comment_id_dream=id_dream_user_table And comment_id_user=id   order by idcomment_table desc');

        // все сны
        
        $AllDream=DB::table('dream_book_biblioteca.dream_user_table')
                    ->join('users',"dream_user_Id_User","=","users.id")        
                    ->select('id_dream_user_table',
                            'dream_user_title','dream_user_discription','dream_user_Id_User','id','name','dream_user_date','dream_user_coment_col')
                    ->orderByDesc("dream_user_date")
                    ->where("dream_user_access","=",1)
                    ->where("dream_user_Id_User",$idUser)
                    ->get();
        $params=[
            'AllDream'=>$AllDream,
            'listDreamBooks'=>$listDreamBooks,
            'dataALLComent'=>$dataALLComent,
        ];
        return view("User.dreamBooksPublish",$params);
    }


    public function coment(){
        
        if (is_null(request()->input('puth'))) {
             $puth=2;
        }
        else {
            $puth=request()->input('puth');
            
        } 
        // запись комента
        if (is_null(request()->input('descriptionDreamComent'))) {
            return redirect()->back();
        } 
        elseif (number_format(request()->input('commentLevel'))==2) {
            DB::table('dream_book_biblioteca.comment_table')
                ->insert([
                    'comment_id_dream' =>number_format(request()->input('dreamName')),
                    'comment_id_user' => number_format(request()->input('userName')),
                    'comment_discription' => request()->input('descriptionDreamComent'),
                    'comment_nesting_level'=>2,
                    'comment_id_user_answer'=>number_format(request()->input('commentId'))
                ]); 
        } 
        else{            
            DB::table('dream_book_biblioteca.comment_table')
                ->insert([
                    'comment_id_dream' =>number_format(request()->input('dreamName')),
                    'comment_id_user' => number_format(request()->input('userName')),
                    'comment_discription' => request()->input('descriptionDreamComent'),
                ]); 
        }
        
        
        
        $listDreamBooks=DB::table('biblioteca_tabl')
                            ->select('*')
                            ->get();

        // все по коментам
        $dataALLComent=DB::table("dream_book_biblioteca.comment_table")
                        ->join("dream_book_biblioteca.dream_user_table","comment_id_dream","=","id_dream_user_table")
                        ->join("dream_book_biblioteca.users","comment_id_user","=","id")
                        ->select("idcomment_table","comment_id_dream","dream_user_title","dream_user_discription","comment_id_user",
                                "name","comment_discription","comment_nesting_level","comment_date","comment_id_user_answer","comment_status","comment_like")
                        ->orderByDesc("idcomment_table")
                        ->where("comment_status","!=",1) 
                        ->get();

        // $dataALLComent=DB::select('SELECT idcomment_table as Ncoment,
        // comment_id_dream as Nsna, dream_user_title as TitlSna, dream_user_discription as opisSna,
        // comment_id_user as NktoComentit, name, comment_discription as textComent, comment_nesting_level as levelComent,
        // comment_date as dataComenta, comment_id_user_answer as NKomuOtvet,comment_status,comment_like
        //  FROM dream_book_biblioteca.comment_table,dream_user_table,users where comment_id_dream=id_dream_user_table And comment_id_user=id   order by idcomment_table desc');
        // все сны
        $AllDream=DB::table('dream_book_biblioteca.dream_user_table')
                    ->join('users',"dream_user_Id_User","=","users.id")        
                    ->select('id_dream_user_table',
                      'dream_user_title','dream_user_discription','dream_user_Id_User','id','name','dream_user_date','dream_user_coment_col')
                    ->orderByDesc("dream_user_date")
                    ->where("dream_user_access","=",1)
                    ->get();
        $params=[
            'AllDream'=>$AllDream,
            // 'listDreamBooks'=>$listDreamBooks,
            'dataALLComent'=>$dataALLComent,
        ];
        if ($puth==1) {
            return view("User.dreamBooksMyAll",$params);
       } else {
        // return redirect()->route('dreamBooksUserAllPublished');
        return view("User.dreamBooksPublish",$params);
       }
    }

}
