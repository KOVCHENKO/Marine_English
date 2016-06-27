@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Выполнить вход в качестве администратора</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="/administrator">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Логин администратора</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Введите адрес эл.почты">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Пароль администратора</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" placeholder="Введить пароль">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                        Войти
                                    </button>

                                    <a href="/password/email">Забыли пароль?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
