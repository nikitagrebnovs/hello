@extends('layouts.app')

@section('content')

{{--    <div class="container-fluid">--}}

        <div id="home-banner" class="d-block"> <img src="{{asset('assets/img/mainBanner.png')}}" class="img-banner"  alt=""></div>
        <span id="home-first"></span>
        <div id="home-first-span" class="d-block col-4" data-aos="fade-right">
            <div class="container home-banner" data-aos="fade-right" id="home-first-text">
                <h1 class="home-banner-text mt-5 pt-2">Мы <strong>не продаём</strong> крыши </h1>
                <h1 class="mt-2 mb-3 home-banner-text">Мы продаём <em>мечты</em></h1>
                <ul class="text-white mt-3">
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Скидки на работы предоставляются индивидуально</li>
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Гарантия на выполненные работы пять лет</li>
                    <li class="mt-2"><i class="fas fa-check me-2"></i>Замер, расчёт, консультация бесплатно</li>
                    <li class="mt-2 mb-2"><i class="fas fa-check me-2"></i>Специалисты высокого класса с огромным опытом работы</li>
                </ul>
                <button class="btn btn-yellow btn-vs-w ms-lg-5 mt-lg-3"><a href="{{ route('offers') }}" class="d-block">Больше</a></button>
            </div>
        </div>





{{--<img src="{{ asset('assets/img/mainBanner.png') }}" class="d-block w-100" alt="...">--}}

<div class="container my-5 second-banner" data-aos="fade-up">
    <div>
        <div class="col-lg-4 mx-auto mt-20  text-center d-lg-block" id="mobile-home-first"><h2>Большой опыт</h2></div>
        <div class="col-lg-5 mx-auto text-center mb-5"><h6>МЫ ДЕЛАЕМ КРОВЛЮ, КОТОРОЙ ГОРДИМСЯ. ПРОФЕССИОНАЛЬНО. КАЧЕСТВЕННО. С ДУШОЙ. И НЕ ЗАДИРАЕМ ЦЕНЫ.</h6></div>
    </div>
    <div class="row">
        <div class="col-lg-4 col mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div><div class="col-lg-4 mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div><div class="col-lg-4 col mx-auto">
            <div class="col-12"><img src="{{asset('assets/img/roof.png')}}"  class="col-6 rounded-3 mx-auto d-block" alt=""></div>
            <div class="my-3"><h4>Гарантия на кровлю - до 25 лет</h4></div>
        </div>
    </div>
</div>

{{--    ### 3 section--}}
    <div class="container-md-fluid main-cont-3 bg-vs-dark">
        <div class="row mx-auto justify-content-around">
            <div class="text-white text-center mt-5 mb-5" id="">
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
            <button class="btn btn-vs-w btn-yellow mb-5"><a href="{{route('works')}}" class="d-block">Больше</a></button>

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
    <div class="text-center text-white pt-5" id="yellow-bar">
            <h2 class="mt-3">Our experience</h2>
            <p>More than 20 years of working with roof constructions</p>
        <button class="btn btn-vs-w btn-grey" type="submit"><a href="{{route('about-us')}}" class="d-block">Больше</a></button>
    </div>

{{--    ###5 section?--}}
<div class="container-lg-fluid bg-gradient-vs">
<div class="container-fluid row">
    <div class="col-lg-3 col" id="send-logo" data-aos="fade-left">
        <img src="{{asset('assets/img/send2.png')}}" data-aos="fade-right" alt="" id="conatcs-img">
    </div>
    <div class="col" id="contact-form" >
            <h2 class="text-center mb-4" data-aos="fade-left ">Есть вопросы?</h2>
        <div class="card-body mt-1 col-lg-4 col mx-auto">
            <form class="text-center" style="color: #757575;" action="#">

                <div class="md-form row" data-aos="fade-left" style="transition: 1.5s">
                    <input type="text" id="materialContactFormName" class="shadow home-form col mb-3" placeholder="Имя" required>
                    <label for="materialContactFormName"></label>
                </div>

                <div class="md-form row" data-aos="fade-left" style="transition: 2s">
                    <input type="email" id="materialContactFormEmail" class="home-form col shadow" placeholder="Email" required>
                    <label for="materialContactFormEmail"></label>
                </div>
                <div class="md-form row mb-4" data-aos="fade-left" style="transition: 3s">
                    <textarea id="materialContactFormMessage" class="home-form home-form-text col md-textarea shadow mt-3" rows="3" placeholder="Вопрос.." required></textarea>
                    <label for="materialContactFormMessage"></label>
                </div>

                <button class="btn btn-send btn-yellow mt-4" type="submit" data-aos="fade-left">Отправить</button>
            </form>
        </div>
        </div>

    </div>

</div>
{{--    </div>--}}
@endsection
