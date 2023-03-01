@extends('layout')

@section('content')
   


      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>STADIUMS</h2>
            <p>
                Discover our eight stadiums where FIFA World Cup Qatar 2022™ matches were played
            </p>
          </div>
  
          <div class="slides-2 swiper">
            <div class="swiper-wrapper">
             @foreach($stadiums as $stadium)
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3><a href="/stadiums/{{$stadium->id}}"> {{$stadium->nom_stade}} </a></h3>
                    <h4>{{$stadium->localisation}}</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <img src="{{$stadium->image_stade}}" width="100%" alt="{{$stadium->nom_stade}}" style="border: 1px solid orange;border-radius:5%">

                    
                </div>
                <div align="center">
                <a href="/stadiums/{{$stadium->id}}" class="btn btn-warning" style="color:aliceblue">explore more</a>
                </div>
                </div>
              </div><!-- End testimonial item -->
              @endforeach
    
             
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
    </main><!-- End #main -->
@endsection
    