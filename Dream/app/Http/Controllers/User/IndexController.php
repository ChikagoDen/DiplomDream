<?php declare(strict_types = 1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $listDreamBooks=DB::table('biblioteca_tabl')
                        ->select("*")
                        ->get();
        $params=[
            'listDreamBooks'=>$listDreamBooks,
        ];
       return view("User.homeUser", $params); 
    }
}
