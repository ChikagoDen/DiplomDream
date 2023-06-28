<?php

namespace App\Http\Controllers\Admin\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\biblioteca_tabl as RequestsBiblioteca_tabl;
use Illuminate\Http\Request;
use App\Models\biblioteca_tabl;
use App\Models\dreambook;
use Illuminate\Support\Facades\DB;

class BibliotecaTablController extends Controller
{
     // добавить сонник (форма для добавления файла с сонником)
    public function createDreamBook(){
        return view("Admin.adminAddDream");
    } 
     // 1) добавить файл
    public function addFile(Request $request){   
        $this->validate($request,['fileForm'=>'bail|required|file|mimes:txt|max:2048',]);
        if($request->hasFile('fileForm')){
            $file=$request->file('fileForm');
            // сохраняем файл у себя
            $file->storeAs("DreamBooks",$file->getClientOriginalName(),'public');
            // записываем путь до файла
            $filename =public_path().'\\storage\\DreamBooks\\'.$file->getClientOriginalName();
            $params=['filename'=>$filename, ];
            return view("Admin.adminAddDream",$params);
        }
        return redirect()->back();
    }
     // 2) записываем в бд
    public function addBD(RequestsBiblioteca_tabl $request){
        $biblioteca_tabl=new biblioteca_tabl;        
        $filename=request()->input('filePatch');
        $text = file_get_contents($filename);
        $lines = explode("F", $text);
        $biblioteca_tabl_name=$lines[0];
        // вставка начальных данных и получение id
        $biblioteca_tabl->biblioteca_tabl_discription=request()->input('discriptionDreamBook');
        $biblioteca_tabl->biblioteca_tabl_author=request()->input('biblioteca_tabl_author');
        $biblioteca_tabl->biblioteca_tabl_name=$biblioteca_tabl_name;
        $biblioteca_tabl->biblioteca_tabl_comment=request()->input('discriptionDreamBookMy');
        $biblioteca_tabl->save();
        $id=$biblioteca_tabl->id_biblioteca_tabl;
        // избавляемся от "\r", "\n"
        $buffer= str_replace(array("\r", "\n","\"\""), '', $lines);
        foreach ($buffer as  $value) { 
            $buffer2[]=ltrim($value);
        }
        for ($i=1; $i < count($buffer2)-1; $i++) { 
            $tmp['DreamBookWord']=$buffer2[$i];
            $tmp['DreamBookDescription']=$buffer2[$i+1];
            $tmp['idDream']=$id;
            // вставляем слова и определения
            if ($i%2) { 
                $dreambook=new dreambook;
                $dreambook->DreamBookWord=$tmp['DreamBookWord'];
                $dreambook->DreamBookDescription=$tmp['DreamBookDescription'];
                $dreambook->idDream=$tmp['idDream'];
                $dreambook->save();
            }
        }
        return redirect()->route('infoDreamModeration');
    }
}
