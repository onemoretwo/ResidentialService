@extends('layouts.app')

@section('style')
    <style>
        img {
            object-fit: cover;
            object-position: 0 100%;
        }
    </style>
@endsection

@section('content')
<div class="container">

{{--    carousel--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.home.co.th/images/img_v/img_Directory/20170417-144928007-D-Mark-Condo.jpg"
                     class="d-block w-100" alt="1" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://www.homezoomer.com/wp-content/uploads/2019/01/Polis-Condo-Suksawat-64_8_resize.jpg"
                     class="d-block w-100" alt="1" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://www.terrabkk.com/images/project/0000036066/06c4475eb9228a9513a11a64a3493ea8.jpg"
                     class="d-block w-100" alt="1" height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <div class="card">
        <div class="card-body">

        </div>
    </div>
</div>
@endsection
