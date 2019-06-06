<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Ucenici odeljenja {{ $students->first()->classes->name }}</h1>

    <div class="col-md-6">

           @foreach ($students as $student)


           <h2><a href="{{ route('grades', [ $student->id ]) }}">{{ $student->first_name }} {{ $student->last_name }}</a></h2>

           @endforeach

           <h2>Prosecna ocena po predmetima</h2>

           @foreach ($subjects as $subject)

            <p><h3>{{ $subject->name }} </h3>Prosek: 8 </p>

           @endforeach



   </div>

</body>
</html>
