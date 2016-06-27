@extends('student.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Тест начат </h3>
            {!! Form::open(['url' => 'passtest3']) !!}

                @include('student.partials.testq')

            {!! Form::close() !!}

        </div>
    </div>
@endsection