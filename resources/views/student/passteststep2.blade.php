@extends('student.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Выберите вид речевой деятельности </h3>
            @foreach($testCategories as $testCategory)
                <h4><a href="passtest2/{{ $globalTestId }}/{{ $testCategory -> id }}">{{ $testCategory -> name }}</a></h4>
            @endforeach

        </div>
    </div>
@endsection