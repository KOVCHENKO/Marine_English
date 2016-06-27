@extends('student.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Прослушайте аудио файл, а затем ответьте на вопросы </h3>
            {{--<audio controls>--}}
                {{--<source src={{ URL::asset('public/public/uploads/audiofiles/'.$testLink ) }} type="audio/mpeg">--}}
                {{--Your browser does not support the audio element.--}}
            {{--</audio>--}}

            <h4> Запись можно прослушать только один раз. Нажмите кнопку "старт" для начала проигрывания </h4>
            <audio id="player" src={{ URL::asset('public/public/uploads/audiofiles/'.$testLink ) }}></audio>
            <div>
                <button onclick="document.getElementById('player').play()">Старт</button>
                <button onclick="document.getElementById('player').pause()">Пауза</button>
            </div>

            {!! Form::open(['url' => 'passtest3']) !!}

                @include('student.partials.testq')

            {!! Form::close() !!}

        </div>
    </div>
@endsection