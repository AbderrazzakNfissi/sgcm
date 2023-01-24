<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    <h1 align="center">
    <img src="{{$team->drapeau}}" width="100" style="margin: 10px;" ><br></h1>
    <h1>Goalkeeper</h1><br>
    <div class="card-container">
    @foreach ($players as $player)
    @if($player->image!='unknown' && $player->position=='GK')
     <div style="card">
     <img src="{{$player->image}}" width="150" style="margin: 10px;" ><br>
      <div align="center"><b>{{$player->player}}</b><br>{{$player->position}}</div>
     </div>
     @endif
    @endforeach
    </div>
    
    <hr>
    <h1>Defender</h1><br>
    <div class="card-container">
   
    @foreach ($players as $player)
    @if($player->image!='unknown' && $player->position=='DF')
     <div style="card">
     <img src="{{$player->image}}" width="150" style="margin: 10px;" ><br>
      <div align="center"><b>{{$player->player}}</b><br>{{$player->position}}</div>
     </div>
     @endif
    @endforeach
    </div>

    <hr>
    <h1>Midfielder</h1><br>
    <div class="card-container">
   
    @foreach ($players as $player)
    @if($player->image!='unknown' && $player->position=='MF')
     <div style="card">
     <img src="{{$player->image}}" width="150" style="margin: 10px;" ><br>
      <div align="center"><b>{{$player->player}}</b><br>{{$player->position}}</div>
     </div>
     @endif
    @endforeach
    </div>
    
    <hr>
    <h1>Forward</h1><br>
    <div class="card-container">
    @foreach ($players as $player)
    @if($player->image!='unknown' && $player->position=='FW')
     <div style="card">
     <img src="{{$player->image}}" width="150" style="margin: 10px;" ><br>
      <div align="center"><b>{{$player->player}}</b><br>{{$player->position}}</div>
     </div>
     @endif
    @endforeach
    </div>
    
    <hr>
    <h1>Manager</h1><br>
    <div class="card-container">
     <div style="card">
     <img src="{{$coach->image_coach}}" width="150" style="margin: 10px;" ><br>
      <div align="center"><b>{{$coach->first_name}} {{$coach->last_name}}</b><br>Manager</div>
     </div>
    
    </div>
</body>
</html>