<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">STADIUMS </h1>
    
     @foreach($stadiums as $stadium)
     <hr>
      <p>
         nom stade :<a href="/stadiums/{{$stadium->id}}"> {{$stadium->nom_stade}} </a><br>
        localisation : {{$stadium->localisation}}<br>
        date construction : {{$stadium->date_constr}}<br>
        
      </p>
      <img src="{{$stadium->image_stade}}" width="400" alt="{{$stadium->nom_stade}}">
      <br>
     @endforeach
</body>
</html>