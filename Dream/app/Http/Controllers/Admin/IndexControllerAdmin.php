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

// // модерация снов пользователя
//     public function infoDreamUser(){
//         $dream_user_table=DB::table('dream_user_table')
//                             ->join('users','dream_user_Id_User','id')
//                             ->select('*')
//                             ->orderBy('name')
//                             ->get();

//         $params=[
//             'dream_user_table'=>$dream_user_table,
//         ];
//         return view("Admin.adminEditDreamUser",$params);
//     }


//     public function editDreamUser(){
//         if (!is_null(request()->input('id_dream_user_table'))) {
//                 $id_dream_user_table=request()->input('id_dream_user_table');
//        } 

//        if ($_POST["action"] =="Заблокировать") {
//             DB::table('dream_user_table')
//                 ->where('id_dream_user_table',$id_dream_user_table)
//                 ->update([
//                 'dream_user_access' =>2,
//                 ]);
//         } else if ($_POST["action"] == "Удалить") {
//             DB::table('dream_user_table')
//                 ->where('id_dream_user_table',$id_dream_user_table)
//                 ->update([
//                 'dream_user_access' =>3,
//                 ]);
//         }
//         return redirect()->route('infoDreamUser');
//     }

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
