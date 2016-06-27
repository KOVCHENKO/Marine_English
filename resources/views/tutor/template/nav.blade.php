
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Marine<span>English</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">{!! Html::link ('tutorstatistics', 'На главную страницу') !!}</li>
                    <li> {!! Html::link ('testers', 'Сдающие')  !!} </li>
                    <li> {!! Html::link ('testresults', 'Результаты тестов')  !!} </li>
                </ul>
            </div>
        </div>
    </nav>
