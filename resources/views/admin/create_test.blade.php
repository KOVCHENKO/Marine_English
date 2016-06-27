@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3 class="head-title">Создать тест</h3>

            {!! Form::open(['url' => 'globaltest']) !!}

            <div class=".form-group">
                {!! Form::label('name', 'Название теста:') !!}
                {{--Первый аргумент -имя, второй аргумент - по умолчанию, третий - дополнительные опции--}}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                <br>
                {!! Form::label('level', 'Уровень:') !!}
                {!! Form::select('level', array('1' => 'Первый', '2' => 'Второй', '3' => 'Третий'), '1') !!}
            </div>

            </br>


            <div class=".form-group">
                {!! Form::submit('Создать', ['class' => 'btn btn-default']) !!}
            </div>

            {!! Form::close() !!}

            <p></p>

        </div>
    </div>
@endsection



