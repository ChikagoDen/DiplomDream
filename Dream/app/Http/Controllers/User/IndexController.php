<?php declare(strict_types = 1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $putBooks=$this->Sonnik();
        $params=[
            'getPuttBooks'=>$putBooks,
            'name'=>'Den'
        ];
       return view("User.homeUser",$params); 
       return view("User.userIndex",$params); 
    }
    
}
