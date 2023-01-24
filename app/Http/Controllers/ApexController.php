<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApexController extends Controller
{
    public function index(){
        $url = 'https://apex.oracle.com/pls/apex/learnandlearn/hr/STADIUMS/1';
        $html = file_get_contents($url);
        // do something with the HTML data

        //$client = new Client();
        //$response = $client->get('https://apex.oracle.com/pls/apex/learnandlearn/hr/STADIUMS/1');
        $data = json_decode($html);
        $image_stade = $data->items[0]->image_stade;
        
        return "<img src='$image_stade' width='500'></img>";
    }
}
