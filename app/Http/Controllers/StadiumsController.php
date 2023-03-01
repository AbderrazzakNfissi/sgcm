<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StadiumsController extends Controller
{
    //
    public function stadiums(){
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/STADIUMS';
        $html = file_get_contents($url);
        $stadiums = json_decode($html);

        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html = file_get_contents($url);
        $fifa = json_decode($html);

        return view('stadiums',[
            'stadiums' => $stadiums->items,
            'fifa'=> $fifa->items[0],
            'isStads'=>'yes'
        ]);
    }

    public function stadium($id){
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/STADIUMS/'.$id;
        $html = file_get_contents($url);
        $stadiums = json_decode($html);

        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html = file_get_contents($url);
        $fifa = json_decode($html);


        return view('stadium',[
            'stadium' => $stadiums->items[0],
            'fifa'=> $fifa->items[0],
            'isStads'=>'yes'
        ]);
    }
}
