@extends('layout')


@section('content')



  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg" style="padding: 10px" >
    <div class="container" data-aos="fade-up">
      <div class="s128" style="margin: 0px;">
        <form style="padding: 0px;margin:0px" id="search-form" action="/matches" method="POST">
          @csrf

          <div class="inner-form">
            <div class="row" style="padding: 0px">
              <div class="input-field first" id="first">
                <input class="input" name="search" id="inputFocus" type="text" placeholder="Enter a match to search for" />
                <button class="clear" id="clear" style="background-color:orange">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </div>
          </div>
        </form>
        </div>
      <script>
        var btnDelete = document.getElementById('clear');
        var inputFocus = document.getElementById('inputFocus');
        //- btnDelete.on('click', function(e) {
        //-   e.preventDefault();
        //-   inputFocus.classList.add('isFocus')
        //- })
        //- inputFocus.addEventListener('click', function() {
        //-   this.classList.add('isFocus')
        //- })
        btnDelete.addEventListener('click', function(e)
        {
          e.preventDefault();
          
        })
        document.addEventListener('click', function(e)
        {
          if (document.getElementById('first').contains(e.target))
          {
            inputFocus.classList.add('isFocus')
          }
          else
          {
            // Clicked outside the box
            inputFocus.classList.remove('isFocus')
          }
        });
  
      </script>
      <div class="row gy-4">
        @foreach($matches as $match)
        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            {{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $match->date_match)->format('d M Y') }} 
            <h5 class="card-title text-center" >
              @if($match->round_number==1 || $match->round_number==2 || $match->round_number==3)
              {{$match->group_}}
              @else
               {{$match->round_number}}
              @endif
              </h5>
          
           <p>
           </p>
              <p class="card-text text-center pt-3" style="font-size:90%">
            @isset($match->home_drapeau)
            <img src="{{$match->home_drapeau}}" width="25%" style="border: 1px solid rgb(214, 102, 28)"> 
            @endisset
            <span style="font-size: 100%"> {{$match->home_team}} <b style="color:rgb(255, 72, 0)">Vs</b>
            {{$match->away_team}} </span>
            @isset($match->away_drapeau)
            <img src="{{$match->away_drapeau}}" width="25%" style="border:1px solid rgb(214, 102, 28)"> 
             @endisset
            <br>  {{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', $match->date_match)->format('H : i a ') }} 
           </p> 
            <a href="/matche/{{$match->id}}" class="readmore stretched-link"> <i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->
        @endforeach
      </div>
     
    </div>
  </section><!-- End Services Section -->

 
 


@endsection