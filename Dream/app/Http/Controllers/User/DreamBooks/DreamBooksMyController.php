<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksMyController extends Controller
{
    public function index(){
        if (!empty($_GET)) {
            if (!empty($_GET['statusShow'])) {
                $idDream = $_GET['statusShow'];
                DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('id_dream_user_table',$idDream)
                    ->update(['dream_user_access'=>0]);
            }
            elseif(!empty($_GET['statusClose'])){
                $idDream = $_GET['statusClose'];
                DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('id_dream_user_table',$idDream)
                    ->update(['dream_user_access'=>1]);
            }
            elseif(!empty($_GET['statusDelete'])){
                $idDream = $_GET['statusDelete'];
                DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('id_dream_user_table',$idDream)
                    ->update(['dream_user_access'=>3]);
            }
            else return redirect()->back();
        }
        $listDreamBooks=DB::table('dream_book_biblioteca.biblioteca_tabl')
                        ->select('biblioteca_tabl_name','biblioteca_tabl_discription')
                        ->get();
        $id=Auth()->id();
        $dataDremMy=DB::table('dream_book_biblioteca.dream_user_table')
                    ->where('dream_user_Id_User',$id)
                    ->orderBy('dream_user_date', 'desc')
                    ->get();
                    



        $params=[
            'dataDremMy'=>$dataDremMy,
            'listDreamBooks'=>$listDreamBooks,
        ];
        return view("User.dreamBooksMy",$params);         
    }
    public function addDream(){
        // запись комента
        if (is_null(request()->input('descriptionDream'))) {
            return redirect()->back();
        } 
        else {   
             $dream_user_discription=request()->input('descriptionDream');
        } 
        $id=Auth()->id();
        if (!number_format($id)) {
            return redirect()->back();
        } 
        $dream_user_title=request()->input('titleDream');
        if (is_null($dream_user_title)) {
            $dream_user_title="Мой сон";
        }
                    
        DB::table('dream_book_biblioteca.dream_user_table')
            ->insert([
                        'dream_user_title' =>$dream_user_title,
                        'dream_user_Id_User' => number_format($id),
                        'dream_user_discription' => $dream_user_discription,
            ]); 
        return redirect()->route('dreamBooksUser');
    }
    public function updateName(){
        // запись комента
        if (is_null(request()->input('newName'))) {
            return redirect()->back();
        } 
        else {   
             $newName=request()->input('newName');
        } 
        $id=Auth()->id();
        if (!number_format($id)) {
            return redirect()->back();
        } 
                   
        DB::table('dream_book_biblioteca.users')
            ->where('id',$id)
            ->update(['name'=>$newName]);
        return redirect()->route('dreamBooksUser');
    }        
}
