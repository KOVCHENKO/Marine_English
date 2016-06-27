@extends('student.template.default')

@section('content')
            <div class="row">
                <div class="col-md-8">

                    <h2 class="head-title"> Статистика пользователя </h2>

                    <table class="table">
                        <tr>
                            <th>Название теста</th>
                            <th>Уровень</th>
                            <th>Направление</th>
                            <th>Кол-во баллов</th>
                            <th>Время сдачи</th>
                        </tr>
                        @foreach($statistics as $statistic)
                            <tr>
                                <td>{{ $statistic->globalname }} </td>
                                <td>{{ $statistic->level}} </td>
                                <td>{{ $statistic->name }} </td>
                                <td>{{ $statistic->result }}</td>
                                <td>{{ $statistic->updated_at}}</td>
                            </tr>
                        @endforeach
                    </table>


                </div>
            </div>
@endsection