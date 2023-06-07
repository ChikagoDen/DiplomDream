<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{

    public function index(){
        $listDreamBooks=DB::table('biblioteca_tabl')
                        ->select("*")
                        ->get();
        $params=[
            'listDreamBooks'=>$listDreamBooks,
        ];
        return view('dashboard', $params);
    }
}
