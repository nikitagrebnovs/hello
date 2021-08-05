@extends('layouts.app')

@section('content')
<div class="col-sm-2" id="home-banner">
    <div id="contact-request" class="justify-content-between po">
        <h4 class="text-start">Получить бесплатную консультацию!</h4>
        <form class="justify-content-center">
            <div class="mb-3 d-flex sm-request-input">
                <img src="{{ asset('assets/img/people.svg') }}" alt="">
                <label for="form-request-name" class="form-label"></label>
                <input type="text" class="form-control" id="form-request-name" aria-describedby="request-name" placeholder="Ваше имя">
            </div>
            <div class="mb-3 d-flex sm-request-input">
                <img src="{{ asset('assets/img/phone.svg') }}" alt="">
                <label for="form-request-email" class="form-label"></label>
                <input type="phone" class="form-control" id="form-request-email" placeholder="Номер телефона">
            </div>
            <div class="col text-center">
            <button type="submit" id="sm-form-request-submit" class="btn btn-outline-warning text-center">Отправить</button>
            </div>
        </form>
    </div>
    <div id="main-banner-title" class="my-sm-auto">
    <h2>Мы не продаём крыши Мы продаём мечты</h2>
    </div>
</div>

<div class="position-absolute mb-5" id="main-sec-figure">
    <img src="{{ asset('assets/img/rectangle.svg') }}" alt="">
</div>
<div class="container second-banner mt-5" data-aos="fade-up">
    <div>
        <div class="col-lg-4 mb-lg-5 mx-auto mt-20 text-center d-inline mt-5" id="mobile-home-first"><h2>Почему нас рекомендуют?</h2></div>
    </div>
    <div class="row justify-content-between" id="main-sec">
       <div class="col text-center">
           <div class="main-sec-logo text-center d-flex align-middle justify-content-center">
               <img src="{{asset('assets/img/wallet.svg')}}" alt="" class=" main-sec-logo-" style="width: 60px">
           </div>
           <div class="main-sec-text mt-4 text-center">
               <h4 class="text-uppercase">Razumanja cena</h4>
               <p class="mt-2">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One</p>
           </div>
       </div>
       <div class="col text-center">
           <div class="main-sec-logo text-center d-flex align-middle justify-content-center">
               <img src="{{asset('assets/img/star.svg')}}" alt="" class=" main-sec-logo-inside-others" style="width: 45px">
           </div>
           <div class="main-sec-text mt-4 text-center">
               <h4 class="text-uppercase">Razumanja cena</h4>
               <p class="mt-2 text-center">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One</p>
           </div>
       </div>
       <div class="col text-center">
           <div class="main-sec-logo text-center d-flex align-middle justify-content-center">
               <img src="{{asset('assets/img/list.svg')}}" alt="" style="width: 50px">
           </div>
           <div class="main-sec-text mt-4 text-center">
               <h4 class="text-uppercase">Razumanja cena</h4>
               <p class="mt-2 col">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One</p>
           </div>
       </div>
       <div class="col text-center">
           <div class="main-sec-logo text-center d-flex align-middle justify-content-center">
               <img src="{{asset('assets/img/carbon_delivery.svg')}}" alt="" class="main-sec-logo-inside-others" style="width: 80px">
           </div>
           <div class="main-sec-text mt-4 text-center">
               <h4 class="text-uppercase">Razumanja cena</h4>
               <p class="mt-2">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One</p>
           </div>
       </div>
    </div>
</div>
{{--    ### 3 section--}}
    <div class="container-md-fluid main-cont-3 bg-vs-dark pt-lg-3">
        <div class="text-white text-center mb-5 pt-5 mt-lg-5">
            <h1>Наша гордость</h1>
            <p class="">More than 20 years of working with roof constructions</p>
        </div>
        <div class="d-lg-flex mx-auto justify-content-around">
            <div class=" mt-3 img-zoom d-flex justify-content-center">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Mārupe Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/home.jpg')}}" class="slider-img rounded-3 mx-auto d-block" alt="">
            </div>
            <div class="my-auto mt-3 img-zoom d-flex justify-content-center">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Zolitūde Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/slider-home-2.jpg')}}" class="slider-img rounded-3 mx-auto d-block" alt="">
            </div>
            <div class="my-auto mt-3 img-zoom d-flex justify-content-center">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Purvciems Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/slider-home-3.jpg')}}" class="slider-img rounded-3 mx-auto d-block" alt="">
            </div>
        </div>
        <div class="text-center mt-lg-5 mt-4">
            <a href="{{route('works')}}" class="btn btn-outline-warning mb-5 text-uppercase btn-vs-outline">Больше</a>
        </div>
    </div>
<div class="container mt-5" id="main-4-sec-top">
    <div class="text-center">
        <h1>Как мы работаем</h1>
    </div>
    <div class="d-lg-flex mt-5" id="main-4-sec-middle">
        <div id="main-4-sec-top-content" class="d-flex mx-auto">
                <div class="my-auto">
                    <strong>1</strong>
                </div>
                <div class="my-auto mx-3">
                    <h3>ваша заявка</h3>
                    <p>Оставьте заявку или позвоните в наш офис</p>
                </div>
        </div>
        <div id="main-4-sec-top-content" class="d-flex mx-auto">
                <div class="my-auto">
                    <strong>3</strong>
                </div>
                <div class="my-auto mx-3">
                    <h3>ваша заявка</h3>
                    <p>Оставьте заявку или позвоните в наш офис</p>
                </div>
        </div>
        <div id="main-4-sec-top-content" class="d-flex mx-auto">
                <div class="my-auto">
                    <strong>5</strong>
                </div>
                <div class="my-auto mx-3">
                    <h3>ваша заявка</h3>
                    <p>Оставьте заявку или позвоните в наш офис</p>
                </div>
        </div>
    </div>
    <div id="lifeCycleImg" class="d-flex mx-auto">
    </div>
    <div class="d-lg-flex">
        <div id="main-4-sec-top-content" class="d-flex mx-auto">
            <div class="my-auto">
                <strong>2</strong>
            </div>
            <div class="my-auto mx-3">
                <h3>ваша заявка</h3>
                <p>Оставьте заявку или позвоните в наш офис</p>
            </div>
        </div>
        <div id="main-4-sec-top-content" class="d-flex mx-auto">
            <div class="my-auto">
                <strong>4</strong>
            </div>
            <div class="my-auto mx-3">
                <h3>ваша заявка</h3>
                <p>Оставьте заявку или позвоните в наш офис</p>
            </div>
        </div>
    </div>
</div>

    {{--    ### 4 section--}}
    <div class="container-fluid main-cont-4 d-block mt-lg-5" >
        <div class="row">
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
