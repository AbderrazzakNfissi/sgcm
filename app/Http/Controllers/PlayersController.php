<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    //
    public function player(){
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);
        $name = 'Azzedine ';
        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/player/".$name;
        $html = file_get_contents($url);
        $player = json_decode($html)->items[0];
        $items = $player->items;
        
        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/teams/".$player->equipe_id;
        $html = file_get_contents($url);
        $team = json_decode($html)->items[0];

        if(count($items)!=0){
         //dd($team);
         return view('player',[
        'fifa' => $fifa->items[0],
        'isResult'=>'true',
        'team'=>$team,
        'player'=>$player
        ]);
        }
       
    }
}
