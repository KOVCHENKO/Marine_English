@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3>Изменить тест: {{ $globalTest->name  }}</h3>

            {!! Form::model($globalTest, ['method' => 'PATCH', 'action' => ['GlobalTestController@update', $globalTest->id]]) !!}

            <div class=".form-group">
                {!! Form::label('name', 'Название:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <br>
            <div class=".form-group">
            {!! Form::submit('Изменить', ['class' => 'btn btn-default']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

    <div class="row">
        <div class="col-md-8">
        <br><hr>
        <h4>Изменить вопросы в следующих категориях тестов</h4>
        @foreach($testCategories as $testCategory)
            <h5> {{ $testCategory->name }}
                {!! Html::link ('question/index/'.$testCategory->id, 'Изменить')  !!}
                {!! Html::link ('test/destroy/'.$testCategory->id, 'Удалить')  !!}
            </h5>
        @endforeach

        </br>
        <h4>Добавить другие категории:</h4>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/listening', 'Listening')  !!}</h5>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/grammar', 'Grammar')  !!}</h5>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/vocabulary', 'Vocabulary')  !!}</h5>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/time', 'Time and numbers')  !!}</h5>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/pronunciation', 'Pronunciation')  !!}</h5>
            <h5> {!! Html::link ('globaltest/'.$globalTest->id.'/reading', 'Reading')  !!}</h5>

        </div>
    </div>
@endsection



