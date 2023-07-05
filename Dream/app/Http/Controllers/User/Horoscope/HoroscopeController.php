<?php

namespace App\Http\Controllers\User\Horoscope;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HoroscopeController extends Controller
{
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
        return view("User.Horoscope.horoscope",$params);
    }
}
