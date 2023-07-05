<?php

namespace App\Http\Controllers\Admin\Library;

use App\Models\dreambook;
use App\Http\Controllers\Controller;
use App\Http\Requests\biblioteca_tabl;
use App\Http\Requests\UpdatedreambookRequest;
use App\Models\biblioteca_tabl as ModelsBiblioteca_tabl;
use Illuminate\Support\Facades\DB;

class DreambookController extends Controller
{
    public function infoDreamModeration(){
        return view("Admin.adminEditDreamBook");
    }

    public function editDreamBook(biblioteca_tabl $request ){
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
       } else{
         $biblioteca_tabl_name=null;
       }


        if (!is_null(request()->input('biblioteca_tabl_discription'))) {
            $biblioteca_tabl_discription=request()->input('biblioteca_tabl_discription');
       }else{
        $biblioteca_tabl_discription=null;
       }

        if (!is_null(request()->input('biblioteca_tabl_comment'))) {
            $biblioteca_tabl_comment=request()->input('biblioteca_tabl_comment');
       }else{
        $biblioteca_tabl_comment=null;
       }

        if (!is_null(request()->input('biblioteca_tabl_author'))) {
            $biblioteca_tabl_author=request()->input('biblioteca_tabl_author');
       }

       if ($_POST["action"] =="Редактировать") {
            $biblioteca_tabl=ModelsBiblioteca_tabl::where('id_biblioteca_tabl',$id_biblioteca_tabl)->first();
            $biblioteca_tabl->biblioteca_tabl_discription=$biblioteca_tabl_discription;
            $biblioteca_tabl->biblioteca_tabl_author=$biblioteca_tabl_author;
            $biblioteca_tabl->biblioteca_tabl_name=$biblioteca_tabl_name;
            $biblioteca_tabl->biblioteca_tabl_comment= $biblioteca_tabl_comment;
            $biblioteca_tabl->save();
        } 
         else if ($_POST["action"] == "Удалить") {
            $biblioteca_tabl=ModelsBiblioteca_tabl::where('id_biblioteca_tabl',$id_biblioteca_tabl)->first();
            $biblioteca_tabl->delete();
         } 
         else if ($_POST["action"] == "Перейти редактировать слова и значения в соннике") {
            
            $dreamBookWords=dreambook::where('idDream',$id_biblioteca_tabl)->get();
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
            $dreambook=dreambook::where('idDreamBook',$idDreamBook)->first();
            $dreambook->DreamBookWord=$DreamBookWord;
            $dreambook->DreamBookDescription=$DreamBookDescription;
            $dreambook->save();
        } 
         else if ($_POST["action"] == "Удалить") {
            $dreambook=dreambook::where('idDreamBook',$idDreamBook)->first(); 
            $dreambook->delete();           
        }
        $dreamBookWords=dreambook::where('idDream',$idDream)->get();    
        $params=[
            'dreamBookWords'=>$dreamBookWords,
            'biblioteca_tabl_name'=>$biblioteca_tabl_name,
            'biblioteca_tabl_word_col'=>$biblioteca_tabl_word_col,            
        ];
            return view("Admin.adminEditWordDreamBook",$params);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dreambook  $dreambook
     * @return \Illuminate\Http\Response
     */
    public function show(dreambook $dreambook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dreambook  $dreambook
     * @return \Illuminate\Http\Response
     */
    public function edit(dreambook $dreambook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedreambookRequest  $request
     * @param  \App\Models\dreambook  $dreambook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedreambookRequest $request, dreambook $dreambook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dreambook  $dreambook
     * @return \Illuminate\Http\Response
     */
    public function destroy(dreambook $dreambook)
    {
        //
    }
}
