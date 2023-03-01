@extends('layout')

@section('content')
   
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>{{$stadium->nom_stade}}</h2>
        <p>
            {{$stadium->description}} 
        </p>
      </div>
      <div align="center" >
        <img src="{{$stadium->image_stade}}" style="width:80%;margin-bottom:5%;border:1px solid orange;border-radius:3%;">
      <h4>FIFA World Cup 2022™ Stadium Capacity* <br> <b style="color:chocolate">{{ $stadium->capacity}}</b></h4>
     <hr> <h4>Location <br> <b style="color:chocolate">{{$stadium->localisation}}</b></h4>
      </div>
      <div align="center">
      <iframe src="{{$stadium->embedmap}}"  width="100%" height="600" style="border:1px solid chocolate;margin-top:4%;border-radius:3%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
     
    </div>

    
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->


    @endsection
    