@extends('admin.template.default')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h3> Присвоить роли пользователям </h3>
            <p> Присволить роль: преподаватель или сдающий тест </p>
                <table class="table">
                <tr>
                    <th>Имя пользователя</th>
                    <th>Email пользователя</th>
                    <th>Текущая роль</th>
                    <th>Студент</th>
                    <th>Преподаватель</th>
                    <th>Назначить</th>
                </tr>

                    @foreach($users as $user)
                        {!! Form::open(['url' => 'assign_role']) !!}
                        <tr>
                            <td>{{ $user->name }} </td>
                            <td>{{ $user->email }} </td>
                            <td>{{ $user->role->name }} </td>
                            <td>{!! Form::radio('role_id', '1') !!} </td>
                            <td>{!! Form::radio('role_id', '2') !!} </td>
                            <td>{!! Form::submit('Присвоить', ['class' => 'btn btn-default']) !!}</td>
                            {!! Form::hidden('user_id', $user->id) !!}
                        </tr>
                        {!! Form::close() !!}
                    @endforeach
                </table>

        </div>
    </div>
@endsection

