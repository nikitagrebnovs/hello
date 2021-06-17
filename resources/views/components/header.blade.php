<body class="bg-white">

<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-vs-dark p-4">
        <h5 class="text-white h4">Menu</h5>
        <span class="text-muted"> <a class="{{ Route::is('home') ? 'navi' : '' }} current" href="{{ route('home') }}">Главная</a></span>
        <span class="text-muted"><a class="{{ Route::is('works') ? 'navi' : '' }} current" href="{{ route('works') }}">Работы</a></span>
        <span class="text-muted"><a class="{{ Route::is('offers') ? 'navi' : '' }} current" href="{{ route('offers') }}">Услуги</a></span>
        <span class="text-muted"><a class="{{ Route::is('montage') ? 'navi' : '' }} current" href="{{ route('montage') }}">Монтаж</a></span>
        <span class="text-muted"><a class="{{ Route::is('about-us') ? 'navi' : '' }} current" href="{{ route('about-us') }}">Компания</a></span>
        <span class="text-muted"><a class="{{ Route::is('contacts') ? 'navi' : '' }} current" href="{{ route('contacts') }}">Контакты</a></span>
    </div>
</div>

<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-vs-dark" id="navbar">

        <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



    <div class="container collapse navbar-collapse nav nav-pills ">
        <img src="{{ asset('assets/img/loge-new.png') }}" alt="Logo" class="logo" id="logo">
        <ul class="container navbar-nav header-tex row-cols-auto mt-auto"  id="navbarNav">

            <li class="nav-item menu-item-left col">
                <a class="{{ Route::is('home') ? 'navi' : '' }} current" href="{{ route('home') }}">Главная</a>
            </li>
            <li class="nav-item menu-item-left col">
                <a class="{{ Route::is('works') ? 'navi' : '' }} current" href="{{ route('works') }}">Работы</a>
            </li>
            <li class="nav-item menu-item-left col">
                <a class="{{ Route::is('offers') ? 'navi' : '' }} current" href="{{ route('offers') }}">Услуги</a>
            </li>
            <li class="nav-item menu-item-left col">
                <a class="{{ Route::is('montage') ? 'navi' : '' }} current" href="{{ route('montage') }}">Монтаж</a>
            </li>
            <li class="nav-item menu-item-left col">
                <a class="{{ Route::is('about-us') ? 'navi' : '' }} current" href="{{ route('about-us') }}">Компания</a>
            </li>
            <li class="nav-item menu-item-last col">
                <a class="{{ Route::is('contacts') ? 'navi' : '' }} current" href="{{ route('contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</nav>

</body>
