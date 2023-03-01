@extends('layout')

@section('content')

<main id="main">
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" style="overflow-x: scroll; width: 100%; height: 600px;" data-aos="fade-up" data-aos-delay="100">
       
        <ul class="round">
          @foreach($matches as $match)
            @if($match->round_number=='Round of 16')
           
            <li class="match" style="background-color: rgba(18, 15, 13, 0.876);color: #ffe221;border:1px solid orange;">
              <a href="/matche/{{$match->id}}">
              <img src="{{$match->home_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">  {{$match->home_team_result}} : {{$match->away_team_result}}  <img src="{{$match->away_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">
            </a>
            </li>
           
            @endif
          @endforeach
          </ul>
          @php
           $i=0;
          @endphp
          <ul class="round">
            @foreach($matches as $match)
            @if($match->round_number=='Quarter Finals')
            <li class="match" style="background-color: rgba(18, 15, 13, 0.876);color: #ffe221;border:1px solid orange;" >
              <a href="/matche/{{$match->id}}">
              <img src="{{$match->home_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">  {{$match->home_team_result}} : {{$match->away_team_result}}  <img src="{{$match->away_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">
              </a>
            </li>
            @if($i<3)
             <li>&nbsp;</li>
             @php
             $i++;
             @endphp
            @endif
            @endif
            @endforeach
          </ul>
          @php
          $i=0;
          @endphp
          <ul class="round">
            @foreach($matches as $match)
            @if($match->round_number=='Semi Finals')
            <li class="match" style="background-color: rgba(18, 15, 13, 0.876);color: #ffe221;border:1px solid orange;" >
              <a href="/matche/{{$match->id}}">
              <img src="{{$match->home_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">  {{$match->home_team_result}} : {{$match->away_team_result}}  <img src="{{$match->away_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">
              </a>
            </li>
            @if($i<1)
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             @php
             $i++;
             @endphp
            @endif
            @endif
            @endforeach
            
          </ul>
          
          <ul class="round">
            @foreach($matches as $match)
            @if($match->round_number=='Finals')
            
            <li class="match" style="background-color: rgba(18, 15, 13, 0.876);color: #ffe221;border:1px solid orange;" >
              <a href="/matche/{{$match->id}}">
              <img src="{{$match->home_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">  {{$match->home_team_result}} <img src="/assets/img/trophy.png" style="width: 20%">   {{$match->away_team_result}}  <img src="{{$match->away_drapeau}}" style="margin: 5%;border:1px solid orange;width:15%">
              </a>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
        
  
        
      </div>
    </section><!-- End Contact Section -->

    
  @endsection