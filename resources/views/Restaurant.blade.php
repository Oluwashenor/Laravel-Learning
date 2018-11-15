<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\app.css">
    <title>Document</title>
</head>
<body>

    

    <br>
    <br>
    <br>

    <div class="container">
            <ul class="list-group list-group-flush">
            @foreach($restaurants as $restaurant)                  
            <li class="list-group-item">{{$restaurant->id}} --- {{$restaurant->name}}</li>
            @endforeach
                  </ul>
    </div>


</body>
</html>