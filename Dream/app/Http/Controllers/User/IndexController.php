<?php declare(strict_types = 1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\biblioteca_tabl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        // $listDreamBooks=biblioteca_tabl::get();     

        // $params=[
        //     'listDreamBooks'=>$listDreamBooks,
        // ];
        // view("layouts.app", $params);
        // return view("User.homeUser")->with($params); 
       return view("User.homeUser"); 
    }
}
