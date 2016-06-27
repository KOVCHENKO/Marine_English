@extends('student.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> На данный момент для сдачи доступны следующие тесты </h3>
            @foreach($globalTests as $globalTest)
                <h4><a href="passtest/{{ $globalTest -> id }}">{{ $globalTest->name  }}</a></h4>
            @endforeach

        </div>
    </div>
@endsection