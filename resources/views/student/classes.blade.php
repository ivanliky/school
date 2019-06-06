<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Odeljenja</h1>

    @foreach ($classes as $class)

    <p><a href="{{ route( 'students' , [$class->id] )}}">{{ $class->name }}</a></p>

    @endforeach


</body>
</html>
