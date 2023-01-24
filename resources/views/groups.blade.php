<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">groups</h1>
    @foreach($groups as $group)
       <div>
        
        <p>Groupe :  {{$group->groupAlph}} 
            <br>team : {{$group->team}} 
            <br> points : {{$group->points}}
           </p>
        <img src="{{$group->drapeau}}" width="150" style="margin: 10px;" >
       </div>
       <hr>
    @endforeach
    
</body>
</html>