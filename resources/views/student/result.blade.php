@extends('student.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Ваш результат </h3>
            <h4> {{ $score }}</h4>
        <hr>
            <h4> <a href="auth/passtest/{{ $globalTestId}}">Вернуться к выбору типов теста </a></h4>

        </div>
    </div>

@endsection
