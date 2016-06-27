@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> class="head-title">Выберите вид речевой деятельности для теста: "{{ $testName }}"</h3>
            <hr>
            <h4><a href="globaltest/{{ $testId }}/listening">Listening</a></h4>
            <h4><a href="globaltest/{{ $testId }}/grammar">Grammar</a></h4>
            <h4><a href="globaltest/{{ $testId }}/vocabulary">Vocabulary</a></h4>
            <h4><a href="globaltest/{{ $testId }}/time">Time and numbers</a></h4>
            <h4><a href="globaltest/{{ $testId }}/pronunciation">Pronunciation</a></h4>
            <h4><a href="globaltest/{{ $testId }}/reading">Reading</a></h4>




        </div>
     </div>
@endsection



