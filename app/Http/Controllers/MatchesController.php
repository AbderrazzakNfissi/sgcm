<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use function PHPUnit\Framework\matches;

class MatchesController extends Controller
{
    //
    public function matches(){
       
        $urlMatches = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matches";
        $htmlMatches = file_get_contents($urlMatches);
        $matches = json_decode($htmlMatches);

        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $teams = json_decode($htmlTeams);
        
         
        foreach($matches->items as $match){
            foreach($teams->items as $team){
                if($match->home_team_id==$team->id){
                    $match->home_drapeau = $team->drapeau;
                }
                if($match->away_team_id==$team->id){
                    $match->away_drapeau = $team->drapeau;
                }
            }
        }
      // dd($matches);
       //dd($matches->items);

       
            return view('matches', [
                'matches' => $matches->items,
                'fifa' => $fifa->items[0],
                'isMatch' => 'yes'
            ]);
       

        
    }

    public function match($id){
        $urlMatch = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matchdetails/".$id;
        $htmlMatch = file_get_contents($urlMatch);
        $match = json_decode($htmlMatch);
       
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);


        $urlMatches = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matches";
        $htmlMatches = file_get_contents($urlMatches);
        $matches = json_decode($htmlMatches);
        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        
        $teams = json_decode($htmlTeams);
        //dd($teams);

        foreach($matches->items as $item){
            foreach($teams->items as $team){
                if($item->home_team_id==$team->id){
                    $item->home_drapeau = $team->drapeau;
                }
                if($item->away_team_id==$team->id){
                    $item->away_drapeau = $team->drapeau;
                }

            }
        }
          //infos Match
        foreach($matches->items as $myMatch){
            if($myMatch->id==$id){
                $infosMatch = $myMatch;
            }
        }

        foreach($match->items as $item){
            
            preg_match("/(\d+)\D+(\d+)/", $item->score,$score);
               $item->home_score = $score[1];
               $item->away_score = $score[2];
            }
        //dd($infosMatch->items);
        //dd($match->items[0]);
        //dd($match->items);
        //dd($match);
        
        return view('match',[
            'infoMatch' => $match->items[0],
            'match' => $infosMatch,
            'isDetailMatch' => 'yes',
            'isMatch' => 'yes',
            'fifa' => $fifa->items[0]
        ]);
    }


    public function search(Request $request){
        $match_or_player_name = ucfirst($request->search);
        
        $urlMatch = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matchbyname/".$match_or_player_name;
        $htmlMatch = file_get_contents($urlMatch);
        $matches = json_decode($htmlMatch);

        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $teams = json_decode($htmlTeams);
        //dd($teams);

        foreach($matches->items as $match){
            foreach($teams->items as $team){
                if($match->home_team_id==$team->id){
                    $match->home_drapeau = $team->drapeau;
                }
                if($match->away_team_id==$team->id){
                    $match->away_drapeau = $team->drapeau;
                }

            }
        }
        //////////////////////////////

        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);
        $name = 'Azzedine ';
        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/player/".$match_or_player_name;
        $html = file_get_contents($url);
        $items = json_decode($html)->items;
        if(count($items)!=0){
        $player = json_decode($html)->items[0];
        $url = "https://apex.oracle.com/pls/apex/learnandlearn/hr/teams/".$player->equipe_id;
        $html = file_get_contents($url);
        $team = json_decode($html)->items[0];
         //dd($team);
         return view('player',[
        'fifa' => $fifa->items[0],
        'isResult'=>'true',
        'team'=>$team,
        'player'=>$player
        ]);
        }else{
            return view('matches', [
                'matches' => $matches->items,
                'fifa' => $fifa->items[0],
                'isMatch' => 'yes'
            ]);
        }
    
    }

    public function searchHomeById($id){        
       
        $urlMatch = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matchHomebyId/".$id;
        $htmlMatch = file_get_contents($urlMatch);
        $matches = json_decode($htmlMatch);

        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $teams = json_decode($htmlTeams);
        //dd($teams);

        foreach($matches->items as $match){
            foreach($teams->items as $team){
                if($match->home_team_id==$team->id){
                    $match->home_drapeau = $team->drapeau;
                }
                if($match->away_team_id==$team->id){
                    $match->away_drapeau = $team->drapeau;
                }

            }
        }
        $id1 = $matches->items[0]->home_team_id;
        $id2 = $matches->items[0]->away_team_id;
        $count1=1;
        $count2=1;
        foreach($matches->items as $item){
            if($item->home_team_id == $id1){
                $count1++;
            }
            if($item->home_team_id == $id2){
                $count2++;
            }
            if($item->away_team_id == $id1){
                $count1++;
            }
            if($item->away_team_id == $id2){
                $count2++;
            }
        }

        if($count1>$count2){
            $drapeau = $matches->items[0]->home_drapeau;
            $team_name = $matches->items[0]->home_team;
        }else{
            $drapeau = $matches->items[0]->away_drapeau;
            $team_name = $matches->items[0]->away_team;
        }
       
       
       
        return view('matches', [
         'matches' => $matches->items,
         'fifa' => $fifa->items[0],
         'isHorA'=>'yes',
         'team_name' => $team_name,
         'drapeau' => $drapeau
        ]);
        
    }

    
    public function searchAwayById($id){        
       
        $urlMatch = "https://apex.oracle.com/pls/apex/learnandlearn/hr/matchAwaybyId/".$id;
        $htmlMatch = file_get_contents($urlMatch);
        $matches = json_decode($htmlMatch);

        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $teams = json_decode($htmlTeams);



        foreach($matches->items as $match){
            foreach($teams->items as $team){
                if($match->home_team_id==$team->id){
                    $match->home_drapeau = $team->drapeau;
                }
                if($match->away_team_id==$team->id){
                    $match->away_drapeau = $team->drapeau;
                }

            }
        }
       
        $id1 = $matches->items[0]->home_team_id;
        $id2 = $matches->items[0]->away_team_id;
        $count1=1;
        $count2=1;
        foreach($matches->items as $item){
            if($item->home_team_id == $id1){
                $count1++;
            }
            if($item->home_team_id == $id2){
                $count2++;
            }
            if($item->away_team_id == $id1){
                $count1++;
            }
            if($item->away_team_id == $id2){
                $count2++;
            }
        }

        if($count1>$count2){
            $drapeau = $matches->items[0]->home_drapeau;
            $team_name = $matches->items[0]->home_team;
        }else{
            $drapeau = $matches->items[0]->away_drapeau;
            $team_name = $matches->items[0]->away_team;
        }
       
        //dd($drapeau,$team_name);
        return view('matches', [
         'matches' => $matches->items,
         'fifa' => $fifa->items[0],
         'isHorA'=>'yes',
         'team_name' => $team_name,
         'drapeau' => $drapeau
        ]);
        
    }

    public function knockout(){
       
        $urlMatches = "https://apex.oracle.com/pls/apex/learnandlearn/hr/knockout";
        $htmlMatches = file_get_contents($urlMatches);
        $matches = json_decode($htmlMatches);

        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/2022";
        $htmlTeams = file_get_contents($urlTeams);
        
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/2022";
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);

        $teams = json_decode($htmlTeams);
        
         
        foreach($matches->items as $match){
            foreach($teams->items as $team){
                if($match->home_team_id==$team->id){
                    $match->home_drapeau = $team->drapeau;
                }
                if($match->away_team_id==$team->id){
                    $match->away_drapeau = $team->drapeau;
                }
            }
        }
       //dd($matches);
       //dd($matches->items);
      //dd($matches->items);
        return view('knockout', [
            'matches' => $matches->items,
            'fifa' => $fifa->items[0],
            'isKnockout' => 'yes'
        ]);
    }



    
    public function standings(){
        $annee = 2022;
        $nombre_groups  = 8;
      
        $urlTeams = "https://apex.oracle.com/pls/apex/learnandlearn/hr/equipes/".$annee;
        $htmlTeams = file_get_contents($urlTeams);
        $teams = json_decode($htmlTeams);
       
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/".$annee;
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);
         
        $groups  = array();

       //dd($teams->items);
       
        for($i=1;$i<=$nombre_groups;$i++){
            $urlGR = "https://apex.oracle.com/pls/apex/learnandlearn/hr/standings/".$annee."/".$i;
            $content = file_get_contents($urlGR);
            $groups[$i-1] = json_decode($content)->items; 
        //dd($teams->items);

            foreach($teams->items as $item){
                foreach($groups[$i-1] as $itm){
                    if($itm->team==$item->nom_equipe){
                        $itm->drapeau = $item->drapeau;
                        $itm->team_id = $item->id;
                    }
                }
            }
        }
        //Saudi arabia

       
        return view('standings', [
         'fifa' => $fifa->items[0],
         'isStand' => 'yes',
         'groups'=>$groups,
         'nb_grps'=>4
        ]);
    }

    public function contact(){
        $annee=2022;
        $url3 = "https://apex.oracle.com/pls/apex/learnandlearn/hr/fifa/".$annee;
        $html3 = file_get_contents($url3);
        $fifa = json_decode($html3);
         
        return view('contact',[
            'fifa'=>$fifa->items[0],
            'iscontact'=> 'yes',
        ]);
    }
}
