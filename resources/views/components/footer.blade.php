<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="bg-vs-dark">
    <div class="container">
    <footer class=" text-white text-center text-lg-start bg-vs-dark">
        <div class=" p-4">
            <div class="row mt-4 justify-content-around">
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                    <h6 class="text-uppercase mb-4">SIA "VS Būvniecības grupa"</h6>
                    <p class="text-primary">Reg. LV40103398776,</p>
                    <p>SEPA LV92ZZZ40103398776</p>
                    <p>Zvaigznāja gatve 16 - 55, Rīga, LV-1082 </p>
                    <div class="mt-lg-4">
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-md-0">
                    <ul class="fa-ul justify-content-start" style="margin-left: 1.65em;">
                        <h6 class="text-uppercase mb-3">Контакты</h6>
                        <li class="mb-3">
                            <p class="fa-li"><i class="fas fa-home"></i></p><span class="ms-2">Rīga, Dzelzavas 777</span>
                        </li>
                        <li class="mb-3">
                            <p class="fa-li"><i class="fas fa-envelope-open"></i></p><span class="ms-2">info@vs-buvgrupa.lv</span>
                        </li>
                        <li class="mb-3">
                            <p class="fa-li"><i class="fas fa-phone"></i></p><span class="ms-2">+371 22482946</span>
                        </li>
                        <li class="mb-3">
                            <p class="fa-li"><i class="fas fa-money-check-alt"></i></p><span class="ms-2">LV92ZZZ40103398776</span>
                        </li>
                    </ul>
                </div>
                <div class="col-1 d-none d-lg-block">
                    <h6 class="text-uppercase">Menu</h6>
                    <ul class="navbar-nav header-tex"  id="navbarNav">
                        <li class="nav-item">
                            <a class="{{ Route::is('home') ? 'navi' : '' }} current" href="{{ route('home') }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('works') ? 'navi' : '' }} current" href="{{ route('works') }}">Работы</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Route::is('offers') ? 'navi' : '' }} current" href="{{ route('offers') }}">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('montage') ? 'navi' : '' }} current" href="{{ route('montage') }}">Монтаж</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('about-us') ? 'navi' : '' }} current" href="{{ route('about-us') }}">Компания</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::is('contacts') ? 'navi' : '' }} current" href="{{ route('contacts') }}">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="col-3">
                    <h6 class="text-uppercase mb-4">Время работы</h6>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                        <tr>
                            <td>Пн - Чт:</td>
                            <td>8.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td>Пт - Суб:</td>
                            <td>10.00 - 15.00</td>
                        </tr>
                        <tr>
                            <td>Воскресенье:</td>
                            <td><i class="fas fa-lock"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <div class="container">
    <div class=" row border-top border-1 mt-5 justify-content-around" id="termsAndConditions">
        <div class="col-4 text-white mt-3 text-muted">
            <p><strong>VS būvniecības grupa</strong> presents Inc All Rights Reserved</p>
        </div>
        <div class="col mt-3">
            <a href="#" class="me-2 text-muted">Terms of Services</a>
            <a href="#" class="me-2 text-muted">Privacy Policy</a>
        </div>
    </div>
</div>
</div>
