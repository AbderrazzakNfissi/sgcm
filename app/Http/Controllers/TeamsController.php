<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    

    public function allTeams(){
        $annee = 2022;
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/'.$annee;
        $json = file_get_contents($url);
        $teams = json_decode($json);

        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html = file_get_contents($url);
        $fifa = json_decode($html);

        return view('teams',[
            'teams' => $teams->items,
            'fifa' => $fifa->items[0],
            'isteam' => 'yes',
            'isAllTeam' => 'yes'
        ]);
    }

    public function team($id){
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $url1 = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/teams/'.$id;
        $json1 = file_get_contents($url1);
        $teams1 = json_decode($json1);
        $coach_id = $teams1->items[0]->coach_id;
        $annee = 2022;

        $url2 = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/coahes/'.$coach_id;
        $json2 = file_get_contents($url2);
        $coach = json_decode($json2);

        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/players/'.$id;
        $json = file_get_contents($url);
        $players = json_decode($json);
        //dd($teams1->items[0]);
        return view('players',[
            'players' => $players->items,
            'team'=>$teams1->items[0],
            'coach'=>$coach->items[0],
            'fifa' => $fifa->items[0],
            'isteam' => 'yes'
        ]);
    }

    public function statistiques($id){

    }

    public function squad($id){

    }

   

}
