<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndexControllerAdmin extends Controller
{
    public function index(){
        return view("Admin.adminIndex");
    }
    public function addFile(Request $request)
    {   header('Content-Type: text/html; charset=utf-8');
        if($request->hasFile('word')){
            $word=$request->file('word');
            $word->storeAs("DreamBooks",$word->getClientOriginalName(),'public');
            $filename =public_path().'\\storage\\DreamBooks\\'.$word->getClientOriginalName();
            // dd($filename);
            $text = file_get_contents($filename);
            $lines = explode("F", $text);
            // dd($text);


            $params=[
                'lines'=>$lines,
                'filename'=>$filename,

            ];
            return view("Admin.adminAddDream",$params);

        }
        dd("0");
    }
    public function addBD(){
        // if (is_null(request()->input('nameUser'))) {
        //     return redirect()->back();
        //  }
        $biblioteca_tabl_discription=request()->input('discriptionDreamBook');
        $biblioteca_tabl_comment=request()->input('discriptionDreamBookMy');
        $biblioteca_tabl_author=request()->input('author');
        $filename=request()->input('filePatch');
            $text = file_get_contents($filename);
            $lines = explode("F", $text);
            
        $biblioteca_tabl_name=$lines[0];
        $id_biblioteca_tabl=DB::table('biblioteca_tabl')
                ->insertGetId([
                    'biblioteca_tabl_author'=>$biblioteca_tabl_author,                    
                    'biblioteca_tabl_name'=>$biblioteca_tabl_name,
                    'biblioteca_tabl_discription'=> $biblioteca_tabl_discription, 
                    'biblioteca_tabl_comment'=>$biblioteca_tabl_comment, 
                ],'id_biblioteca_tabl'); 
           
        $buffer = str_replace(array("\r", "\n"), '', $lines);

        for ($i=1; $i < count($buffer)-1; $i++) { 
            $tmp['DreamBookWord']=$buffer[$i];
            $tmp['DreamBookDescription']=$buffer[$i+1];
            $tmp['idDream']=$id_biblioteca_tabl;
            if ($i%2) {  
                 DB::table('dreambook')
                    ->insert([
                        'DreamBookWord'=>$tmp['DreamBookWord'],
                        'DreamBookDescription'=>$tmp['DreamBookDescription'],
                        'idDream'=>$tmp['idDream']
                    ]);   
            }
        }
    
            $dreamBooks=DB::table('biblioteca_tabl')
                ->select('*')
                ->get();
            $params=[
                'dreamBooks'=>$dreamBooks,
            ];
            return view("Admin.adminEditDreamBook",$params);
    }
// редакт соник
    public function editDreamBook(){
        $dreamBooks=DB::table('biblioteca_tabl')
            ->select('*')
            ->get();
        $params=[
            'dreamBooks'=>$dreamBooks,
        ];
        return view("Admin.adminEditDreamBook",$params);
    }
    public function editDreamBookedit(){
        if (!is_null(request()->input('id_biblioteca_tabl'))) {
                $id_biblioteca_tabl=request()->input('id_biblioteca_tabl');
       } 
        if (!is_null(request()->input('biblioteca_tabl_word_col'))) {
                $biblioteca_tabl_word_col=request()->input('biblioteca_tabl_word_col');
       }           
        if (!is_null(request()->input('biblioteca_tabl_name'))) {
            $biblioteca_tabl_name=request()->input('biblioteca_tabl_name');
          
       } 
        if (!is_null(request()->input('biblioteca_tabl_discription'))) {
            $biblioteca_tabl_discription=request()->input('biblioteca_tabl_discription');
       }
        if (!is_null(request()->input('biblioteca_tabl_comment'))) {
            $biblioteca_tabl_comment=request()->input('biblioteca_tabl_comment');
       } 
        if (!is_null(request()->input('biblioteca_tabl_author'))) {
            $biblioteca_tabl_author=request()->input('biblioteca_tabl_author');

       }
       if ($_POST["action"] =="Редактировать") {
            DB::table('biblioteca_tabl')
                   ->where('id_biblioteca_tabl',$id_biblioteca_tabl)
                ->update([
                'biblioteca_tabl_discription' =>$biblioteca_tabl_discription,
                'biblioteca_tabl_name'=>$biblioteca_tabl_name,
                'biblioteca_tabl_comment'=> $biblioteca_tabl_comment,
                'biblioteca_tabl_author'=>$biblioteca_tabl_author
                ]);
    } else if ($_POST["action"] == "Удалить") {
        DB::table('biblioteca_tabl')->where('id_biblioteca_tabl',$id_biblioteca_tabl)->delete();
    } 
    else if ($_POST["action"] == "Перейти редактировать сслова и значения") {

        $dreamBooks=DB::table('dreambook')
            ->select('*')
            ->where('idDream',$id_biblioteca_tabl)
            ->get();
        $params=[
            'dreamBooks'=>$dreamBooks,
            'biblioteca_tabl_name'=>$biblioteca_tabl_name,
            'biblioteca_tabl_word_col'=>$biblioteca_tabl_word_col,            
        ];
        return view("Admin.adminEditWordDreamBook",$params);
    }

        $dreamBooks=DB::table('biblioteca_tabl')
            ->select('*')
            ->get();
        $params=[
            'dreamBooks'=>$dreamBooks,

        ];
        return view("Admin.adminEditDreamBook",$params);
    }

// редакт слова

    public function editWordDreamBookedit(){
        if (!is_null(request()->input('idDreamBook'))) {
                $idDreamBook=request()->input('idDreamBook');
       } 
        if (!is_null(request()->input('biblioteca_tabl_name'))) {
                $biblioteca_tabl_name=request()->input('biblioteca_tabl_name');
       }
        if (!is_null(request()->input('biblioteca_tabl_word_col'))) {
            $biblioteca_tabl_word_col=request()->input('biblioteca_tabl_word_col');
       }
        if (!is_null(request()->input('idDream'))) {
                $idDream=request()->input('idDream');
       }       
        if (!is_null(request()->input('DreamBookWord'))) {
                $DreamBookWord=request()->input('DreamBookWord');
       }           
        if (!is_null(request()->input('DreamBookDescription'))) {
            $DreamBookDescription=request()->input('DreamBookDescription');
          
       } 
  
       if ($_POST["action"] =="Редактировать") {
            DB::table('dreambook')
                ->where('idDreamBook',$idDreamBook)
                ->update([
                'DreamBookWord' =>$DreamBookWord,
                'DreamBookDescription'=>$DreamBookDescription,
                ]);
    } else if ($_POST["action"] == "Удалить") {
        DB::table('dreambook')->where('idDreamBook',$idDreamBook)->delete();
    } 


        $dreamBooks=DB::table('dreambook')
            ->select('*')
            ->where('idDream', $idDream)
            ->get();
        $params=[
            'dreamBooks'=>$dreamBooks,
            'biblioteca_tabl_name'=>$biblioteca_tabl_name,
            'biblioteca_tabl_word_col'=>$biblioteca_tabl_word_col,            
        ];
        return view("Admin.adminEditWordDreamBook",$params);
    }

    // редакт юзер
    public function infoUserAdmin()
    {

        $user=DB::table('users')
        ->select('*')
        ->get();

            $params=[
            'user'=>$user,
        ];
        return view("Admin.adminEditUser",$params);
    }
    // редакт юзер
    public function editUserAdmin()
    {
        if (!is_null(request()->input('id'))) {
            $id=request()->input('id');
   } 
    if (!is_null(request()->input('name'))) {
            $name=request()->input('name');
   }
    if (!is_null(request()->input('email'))) {
        $email=request()->input('email');
   }
    if (!is_null(request()->input('is_admin'))) {
            $is_admin=request()->input('is_admin');
   }           
    if (!is_null(request()->input('status'))) {
            $status=request()->input('status');
   } 
   if ($_POST["action"] =="Редактировать") {
        DB::table('users')
            ->where('id',$id)
            ->update([
            'name' =>$name,
            'email'=>$email,
            'is_admin'=>$is_admin,
            'status'=>$status,
            ]);
    } else if ($_POST["action"] == "Удалить") {
        DB::table('users')
        ->where('id',$id)
        ->update([
            'status'=>2,
        ]);
    }

        // $user=DB::table('users')
        // ->select('*')
        // ->get();

        //     $params=[
        //     'user'=>$user,
        // ];
        return redirect()->route('infoUserAdmin');        
        // return view("Admin.adminEditUser",$params);
    }

    public function infoDreamUser(){
        $dream_user_table=DB::table('dream_user_table')
        ->join('users','dream_user_Id_User','id')
            ->select('*')
            ->orderBy('name')
            ->get();

            $params=[
            'dream_user_table'=>$dream_user_table,
        ];
        return view("Admin.adminEditDreamUser",$params);
    }


    public function editDreamUser(){
        if (!is_null(request()->input('id_dream_user_table'))) {
                $id_dream_user_table=request()->input('id_dream_user_table');
       } 

       if ($_POST["action"] =="Заблокировать") {
            DB::table('dream_user_table')
                ->where('id_dream_user_table',$id_dream_user_table)
                ->update([
                'dream_user_access' =>2,
                ]);
        } else if ($_POST["action"] == "Удалить") {
            DB::table('dream_user_table')
                ->where('id_dream_user_table',$id_dream_user_table)
                ->update([
                'dream_user_access' =>3,
                ]);
        }
        return redirect()->route('infoDreamUser');
    }

    // модерация коментов
    public function infoCommentUser(){
        $comment_table=DB::table('comment_table')
        ->join('users','comment_id_user','id')
            ->select('*')
            ->orderBy('name')
            ->get();

            $params=[
            'comment_table'=>$comment_table,
        ];
        return view("Admin.adminEditCommentUser",$params);
    }


    public function editCommentUser(){
        if (!is_null(request()->input('idcomment_table'))) {
                $idcomment_table=request()->input('idcomment_table');
       } 

       if ($_POST["action"] =="Заблокировать") {
            DB::table('comment_table')
                ->where('idcomment_table',$idcomment_table)
                ->update([
                'comment_status' =>1,
                ]);
        } else if ($_POST["action"] == "Разблокировать") {
            DB::table('comment_table')
            ->where('idcomment_table',$idcomment_table)
            ->update([
            'comment_status' =>0,
                ]);
        }
        return redirect()->route('infoCommentUser');
    }


}
