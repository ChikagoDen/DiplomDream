<?php

namespace App\Http\Controllers\Admin\User\DreamUser;

use App\Models\dream_user_table;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storedream_user_tableRequest;
use App\Http\Requests\Updatedream_user_tableRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DreamUserTableController extends Controller
{
    // модерация снов пользователя
    // тут ченить можно сделать с полями?
    public function infoDreamUser(){
        // что лучше?
        // $dream_user_table=dream_user_table::all();
        // или   oredr by name 
        $dream_user_table=dream_user_table::with(['user' => function ($query) {
            $query->orderBy('name', 'asc');}])
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
            $dream_user_table=dream_user_table::where('id_dream_user_table',$id_dream_user_table)->first();
            $dream_user_table->dream_user_access=2;
            $dream_user_table->save();
        } else if ($_POST["action"] == "Разблокировать") {
            $dream_user_table=dream_user_table::where('id_dream_user_table',$id_dream_user_table)->first();
            $dream_user_table->dream_user_access=0;
            $dream_user_table->save();
        }
        return redirect()->route('infoDreamUser');
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedream_user_tableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedream_user_tableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dream_user_table  $dream_user_table
     * @return \Illuminate\Http\Response
     */
    public function show(dream_user_table $dream_user_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dream_user_table  $dream_user_table
     * @return \Illuminate\Http\Response
     */
    public function edit(dream_user_table $dream_user_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedream_user_tableRequest  $request
     * @param  \App\Models\dream_user_table  $dream_user_table
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedream_user_tableRequest $request, dream_user_table $dream_user_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dream_user_table  $dream_user_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(dream_user_table $dream_user_table)
    {
        //
    }
}
