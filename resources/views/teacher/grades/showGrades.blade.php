<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @unless ($grades)
    <h1>Ocene po predmetima za ucenika: {{ $grades->first()->Students->first_name }}
            {{ $grades->first()->Students->last_name }}
    </h1>
    @endunless


    @foreach ($grades as $grade)

    <p><b>Naziv predmeta</b> {{ $grade->subjects->name }}</p>
    <p><b>Ocena:</b> {{ $grade->grades }}</p>
    <p><b>Zakljucena: {{ $grade->grade_status ? 'Da' : 'Ne' }}</b></p>
    <p><a href="#">Edit</a></p>
    <hr>


    @endforeach

</body>
</html>
