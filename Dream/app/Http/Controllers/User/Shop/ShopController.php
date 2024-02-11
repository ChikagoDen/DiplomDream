<?php

namespace App\Http\Controllers\User\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $categor = $this->category;
        $params=[
            'cat'=>$categor,
        ];
        return view("User.Shop.shop",$params); 
     }
}
