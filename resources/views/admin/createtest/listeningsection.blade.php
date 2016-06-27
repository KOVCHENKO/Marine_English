@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> class="head-title">Аудирование</h3>
            <h4> Загрузите аудиофайл на основе которого будут составляться вопросы </h4>
            <hr>
            {!! Form::open(['url' => 'store_listening_section', 'files' => true]) !!}

            <div class=".form-group">
                {!! Form::label('audio', 'Выберите аудиофайл:') !!}
                {{--Первый аргумент -имя, второй аргумент - по умолчанию, третий - дополнительные опции--}}
                {!! Form::file('audio') !!}
            </div>
            <br>

        </div>

        </br>

                {!! Form::hidden('global_test_id', $id) !!}

        <div class=".form-group">
            {!! Form::submit('Создать', ['class' => 'btn btn-block btn-primary border-radius-zero']) !!}
        </div>

        {!! Form::close() !!}

        <p></p>

    </div>
    </div>
@endsection



