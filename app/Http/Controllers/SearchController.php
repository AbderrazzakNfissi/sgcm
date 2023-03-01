<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function search(Request $request){
        $data = '';
        $annee= 2022;

      if($request->ajax()){
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/'.$annee;
        $json = file_get_contents($url);
        $teams = json_decode($json);
        foreach($teams->items as $item){
            $data.= $item->nom_equipe.":";
        }
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/players';
        $json = file_get_contents($url);
        $players = json_decode($json);
        foreach($players->items as $item){
            $data.= $item->player.":";
        }
        
      }
      return $data;
    }
}
