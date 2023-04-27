<?php declare(strict_types = 1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index(){
    //     $putBooks=$this->Sonnik();
        
    //     $params=[
    //         'getPuttBooks'=>$putBooks,
    //         'name'=>'Den'
    //     ];
    //    return view("User.homeUser",$params); 
    //    return view("User.userIndex",$params); 
    // }
    public function index(){
        $putBooks=$this->Sonnik2();
        $putBooks2=$this->SonnikSw();
        $putBooks3=$this->Sonnikmy();
        $putBooks4=$this->SonnikmyALL();
        $params=[
            'getPuttBooks'=>$putBooks,
            'getPuttBooks2'=>$putBooks2,
            'getPuttBooks3'=>$putBooks3,
            'getPuttBooks4'=>$putBooks4,
        ];
        return view("User.dreamBooksMyAll",$params);
        return view("User.dreamBooksMy",$params);         
        return view("User.dreamBooksWords",$params);    
        // return view("User.dreamBooksAll",$params);
        // return view("User.dreamBooks",$params);
       return view("User.homeUser",$params); 
    }

    
    
}
