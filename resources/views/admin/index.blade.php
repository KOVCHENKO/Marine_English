@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> На данный момент есть следующие тесты: </h3>

            <table class="table">
              @foreach($globalTests as $globalTest)
                    <tr>
                        <td>{{ $globalTest->name  }}</td>
                        <td> {!! Html::link ('globaltest/edit/'.$globalTest->id, 'Изменить')  !!} </td>
                        <td> {!! Html::link ('globaltest/destroy/'.$globalTest->id, 'Удалить')  !!} </td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
@endsection