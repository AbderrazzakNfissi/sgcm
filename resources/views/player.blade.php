@extends('layout')

@section('content')

<main id="main">
  
    <!-- ======= Contact Section ======= -->
    
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
      
              
      
                  <div class="swiper-slide" align="center">
                    <div class="testimonial-wrap"  style="width:1000px">
                      <div class="testimonial-item" >
                        <img src="{{$player->image}}"  class="testimonial-img" style="width: 30%;" alt="">
                        <h1>{{$player->player}}</h1>
                        <h4></h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <div style="width: 50%" align="center">
                           
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">about </b><br>
                         {{$player->player}}, {{$player->age}}, is a 
                         
                         @if($player->position=='MF')
                         Midfielder
                         @elseif($player->position=='DF')
                         Defender
                         @elseif($player->position=='GK') 
                         Goalkeeper
                         @elseif($player->position=='FW')
                         Forward
                         @endif  
                         for the {{$player->team}} national team. Born in {{$player->birth_year}} 
                         <hr>
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Team </b><br>
                         <div style="font-size:130%"><img src="{{$team->drapeau}}" style="border: 1px solid orange;" width="30%" ><br> Morocco</div><hr>
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Games </b><br>
                         <div style="font-size:300%; color:red"><b>{{$player->games}}</b></div>
                         <hr>
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">games played to the end </b><br>
                         <div style="font-size:300%; color:red"><b>{{$player->games_complete}}</b></div>
                         <hr>
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">games starts </b><br>
                         <div style="font-size:300%; color:red"><b>{{$player->games_starts}}</b></div>
                         <hr>
                         <b style="font-size: 200%;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">minutes played </b><br>
                         <div style="font-size:300%; color:red"><b>{{$player->minutes}}</b></div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </section>
    


  @endsection