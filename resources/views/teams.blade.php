@extends('layout')

  @section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="card-container" style="padding-left: 10%;padding-right: 10%">
            @foreach ($teams as $team)
                <div style="card" class="animate__animated animate__backInLeft">
                  <a href="/team/{{$team->id}}" >
                <img src="{{$team->drapeau}}" width="100" style="margin: 10px; border:1px solid orange;" ><br>
                 <div align="center"><b style="color: rgb(0, 0, 0)">{{$team->nom_equipe}}</b>
                  </div>
                </a>
                </div>
            @endforeach
        </div>

    </section>
    <!-- End About Section -->
  @endsection
    

