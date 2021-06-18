@extends('layouts.app')
@section('title') Offers @endsection
@section('breadcrumbs')
    <div class="pt-3 pb-3" style="background-color: #fafafa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div id="contacts">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Контакты</h2>
                <p>Главный офис и самовывоз: Москва, Зеленоград, ул. Конструктора Гуськова, 6с1, офис 213</p>
            </div>
            <div class="col text-center">
                <h3>+371 22482946</h3>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#contactModal">Заказать консультацию</button>
            </div>
        </div>

        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказать консультацию</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label"></label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Имя">
                                <label for="recipient-name" class="col-form-label"></label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label"></label>
                                <textarea class="form-control" id="message-text" placeholder="Коментарии:"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Заказать</button>
                    </div>
                </div>
            </div>
        </div>




            <div class="mt-5">
                <h2>Rīga, Dzelzavas 777</h2>
                <a class="col-2" href="https://www.google.com/maps/place/Dzelzavas+iela,+Vidzemes+priek%C5%A1pils%C4%93ta,+R%C4%ABga/data=!4m2!3m1!1s0x46eece6e48bd7ea5:0x3361b4f7be0dfc3a?sa=X&ved=2ahUKEwis2OXusJXxAhXtAxAIHQ0sDdkQ8gEwG3oECDIQAQ">Посмотреть на карте</a>
            <ul class="mt-3">
                <li>
                    <p>ПН-ПТ: 08:00 — 18:00 </p>

                </li>
                <li>
                    <p>+7 (495) 660-39-66</p>
                </li>
            </ul>
            </div>









</div>
</div>


@endsection
