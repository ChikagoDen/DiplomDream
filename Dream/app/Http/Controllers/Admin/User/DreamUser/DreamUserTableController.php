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
    // тут ченить можно сделать?
    public function infoDreamUser(){
// $dream_user_table=User::find(15);
// $dream_user_table->dreamUserTables;
$dream_user_tables=dream_user_table::find(16);
$dream_user_tables->user;

        dd($dream_user_tables);
         $dream_user_table=dream_user_table::addSelect([
            'name'=>User::select('name')->whereColumn('id','dream_user_Id_User')
         ] )->get();
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
