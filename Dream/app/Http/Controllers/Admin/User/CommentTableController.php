<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\comment_table;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentTableController extends Controller
{
     // модерация коментов
     public function infoCommentUser(){
        $comment_table=comment_table::with(['userCommit' => function ($query) {
            $query->orderBy('name', 'asc');}])
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
            $comment_table=comment_table::where('idcomment_table',$idcomment_table)->first();
            $comment_table->comment_status=1;
            $comment_table->save();
        } else if ($_POST["action"] == "Разблокировать") {
            $comment_table=comment_table::where('idcomment_table',$idcomment_table)->first();
            $comment_table->comment_status=0;
            $comment_table->save();
        }
        return redirect()->route('infoCommentUser');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment_table  $comment_table
     * @return \Illuminate\Http\Response
     */
    public function show(comment_table $comment_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment_table  $comment_table
     * @return \Illuminate\Http\Response
     */
    public function edit(comment_table $comment_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment_table  $comment_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment_table $comment_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment_table  $comment_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment_table $comment_table)
    {
        //
    }
}
