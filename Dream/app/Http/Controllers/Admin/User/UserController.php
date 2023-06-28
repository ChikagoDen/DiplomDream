<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // редакт юзер
    public function infoUserAdmin()
    {
        $user=User::all();
        $params=['user'=>$user,];
        return view("Admin.adminEditUser",$params);
    }

    public function editUserAdmin(UpdateUserRequest $request)
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
            $user=user::where('id',$id)->first();
            $user->name = $name;
            $user->email = $email;
            $user->is_admin = $is_admin;
            $user->status = $status;
            $user->save();

         } else if ($_POST["action"] == "Удалить") {
            $user=user::where('id',$id)->first();
            $user->status = 2;
            $user->save();

        }
        return redirect()->route('infoUserAdmin');        
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
