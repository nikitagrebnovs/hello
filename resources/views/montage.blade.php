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

    <div style="height: 70vh"></div>


@endsection
