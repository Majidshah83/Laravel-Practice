<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($banners as $user)
<h1>{{$user->image}}</h1>
<h1>{{$user->name}}</h1>
@endforeach
<!-- <h1{{$user->image}}</h1> find() and where query
<h1>{{$user->name}}</h1> -->
</body>
</html>
