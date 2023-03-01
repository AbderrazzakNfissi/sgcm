<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <style>
   @import "compass/css3";

.knockout-scheme {
  height: 100%;
}

.round {
    display: table-cell;
     vertical-align: middle;
  width: 160px;
  margin: 0px;
  padding: 0px;
  list-style-type: none;
}


.round > li {
  margin-top: 25px;
  margin-bottom: 25px;
  margin-left : 5px;
  margin-right:5px;
  height: 55px;
  width: 230px;
  
  text-align: center;
  line-height: 40px;
  
  &.match {
    background: #ddd;
  }
  
  + li {
    margin-top: 20px;
  }
  
}

.match{
  border-radius: 10%;
}

  </style>

  <title>{{$fifa->title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
  <style>
    
     .card-container {
  display: flex;
  flex-wrap:wrap;
}

.card {
  width: 300px;
  height: 200px;
  margin-right: 10px;
}
     </style>
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
   />
   
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/favicon.png" alt="">
        <h1><span></span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" >Home</a></li>
          <li><a href="/teams" @if(isset($isteam)) class="active" @endisset>TEAMS</a></li>
          <li><a href="/matches" @isset($isMatch)  class="active" @endisset>Matches</a></li>
          <li><a href="/standings" @isset($isStand) class="active" @endisset>STANDINGS</a></li>
          <li><a href="/konckout" @isset($isKnockout) class="active" @endisset>kNOCKOUT</a></li>
         
            
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/fifa-teams.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
        <!-- =========== Team page ================ -->
        
        @if(isset($isDetailMatch))
        <h3 class="text-center" style="color:white">  
            @if($match->round_number==1 || $match->round_number==2 || $match->round_number==3)
            {{$match->group_}}
            @else
             {{$match->round_number}}
            @endif 
          </h3>
        <h2 align="center"> 
          <a href="/matchHomeById/{{ $match->id }}">
            <img class="animate__animated animate__swing" src="{{$match->home_drapeau}}" width="20%" style="border: 1px solid rgb(214, 102, 28)"> 
          </a>
          <b>{{  $infoMatch->score }} </b>
          <a href="/matchAwayById/{{ $match->id }}">
            <img class="animate__animated animate__swing" src="{{$match->away_drapeau}}" width="20%" style="border:1px solid rgb(214, 102, 28)"> 
          </a>
           </h2>
       
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/matches">MATCHES</a></li>
          <li>STATS</li>
        </ol>
        @elseif(isset($isAllTeam))
        <h2>TEAMS</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>TEAMS</li>
        </ol>
        @elseif(isset($isteam))
        <h2> <img src="{{$team->drapeau}}" width="100" style="margin: 10px;" ></h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/teams">TEAMS</a></li>
          <li>{{$team->nom_equipe}}</li>
        </ol>
        @elseif(isset($isMatch))
        <h2>MATCHES</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>MATCHES</li>
        </ol>
        @elseif(isset($isHorA))
        <h2 align="center"><img src="{{ $drapeau }}" width="60%" style="border:1px solid rgb(214, 102, 28)"></h2>
        <ol>
          <li><a href="/" >Home</a></li>
          <li><a href="/matches">Matches</a></li>
          <li>{{ $team_name }}</li>
        </ol>
        @elseif(isset($isStand))
        <h2>STANDINGS</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>STANDINGS</li>
        </ol>
        @elseif(isset($isKnockout))
        <h2>KNOCKOUT</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>KNOCKOUT</li>
        </ol>
        @elseif(isset($isStads))
        <h2>STADIUMS</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>STADIUMS</li>
        </ol>
        @elseif(isset($iscontact))
        <h2>CONTACT</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>CONTACT</li>
        </ol>
        @elseif($isResult)
        <ol>
         <li><b style="font-size: 200%"> Résultat trouvé</b></li>
        </ol>
        @endif
        




      </div>
    </div><!-- End Breadcrumbs -->

