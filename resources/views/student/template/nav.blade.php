<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<header id="main-header">
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
                    {{--<li class="active"><a href="student/index">На главную страницу</a></li>--}}
                    <li> {!! Html::link ('auth/passtest', 'Сдать тест')  !!} </li>
                    <li> {!! Html::link ('student/showstat', 'Посмотреть статистику')  !!} </li>
                    <li> {!! Html::link ('auth/exercieses', 'Упражнения')  !!} </li>
                    <li> {!! Html::link ('auth/tutorcollaboration', 'Взаимодействие с преподавателем')  !!} </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
