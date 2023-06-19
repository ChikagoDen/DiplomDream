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
    // добавить сонник
    public function addDreamBook(){
        return view("Admin.adminAddDream");
    } 
    // 1) добавить файл
    public function addFile(Request $request)
    {   
        if($request->hasFile('file')){
            $file=$request->file('file');
            // сохраняем файл у себя
            $file->storeAs("DreamBooks",$file->getClientOriginalName(),'public');
            // записываем путь до файла
            $filename =public_path().'\\storage\\DreamBooks\\'.$file->getClientOriginalName();
        //    читаем файл
            // $text = file_get_contents($filename);
            // создаем массив из строк с разделителем F
            // $lines = explode("F", $text);
            $params=[
                // 'lines'=>$lines,
                'filename'=>$filename,
            ];
            return view("Admin.adminAddDream",$params);
        }
        return redirect()->back();
    }
    // 2) записываем в бд
    public function addBD(){
        $biblioteca_tabl_discription=request()->input('discriptionDreamBook');
        $biblioteca_tabl_comment=request()->input('discriptionDreamBookMy');
        $biblioteca_tabl_author=request()->input('author');
        $filename=request()->input('filePatch');
        $text = file_get_contents($filename);
        $lines = explode("F", $text);
        $biblioteca_tabl_name=$lines[0];
        // вставка начальных данных и получение id
        $id_biblioteca_tabl=DB::table('biblioteca_tabl')
            ->insertGetId([
                'biblioteca_tabl_author'=>$biblioteca_tabl_author,                    
                'biblioteca_tabl_name'=>$biblioteca_tabl_name,
                'biblioteca_tabl_discription'=> $biblioteca_tabl_discription, 
                'biblioteca_tabl_comment'=>$biblioteca_tabl_comment, 
            ],'id_biblioteca_tabl'); 
        // избавляемся от "\r", "\n"
        $buffer= str_replace(array("\r", "\n","\"\""), '', $lines);
        foreach ($buffer as  $value) { 
            $buffer2[]=ltrim($value);
        }
            for ($i=1; $i < count($buffer2)-1; $i++) { 
                $tmp['DreamBookWord']=$buffer2[$i];
                $tmp['DreamBookDescription']=$buffer2[$i+1];
                $tmp['idDream']=$id_biblioteca_tabl;
            // вставляем слова и определения
                if ($i%2) {  
                    DB::table('dreambook')
                        ->insert([
                            'DreamBookWord'=>$tmp['DreamBookWord'],
                            'DreamBookDescription'=>$tmp['DreamBookDescription'],
                            'idDream'=>$tmp['idDream']
                        ]);   
                }
            }
    
        // $dreamBooks=DB::table('biblioteca_tabl')
        //     ->select('*')
        //     ->get();
        // $params=[
        //     'dreamBooks'=>$dreamBooks,
        // ];
        return redirect()->route('infoDreamModeration');
        // return view("Admin.adminEditDreamBook",$params);
    }
// редактирование сонника
    public function infoDreamModeration(){
        $dreamBooks=DB::table('biblioteca_tabl')
            ->select('*')
            ->get();
        $params=[
            'dreamBooks'=>$dreamBooks,
        ];
        return view("Admin.adminEditDreamBook",$params);
    }

    public function editDreamBook(){
        if (!is_null(request()->input('id_biblioteca_tabl'))) {
            $id_biblioteca_tabl=request()->input('id_biblioteca_tabl');
       }
         else {
            return redirect()->back();}
        
        if (!is_null(request()->input('biblioteca_tabl_word_col'))) {
            $biblioteca_tabl_word_col=request()->input('biblioteca_tabl_word_col');
       }
         else {
            return redirect()->back();} 

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
        } 
         else if ($_POST["action"] == "Удалить") {
            DB::table('biblioteca_tabl')->where('id_biblioteca_tabl',$id_biblioteca_tabl)->delete();
         } 
         else if ($_POST["action"] == "Перейти редактировать слова и значения в соннике") {
            $dreamBookWords=DB::table('dreambook')
                            ->select('*')
                            ->where('idDream',$id_biblioteca_tabl)
                            ->get();
            $params=[
                'dreamBookWords'=>$dreamBookWords,
                'biblioteca_tabl_name'=>$biblioteca_tabl_name,
                'biblioteca_tabl_word_col'=>$biblioteca_tabl_word_col,            
            ];
            return view("Admin.adminEditWordDreamBook",$params);
         }
        return redirect()->route('infoDreamModeration');
    }

// редакт слова и значения

    public function editWordDreamBook(){
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
        } 
         else if ($_POST["action"] == "Удалить") {
            DB::table('dreambook')->where('idDreamBook',$idDreamBook)->delete();
        }    
        $dreamBookWords=DB::table('dreambook')
                            ->select('*')
                            ->where('idDream',$idDream)
                            ->get();
        $params=[
            'dreamBookWords'=>$dreamBookWords,
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
        return redirect()->route('infoUserAdmin');        
    }
// модерация снов пользователя
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
                ->update(['comment_status' =>1,]);
        } else if ($_POST["action"] == "Разблокировать") {
            DB::table('comment_table')
            ->where('idcomment_table',$idcomment_table)
            ->update(['comment_status' =>0,]);
        }
        return redirect()->route('infoCommentUser');
    }

}
