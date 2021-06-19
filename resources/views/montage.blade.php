@extends('layouts.app')
@section('web-title')
@endsection
@section('breadcrumbs')
    <div class="pt-3 pb-3" style="background-color: #fafafa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Montage</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="bg-vs-yellow">
    <div class="container-fluid">
    <div class="justify-content-around row me-5 ms-auto" id="what-we-do-banner">
        <div class="col-4 d-flex">
            <img src="{{asset('assets/img/logoBuilder.png')}}" class="banner-img me-5 ms-5 mt-3 " alt="">
            <div>
                <h2>Design & Build <strong>property</strong></h2>
                <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
                <a href="#">More</a>
            </div>
        </div>
        <div class="col-4 d-flex">
            <img src="{{asset('assets/img/logoBuilder.png')}}" class="banner-img me-5 ms-5 mt-3" alt="">
            <div>
                <h2>Design & Build <strong>property</strong></h2>
                <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
                <a href="#">More</a>
            </div>
        </div>
        <div class="col-4 d-flex">
            <img src="{{asset('assets/img/logoBuilder.png')}}" class="banner-img me-5 ms-5 mt-3" alt="">
            <div>
                <h2>Design & Build <strong>property</strong></h2>
                <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
                <a href="#">More</a>
            </div>
        </div>
    </div>


</div>


    </div>


    <div style="height: 70vh"></div>


@endsection
