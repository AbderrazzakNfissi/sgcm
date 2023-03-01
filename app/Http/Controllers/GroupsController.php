<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupsController extends Controller
{
    //
    
    public function groupes(){
        $gr = [1=>"A",2=>"B",3=>"C",4=>"D","5"=>"E",6=>"F",7=>"G",8=>"H",9=>"I",10=>"J",11=>"K"];
        
        $annee = 2022;
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/groups';
        $html = file_get_contents($url);
        $groups = json_decode($html);

        $url1 = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/'.$annee;
        $json1 = file_get_contents($url1);
        $teams1 = json_decode($json1);

        foreach($groups->items as $group){
            $group->groupAlph = $gr[$group->group_];
             foreach($teams1->items as $team){
                if($group->team==$team->nom_equipe){
                    $group->drapeau = $team->drapeau;
                }
             }
        }
        //dd($groups->items);
        return view('groups',[
            'groups' => $groups->items
        ]);

    }

    public function groupe($id){

    }

}
