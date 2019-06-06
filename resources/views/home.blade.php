@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Evidencija</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <h1>Ucenici</h1>

                     <div class="col-md-6">

                            @foreach ($students as $student)

                            <h2><a href="{{ route('grades', [ $student->id ]) }}">{{ $student->first_name }} {{ $student->last_name }}</a></h2>
                            {{-- <p><b>Predmet:</b> {{ $student->subjects->name }}</p>
                            <p><b>Zakljucena: {{ $student->grade_status ? 'Da' : 'Ne' }}</b></p>
                            <p><b>Ocena:</b> {{ $student->grades }} <a href="#">Edit</a></p> --}}

                            @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
