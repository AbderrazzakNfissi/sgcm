@extends('layout')

  @section('content')

    
   
      
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">
          <h1 align="center">{{$team->nom_equipe}}</h1>
      </div>
    </section><!-- End Stats Counter Section -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          
          <div class="section-header">
            <h2>Goalkeeper</h2>
          </div>
  
          <div class="row gy-5">
            @foreach ($players as $player)
            @if($player->image!='unknown' && $player->position=='GK')
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{$player->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{$player->player}}</h4>
                <span>Goalkeeper</span>
              </div>
            </div>
            @endif
            @endforeach
  
          </div>
        </div>
      </section>


      

      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          
          <div class="section-header">
            <h2>Defender</h2>
          </div>
  
          <div class="row gy-5">
            @foreach ($players as $player)
            @if($player->image!='unknown' && $player->position=='DF')
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{$player->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{$player->player}}</h4>
                <span>Defender</span>
              </div>
            </div>
            @endif
            @endforeach
  
          </div>
        </div>
      </section>

      
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Midfielder</h2>
          </div>
          <div class="row gy-5">
            @foreach ($players as $player)
            @if($player->image!='unknown' && $player->position=='MF')
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{$player->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{$player->player}}</h4>
                <span>Midfielder</span>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </section>


      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Forward</h2>
          </div>
          <div class="row gy-5">
            @foreach ($players as $player)
            @if($player->image!='unknown' && $player->position=='FW')
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{$player->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{$player->player}}</h4>
                <span>Forward</span>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </section>

      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Manager</h2>
          </div>
          <div class="row gy-5">

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{$coach->image_coach}}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{$coach->first_name}} {{$coach->last_name}}</h4>
                <span>Manager</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      @endsection