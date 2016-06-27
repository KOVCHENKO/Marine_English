
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
                    <li class="active">{!! Html::link ('admin/index', 'На главную страницу') !!}</li>
                    <li> {!! Html::link ('assign_role', 'Присвоить роли')  !!} </li>
                    <li> {!! Html::link ('create_test', 'Создать тест')  !!} </li>
                    <li> {!! Html::link ('delete_test', 'Удалить тест')  !!} </li>
                    <li> {!! Html::link ('edit_test', 'Изменить тест')  !!} </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
