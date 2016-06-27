@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Список вопросов для изменения </h3>
            @foreach($questions as $question)
                <h4>
                    {{ $question->question  }}
                    {!! Html::link ('question/edit/'.$question->id, 'Изменить')  !!}
                    {!! Html::link ('question/destroy/'.$question->id, 'Удалить')  !!}
                </h4>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            {!! Html::link ('question/create/'.$testId, 'Добавить еще один вопрос')  !!}
        </div>
    </div>

@endsection



