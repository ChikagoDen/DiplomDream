<?php

namespace App\Http\Controllers\User\DreamBooks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Storedream_user_tableRequest;
use App\Models\dream_user_table;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DreamBooksMyController extends Controller
{
    public function index(){
        if (!empty($_GET)) {
            // опублтковать сон
            if (!empty($_GET['statusShow'])) {
                $idDream = $_GET['statusShow'];
                $dream_user_table=dream_user_table::where('id_dream_user_table',$idDream)->first();
                $dream_user_table->dream_user_access=0;
                $dream_user_table->save();
            }
            // снять с публикации
            elseif(!empty($_GET['statusClose'])){
                $idDream = $_GET['statusClose'];
                $dream_user_table=dream_user_table::where('id_dream_user_table',$idDream)->first();
                $dream_user_table->dream_user_access=1;
                $dream_user_table->save();                
            }
            // удалить сон
            elseif(!empty($_GET['statusDelete'])){
                $idDream = $_GET['statusDelete'];
                $dream_user_table=dream_user_table::where('id_dream_user_table',$idDream)->first();
                $dream_user_table->dream_user_access=3;
                $dream_user_table->save();
            }
            else return redirect()->back();
        }
        $id=Auth()->id();
        $dataDremMy=dream_user_table::where('dream_user_Id_User',$id)
                                    ->orderBy('dream_user_date', 'desc')
                                    ->get();        
        $params=[
            'dataDremMy'=>$dataDremMy,
        ];
        return view("User.dreamBooksMy",$params);         
    }
    public function addDream(Storedream_user_tableRequest $request){

        // запись сна
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
        sleep(5);
        $dream_user_tableTemp=dream_user_table::orderByDesc('id_dream_user_table')->limit(1)->get();
        if (!isset($dream_user_tableTemp[0])) {
            $dream_user_table=new dream_user_table;
            $dream_user_table->dream_user_title=$dream_user_title;
            $dream_user_table->dream_user_Id_User=number_format($id);        
            $dream_user_table->dream_user_discription=$dream_user_discription;
            $dream_user_table->save(); 
        }
        else{
            $sim = similar_text($dream_user_tableTemp[0]->dream_user_discription, $dream_user_discription,$percent);
            if ($sim==0) {
                $dream_user_table=new dream_user_table;
                $dream_user_table->dream_user_title=$dream_user_title;
                $dream_user_table->dream_user_Id_User=number_format($id);        
                $dream_user_table->dream_user_discription=$dream_user_discription;
                $dream_user_table->save(); 
            } 
            else {
                return redirect()->back();
            }
        }


        return redirect()->route('dreamBooksUser');
    }
    public function updateName(){
        // изменение имени
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
        $UserTemp=User::all();
        foreach  ($UserTemp as $key => $value) {

            if (strcasecmp($value->name,$newName)==0) {
                return redirect()->back();
            }
             else {
                $User=User::where('id',$id)->first(); 
                $User->name=$newName;
                $User->save();     
            }
        } 
        return redirect()->route('dreamBooksUser');
    }        
}
