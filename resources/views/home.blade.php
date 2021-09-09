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

<div class="" id="main-sec-figure">
    <img src="{{ asset('assets/img/rectangle.svg') }}" alt="">
</div>
<div class="container second-banner" data-aos="fade-up">
    <div>
        <div class="col mb-lg-5 mx-auto text-center d-inline mt-5" id="mobile-home-first"><h2>Почему нас рекомендуют?</h2></div>
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
        <div class="text-white text-center mb-5 pt-5 pt-lg-0 mt-lg-5">
            <h1>Наша гордость</h1>
            <p class="">More than 20 years of working with roof constructions</p>
        </div>
        <div class="d-lg-flex mx-auto justify-content-around">
            <div class=" mt-3 img-zoom d-flex justify-content-center col-4">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Mārupe Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/home.jpg')}}" class="slider-img rounded mx-auto d-block" alt="">
            </div>
            <div class="my-auto mt-3 img-zoom d-flex justify-content-center">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Zolitūde Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/slider-home-2.jpg')}}" class="slider-img rounded mx-auto d-block" alt="">
            </div>
            <div class="my-auto mt-3 img-zoom d-flex justify-content-center">
                <div class="text-white text-center" id="banner-text-content">
                    <h2 class="">Purvciems Residence</h2>
                    <p class="text-center col-6 mx-auto">Lorem Ipsum is simply <p>
                </div>
                <img src="{{asset('assets/img/slider-home-3.jpg')}}" class="slider-img rounded mx-auto d-block" alt="">
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

{{--    --}}{{--    ### 4 section--}}
{{--    <div class="container-fluid main-cont-4 d-block mt-lg-5" >--}}
{{--        <div class="row">--}}
{{--            <div class="text-center mt-2 mb-5 ">--}}
{{--                <h2>Our experience</h2>--}}
{{--                <p>More than 20 years of working with roof constructions</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">--}}
{{--                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">--}}
{{--                <h3 class="mt-2">Johny Borjomi</h3>--}}
{{--                <p>Home owner</p>--}}
{{--                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">--}}
{{--                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">--}}
{{--                <h3 class="mt-2">Johny Borjomi</h3>--}}
{{--                <p>Home owner</p>--}}
{{--                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 bg-white mx-auto text-center feedback-card" id="mobile-cards" data-aos="fade-up">--}}
{{--                <img src="{{ asset('assets/img/men.png') }}" class="mt-5 col-6" alt="">--}}
{{--                <h3 class="mt-2">Johny Borjomi</h3>--}}
{{--                <p>Home owner</p>--}}
{{--                <p class="mb-3" id="monseratt-cursive-text">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    ### 5 section--}}
    <div class="text-center text-white pt-5 bg-secondary mt-5" id="yellow-bar">
            <h2 class="mt-3">Our experience</h2>
            <p>More than 20 years of working with roof constructions</p>
        <button class="btn btn-vs-w btn-grey" type="submit"><a href="{{route('about-us')}}" class="d-block">Больше</a></button>
    </div>

{{--    ###5 section?--}}
<div class="container d-flex justify-content-center mb-5">
    <div class="row col-8">
        <div class="">
            <div class="well well-sm">
                <form class="form-horizontal mt-5" action="" method="post">
                    <fieldset>
                        <legend class="text-center">Contact us</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group mt-3">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title text-center">Contact Us</h3>
                <div class="titleHR"><span></span></div>

                <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="name2">Name</label>
                                <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                                <div class="error" id="err-name" style="display: none;">Please enter name</div>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="email2">Email</label>
                                <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                                <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="message2">Message</label>
                                <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                                <div class="error" id="err-message" style="display: none;">Please enter message</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <p class="text-center con_sub_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div id="ajaxsuccess">E-mail was successfully sent.</div>
                                <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                                <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                <div class="error" id="err-state"></div>
                                <button type="submit" class="btn btn-custom" id="send">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div> <!-- container -->
</section>



@endsection
