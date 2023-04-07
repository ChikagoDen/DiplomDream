<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Sonnik(){
        $faker=Factory::create();
        $boks=[];
        for ($i=0; $i < 3 ; $i++) { 
            $boks[]=[
                'title'=>$faker->title(),
                'id'=>$i,
                'discription'=>$faker->text()
            ];
        }
        return $boks;

    }
}
