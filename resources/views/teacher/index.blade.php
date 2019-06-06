<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Studenti</h1>

        <p>Ocene studenata</p>

        @foreach ($students as $student)

           <p><a href="{{ route('grades',[ $student->id ]) }}">{{ $student->first_name }}</a></p>

        @endforeach

        <p>Unos ocena</p>

        <form action="{{ route('teacher.grades.store') }}" method="POST">
            @csrf
            <label for="student_id">Ucenik</label>
            <select name="student_id" id="student_id">

            @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->first_name }}</option>
            @endforeach
            </select>
            <br><br>
            <label for="grades">Ocena</label>
            <select name="grades" id="grades">
                <label for="grades">Ocena</label>
                    @for($i = 1; $i < 6; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
            </select>

            <br><br>
            <label for="subject_id">Ocena</label>
            <select name="subject_id" id="subject_id">
                <label for="subject_id">Ocena</label>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>

            <br><br>

            <input type="checkbox" name="grade_status" value="1">Status ocene



            <br><br>
            <input type="submit" name="unesi_ocenu">
        </form>








</body>
</html>
