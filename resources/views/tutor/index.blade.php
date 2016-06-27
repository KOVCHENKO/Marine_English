@extends('tutor.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> У преподавателя обучаются следующие студенты </h3>
            <hr>
            @foreach($tutorsUsers as $tutorUser)
                <h4> {{ $tutorUser -> name }} {!! Html::link ('statistic/show/'.$tutorUser->id, 'Посмотреть статистику')  !!}</h4>
            @endforeach

        </div>
    </div>
@endsection