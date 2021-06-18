@extends('layouts.app')

@section('content')

{{--<body id="home">--}}

{{--    ######--}}
{{--    <div class="index">--}}
{{--    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">--}}
{{--        <div class="carousel-inner index">--}}
{{--            <div class="carousel-item active">--}}
{{--                --}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="{{ asset('assets/img/bannerTwo.png') }}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="{{ asset('assets/img/mainBanner.png') }}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}

{{--    </div>--}}
{{--    </div>--}}

        <div class="container-fluid home-banner parallax" id="home-first">
            <div class="container home-banner" data-aos="fade-right">
                <h1 class="home-banner-text mt-5">Мы <strong>не продаём</strong> крыши </h1>
                <h1 class="mt-2 mb-3 home-banner-text">Мы продаём <em>мечты</em></h1>
                <ul>
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Скидки на работы предоставляются индивидуально</li>
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Гарантия на выполненные работы пять лет</li>
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Замер, расчёт, консультация бесплатно</li>
                    <li class="mt-2 mb-2"><i class="fas fa-check me-2"></i>Специалисты высокого класса с огромным опытом работы</li>
                </ul>
                <button class="btn home-banner-button d-block ms-4">Больше</button>
            </div>
        </div>





{{--<img src="{{ asset('assets/img/mainBanner.png') }}" class="d-block w-100" alt="...">--}}

<div class="container my-5 second-banner" data-aos="fade-up">
    <div>
        <div class="col-lg-4 mx-auto mt-20  text-center d-lg-block" id="mobile-home-first"><h2>Большой опыт</h2></div>
        <div class="col-lg-5 mx-auto text-center mb-5"><h6>МЫ ДЕЛАЕМ КРОВЛЮ, КОТОРОЙ ГОРДИМСЯ. ПРОФЕССИОНАЛЬНО. КАЧЕСТВЕННО. С ДУШОЙ. И НЕ ЗАДИРАЕМ ЦЕНЫ.</h6></div>
    </div>
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div><div class="col-4 mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div><div class="col-4 mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div>
    </div>
</div>

{{--    ### 3 section--}}
    <div class="container-md-fluid main-cont-3">
        <div class="row mx-auto justify-content-around">
            <div class="text-white text-center mt-5 mb-5" id="experience-text">
                <h2>Большой опыт</h2>
                <p>More than 20 years of working with roof constructions</p>
            </div>
            <div class="col-lg-3">
                <img src="{{asset('assets/img/home.jpg')}}" class="col-12 rounded-3 mx-auto d-block" alt="">
            </div>
            <div class="col-lg-3 mt-3">
                <img src="{{asset('assets/img/home.jpg')}}" class="col-12 rounded-3 mx-auto d-block" alt="">
            </div>
            <div class="col-lg-3 mt-3">
                <img src="{{asset('assets/img/home.jpg')}}" class="col-12 rounded-3 mx-auto d-block" alt="">
            </div>
        </div>
        <div class="text-center mt-lg-5 mt-4">
            <button class="btn btn-warning mb-5">Больше</button>

        </div>
    </div>
    {{--    ### 4 section--}}
    <div class="container-fluid main-cont-4 d-block" >
        <div class="row pt-5">
            <div class="text-center mt-2 mb-5 ">
                <h2>Our experience</h2>
                <p>More than 20 years of working with roof constructions</p>
            </div>
            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">
                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">
                <h3 class="mt-2">Johny Borjomi</h3>
                <p>Home owner</p>
                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">
                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">
                <h3 class="mt-2">Johny Borjomi</h3>
                <p>Home owner</p>
                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">
                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">
                <h3 class="mt-2">Johny Borjomi</h3>
                <p>Home owner</p>
                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
        </div>
    </div>

{{--    ### 5 section--}}
<div class="shadow mt-2 mt-ld-0">
    <div class=" text-center text-white pt-5" id="yellow-bar">
            <h2 class="mt-3">Our experience</h2>
            <p>More than 20 years of working with roof constructions</p>
        <button class="btn btn-yellow-2" type="submit">Больше</button>
    </div>
</div>

{{--    ###5 section?--}}
<div class="container-fluid bg-gradient-vs row">

    <div class="col-3" id="send-logo" data-aos="fade-right">
        <img src="{{asset('assets/img/send2.png')}}" alt="">
    </div>


    <div class="container col" id="contact-form" >
            <h2 class="text-center" data-aos="fade-left">Есть вопросы?</h2>
        <!--Card content-->
        <div class="card-body mt-1 col-lg-4 mx-auto">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">

                <!-- Name -->
                <div class="md-form row" data-aos="fade-left" style="transition: 1.5s">
                    <input type="text" id="materialContactFormName" class="shadow home-form col mb-3" placeholder="Имя" required>
                    <label for="materialContactFormName"></label>
                </div>

                <!-- E-mail -->
                <div class="md-form row" data-aos="fade-left" style="transition: 2s">
                    <input type="email" id="materialContactFormEmail" class="home-form col shadow" placeholder="Email" required>
                    <label for="materialContactFormEmail"></label>
                </div>
                <!--Message-->
                <div class="md-form row mb-4" data-aos="fade-left" style="transition: 3s">
                    <textarea id="materialContactFormMessage" class="home-form home-form-text col md-textarea shadow mt-3" rows="3" placeholder="Вопрос.." required></textarea>
                    <label for="materialContactFormMessage"></label>
                </div>

                <!-- Send button -->
                <button class="btn btn-send" type="submit" data-aos="fade-left">Отправить</button>

            </form>
            <!-- Form -->

        </div>

    </div>

</div>

@endsection
