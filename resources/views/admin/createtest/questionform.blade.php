@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> class="head-title">Сформировать вопрос</h3>
            <h4> Номер вопроса: </h4>
            {!! Form::open(['url' => 'makequestions/question']) !!}

            <br>

            {!! Form::label('question', 'Вопрос') !!}
            {!! Form::text('question', null, ['class' => 'form-control']) !!}

            {!! Form::label('answer1', 'Ответ 1') !!}
            {!! Form::text('answer1', null, ['class' => 'form-control']) !!}

            {!! Form::label('answer2', 'Ответ 2') !!}
            {!! Form::text('answer2', null, ['class' => 'form-control']) !!}

            {!! Form::label('answer3', 'Ответ 3') !!}
            {!! Form::text('answer3', null, ['class' => 'form-control']) !!}

            {!! Form::label('answer4', 'Ответ 4') !!}
            {!! Form::text('answer4', null, ['class' => 'form-control']) !!}

            {!! Form::label('rightanswer', 'Правильный ответ') !!}
            {!! Form::radio('rightanswer', '1') !!}
            {!! Form::radio('rightanswer', '2') !!}
            {!! Form::radio('rightanswer', '3') !!}
            {!! Form::radio('rightanswer', '4') !!}

            {!! Form::hidden('test_id', $testId) !!}

        </div>

        </br>


        <div class=".form-group">
            {!! Form::submit('Создать', ['class' => 'btn btn-block btn-primary border-radius-zero']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    </div>
@endsection



