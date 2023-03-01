<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html = file_get_contents($url);
        $fifa = json_decode($html);
        
        return view('index',[
            'fifa'=>$fifa->items[0]
        ]);
    }
}
