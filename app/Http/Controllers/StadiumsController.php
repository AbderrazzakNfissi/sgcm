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
        return view('stadiums',[
            'stadiums' => $stadiums->items
        ]);
    }

    public function stadium($id){
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/STADIUMS/'.$id;
        $html = file_get_contents($url);
        $stadiums = json_decode($html);
        return view('stadium',[
            'stadium' => $stadiums->items[0]
        ]);
    }
}
