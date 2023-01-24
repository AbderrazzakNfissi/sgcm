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
    <h1 align="center">Teams</h1>
    <div class="card-container">
    @foreach ($teams as $team)
        <div style="card">
        <img src="{{$team->drapeau}}" width="100" style="margin: 10px; border:1px solid black;" ><br>
         <div align="center"><b><a href="/team/{{$team->id}}">{{$team->nom_equipe}}</a></b></div>
        </div>
    @endforeach
    </div>

</body>
</html>