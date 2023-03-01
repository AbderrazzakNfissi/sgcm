@extends('layout')

@section('content')
    <h3 class="text-center">  
      {{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $match->date_match)->format('H : i') }} -
      {{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $match->date_match)->format('d M') }}        
    </h3>
    
    

        <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-1">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <div>
            
            <!--      <canvas id="doughnut-chart" ></canvas> -->
            </div>
          </div>
        </div> 


       
  
       
       
   

      <div class="card mb-3" style="width: 100%;height:100%">
     
          
            <div class="card-body">
              <h5 class="card-title" >
                 <img class="animate__animated animate__swing" src="{{$match->home_drapeau}}" width="5%" style="border: 1px solid rgb(214, 102, 28);float:float;">  
                 <span style="margin-left:40%;color:white;background-color:rgb(255, 94, 0)" class="btn btn-warning">official stats </span>
                 <img class="animate__animated animate__swing" src="{{$match->away_drapeau}}" width="5%" style="border:1px solid rgb(214, 102, 28);float:right;"> 
              </h5>
              <h5 class="card-title" >
                <span class="animate__animated animate__swing" width="15%" style="float: left;font-size:65%">{{ $match->home_team}} </span>
                <span class="animate__animated animate__swing" width="15%" style="float: right;font-size:65%">{{ $match->away_team}} </span>
                
               
             </h5>

             <div class="container" data-aos="fade-up">
              <h6 align="center">Goal</h6>
              <div>
                <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                  <div align="center" class="pb-2 pt-3">Total</div>
                  <div class="progress mb-3">
                    @if($infoMatch->home_score + $infoMatch->away_score == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_score }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_score}} </div>
                    @else
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}%" aria-valuenow="{{ ($infoMatch->home_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_score }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: {{ ($infoMatch->away_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}%" aria-valuenow="{{ ($infoMatch->away_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_score}} </div>
                   @endif
                  </div>

                    <div align="center" class="pb-2 pt-3">Conceded</div>
                    <div class="progress mb-3">
                      @if($infoMatch->home_score + $infoMatch->away_score == 0)
                      <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_score}} </div>
                      <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_score }}</div>
                      @else
                      <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->away_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}%" aria-valuenow="{{ ($infoMatch->away_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_score}} </div>
                      <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2);width: {{ ($infoMatch->home_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}%" aria-valuenow="{{ ($infoMatch->home_score / ($infoMatch->home_score + $infoMatch->away_score))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_score }}</div>
                     @endif  
                    
                    </div>
                  
                  

                </div> 
              </div>                  
          </div>


              <hr>
              <div class="container" data-aos="fade-up">
                <h6 align="center">Attacking</h6>
                
                  <div>
                    <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                      <div align="center" class="pb-2 pt-3">Possession </div>
                       <div class="progress mb-3">
                         <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ $infoMatch->home_possession }}%" aria-valuenow="{{ $infoMatch->home_possession }}" aria-valuemin="0" aria-valuemax="100">{{ $infoMatch->home_possession }}%</div>
                         <div  class="progress-bar bg-primary" role="progressbar" style="width: {{ $infoMatch->away_possession }}%" aria-valuenow="{{ $infoMatch->away_possession }}" aria-valuemin="0" aria-valuemax="100">{{ $infoMatch->away_possession }}%</div>
                        </div>

                    </div> 
                  </div>      
                              
              </div>
              <hr>
              <div class="container" data-aos="fade-up">
                <h6 align="center">Shots</h6>
                <div>
                  <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                    <div align="center" class="pb-2 pt-3">Shots</div>
                     <div class="progress mb-3">
                      @if($infoMatch->home_total_shots + $infoMatch->away_total_shots == 0)
                      <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_total_shots }}</div>
                      <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_total_shots}} </div>
                      @else
                       <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_total_shots / ($infoMatch->away_total_shots + $infoMatch->home_total_shots))*100 }}%" aria-valuenow="{{ ($infoMatch->home_total_shots / ($infoMatch->away_total_shots + $infoMatch->home_total_shots))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_total_shots }}</div>
                       <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: {{ ($infoMatch->away_total_shots / ($infoMatch->away_total_shots + $infoMatch->home_total_shots))*100 }}%" aria-valuenow="{{ ($infoMatch->away_total_shots / ($infoMatch->away_total_shots + $infoMatch->home_total_shots))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_total_shots}} </div>
                      @endif
                      </div>

                      <div align="center" class="pb-2 pt-3">Shots on target</div>
                      <div class="progress mb-3">
                        @if($infoMatch->home_sot + $infoMatch->away_sot == 0)
                        <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_sot }}</div>
                        <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_sot}} </div>
                        @else
                        <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_sot / ($infoMatch->home_sot + $infoMatch->away_sot))*100 }}%" aria-valuenow="{{ ($infoMatch->home_sot / ($infoMatch->home_sot + $infoMatch->away_sot))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_sot }}</div>
                        <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: {{ ($infoMatch->away_sot / ($infoMatch->home_sot + $infoMatch->away_sot))*100 }}%" aria-valuenow="{{ ($infoMatch->away_sot / ($infoMatch->home_sot + $infoMatch->away_sot))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_sot}} </div>
                      @endif 
                      </div>

                  </div> 
                </div>                  
            </div>

            <hr>

            <div class="container" data-aos="fade-up">
              <h6 align="center">Passes</h6>
              <div>
                <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                  <div align="center" class="pb-2 pt-3">attempted passes</div>
                   <div class="progress mb-3">
                    @if($infoMatch->home_attempted_pases + $infoMatch->away_attempted_pases == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_attempted_pases }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_attempted_pases}} </div>
                    @else
                     <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_attempted_pases / ($infoMatch->home_attempted_pases + $infoMatch->away_attempted_pases))*100 }}%" aria-valuenow="{{ ($infoMatch->home_attempted_pases / ($infoMatch->home_attempted_pases + $infoMatch->away_attempted_pases))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_attempted_pases }}</div>
                     <div  class="progress-bar bg-primary" role="progressbar" style=" width: {{ ($infoMatch->away_attempted_pases / ($infoMatch->home_attempted_pases + $infoMatch->away_attempted_pases))*100 }}%" aria-valuenow="{{ ($infoMatch->away_attempted_pases / ($infoMatch->home_attempted_pases + $infoMatch->away_attempted_pases))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_attempted_pases}} </div>
                    </div>
                    @endif
                    <div align="center" class="pb-2 pt-3">completed passes</div>
                    <div class="progress mb-3">
                      @if($infoMatch->home_completed_passes + $infoMatch->away_completed_passes == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_completed_passes }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_completed_passes}} </div>
                    @else
                      <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_completed_passes / ($infoMatch->away_completed_passes + $infoMatch->home_completed_passes))*100 }}%" aria-valuenow="{{ ($infoMatch->home_completed_passes / ($infoMatch->away_completed_passes + $infoMatch->home_completed_passes))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_completed_passes }}</div>
                      <div  class="progress-bar bg-primary" role="progressbar" style="background-color:rgb(53, 179, 28); width: {{ ($infoMatch->away_completed_passes / ($infoMatch->home_completed_passes + $infoMatch->away_completed_passes))*100 }}%" aria-valuenow="{{ ($infoMatch->away_completed_passes / ($infoMatch->home_completed_passes + $infoMatch->away_completed_passes))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_completed_passes}} </div>
                    @endif 
                    </div>

                </div> 
              </div>                  
          </div>

          <hr>

          <div class="container" data-aos="fade-up">
            <h6 align="center">Fouls</h6>
            <div>
              <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                <div align="center" class="pb-2 pt-3">Fouls</div>
                 <div class="progress mb-3">
                  @if($infoMatch->home_fouls + $infoMatch->away_fouls == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_fouls }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_fouls}} </div>
                    @else
                   <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_fouls / ($infoMatch->home_fouls + $infoMatch->away_fouls))*100 }}%" aria-valuenow="{{ ($infoMatch->home_fouls / ($infoMatch->away_fouls + $infoMatch->home_fouls))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_fouls }}</div>
                   <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: {{ ($infoMatch->away_fouls / ($infoMatch->home_fouls + $infoMatch->away_fouls))*100 }}%" aria-valuenow="{{ ($infoMatch->away_fouls / ($infoMatch->away_fouls + $infoMatch->home_fouls))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_fouls}} </div>
                  @endif
                  </div>

              </div> 
            </div>                  
        </div>

        <hr>

          <div class="container" data-aos="fade-up">
            <h6 align="center">Technicalities</h6>
            <div>
              <div class="row justify-content-around d-flex position-relative" data-aos="fade-up" data-aos-delay="100" style="margin: 0%;padding:0%">
                <div align="center" class="pb-2 pt-3">Offsides</div>
                 <div class="progress mb-3">
                  @if($infoMatch->home_offsides + $infoMatch->away_offsides == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_offsides }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_offsides}} </div>
                    @else
                   <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_offsides / ($infoMatch->home_offsides + $infoMatch->away_offsides))*100 }}%" aria-valuenow="{{ ($infoMatch->home_offsides / ($infoMatch->away_offsides + $infoMatch->home_offsides))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_offsides }}</div>
                   <div  class="progress-bar bg-primary" role="progressbar" style="width: {{ ($infoMatch->away_offsides / ($infoMatch->home_offsides + $infoMatch->away_offsides))*100 }}%" aria-valuenow="{{ ($infoMatch->away_offsides / ($infoMatch->home_offsides + $infoMatch->away_offsides))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_offsides}} </div>
                 @endif
                  </div>

                  <div align="center" class="pb-2 pt-3">Corners</div>
                 <div class="progress mb-3">
                  @if($infoMatch->home_corners + $infoMatch->away_corners == 0)
                    <div  class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_corners }}</div>
                    <div  class="progress-bar" role="progressbar" style="background-color:rgb(248, 92, 2); width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_corners}} </div>
                    @else
                   <div  class="progress-bar bg-dark" role="progressbar" style="width: {{ ($infoMatch->home_corners / ($infoMatch->away_corners + $infoMatch->home_corners))*100 }}%" aria-valuenow="{{ ($infoMatch->home_corners / ($infoMatch->away_corners + $infoMatch->home_corners))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->home_corners }}</div>
                   <div  class="progress-bar bg-primary" role="progressbar" style="width: {{ ($infoMatch->away_corners / ($infoMatch->away_corners + $infoMatch->home_corners))*100 }}%" aria-valuenow="{{ ($infoMatch->away_corners / ($infoMatch->away_corners + $infoMatch->home_corners))*100 }}" aria-valuemin="0" aria-valuemax="100">{{$infoMatch->away_corners }}</div>
                  @endif
                  </div>
              </div> 
            </div>                  
        </div>
          

            
            </div>

        
      </div>

      

        
      
    </section>





  
</body>
</html>

@endsection



