@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3>Удалить тесты: </h3>

            @foreach($allGlobalTests as $allGlobalTest)
                <h4><a href="globaltest/destroy/{{ $allGlobalTest -> id }}">{{ $allGlobalTest -> name  }}</a></h4>
            @endforeach


        </div>
    </div>
@endsection



