<br>
@foreach($testQuestions as $testQuestion)
    <h4> {{ $testQuestion->question }} </h4>

    <div class="row">
        <div class="col-md-3">
            {!! Form::label($testQuestion->id, $testQuestion->answer1) !!}
        </div>
        <div class="col-md-1">
            {!! Form::radio($testQuestion->id, $testQuestion->answer1 ) !!} </br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::label($testQuestion->id, $testQuestion->answer2) !!}
        </div>
        <div class="col-md-1">
            {!! Form::radio($testQuestion->id, $testQuestion->answer2 ) !!} </br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::label($testQuestion->id, $testQuestion->answer3) !!}
        </div>
        <div class="col-md-1">
            {!! Form::radio($testQuestion->id, $testQuestion->answer3 ) !!} </br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            {!! Form::label($testQuestion->id, $testQuestion->answer4) !!}
        </div>
        <div class="col-md-1">
            {!! Form::radio($testQuestion->id, $testQuestion->answer4 ) !!} </br>
        </div>
    </div>
    <hr>
    @endforeach

    {!! Form::hidden('test_id', $testQuestion->test_id) !!}
    {!! Form::hidden('globalTestId', $globalTestId) !!}


    </br>
    <div class="row">
        <div class="col-md-1 ">
    {!! Form::submit('Отправить ответы', ['class' => 'btn btn-default']) !!}
        </div>
    </div>