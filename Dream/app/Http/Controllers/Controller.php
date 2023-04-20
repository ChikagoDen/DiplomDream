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
    public function Sonnik2(){
        $boks=[
            [   'title'=>'Сонник  Фрейда',
                'id'=>1,
                'discription'=>'Сонник Фрейда - это книга, в которой австрийский психоаналитик Зигмунд Фрейд описывает свои теории о символическом значении снов и их связи с бессознательным. Он предлагает интерпретировать сны, как отражение подсознательных желаний и конфликтов, которые могут быть связаны с детством и сексуальностью. Фрейд утверждал, что понимание смысла снов может помочь людям понять свои эмоции и проблемы в жизни и дать возможность решить их.'],
            [   'title'=>'Сонник Миллера',
                'id'=>2,
                'discription'=>'Сонник Миллера - это книга, в которой американский писатель Густав Миллер описывает тысячи символов, которые могут встречаться в снах, и предлагает их интерпретацию. Сонник Миллера является одним из наиболее распространенных и широко используемых сонников в мире.                            '],
            [   'title'=>'Сонник Ванги',
                'id'=>3,
                'discription'=>' Сонник Ванги - это книга, в которой болгарская ясновидящая Ванга описывает символы и события, которые могут появиться в снах, и предлагает их интерпретацию.                             ']
        ];

        return $boks;
    }
}
