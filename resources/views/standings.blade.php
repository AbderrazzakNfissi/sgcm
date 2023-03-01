@extends('layout')

@section('content')

<main id="main">
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    @php
    $gr = 'A';
    
    @endphp
@foreach($groups as $grp)                  
<div class="ptable">
    
    <div class="section-header" style="padding: 0px;margin:0px">
        <h2 align="center" style="padding: 0px;">Groupe {{$gr++}}</h2>
    </div>

    <table style="background-color: rgba(247, 125, 50, 0.084)">
        <tr class="col">
            <th>#</th>
            <th style="text-align:center">Team</th>
            <th>MP</th>
            <th>W</th>
            <th>D</th>
            <th>L</th>
            <th>GF</th>
            <th>GA</th>
            <th>GD</th>
            <th>PTS</th>
            <th style="width: 20%;text-align:center;">Last 5</th>
        </tr>
        @for($i=0;$i<$nb_grps;$i++)
        @if($i<2)
        <tr class="wpos">
        @else
        <tr class="pos">
        @endif
        @isset($grp[$i]->drapeau)
            <td>{{$grp[$i]->rank}}</td>
            <td style="text-align:left;"><img src="{{ $grp[$i]->drapeau }}" width="15%" style="margin: 5%;border:1px solid orange;">
            {{$grp[$i]->team}}
            </td>
            <td>{{$grp[$i]->matches_played}}</td>
            <td>{{$grp[$i]->wins}}</td>
            <td>{{$grp[$i]->draws}}</td>
            <td>{{$grp[$i]->losses}}</td>
            <td>{{$grp[$i]->goals_scored}}</td>
            <td>{{$grp[$i]->goals_against}}</td>
            <td>{{$grp[$i]->goal_difference}}</td>
            <td>{{$grp[$i]->points}}</td>
            <td>-----</td>
         @endisset
        </tr>
        @endfor
    </table>
 
              
        </div>
 @endforeach
        
      </div>
    </section><!-- End Contact Section -->

    





  @endsection