@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            margin:10px;
            font-size:16px;
        }
        #myCarousel .list-inline {
            white-space:nowrap;
            overflow-x:auto;
        }

        #myCarousel .carousel-indicators {
            position: static;
            left: initial;
            width: initial;
            margin-left: initial;
        }

        #myCarousel .carousel-indicators > li {
            width: initial;
            height: initial;
            text-indent: initial;
        }

        #myCarousel .carousel-indicators > li.active img {
            opacity: 0.7;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container ">
        <div class="card" >
            <div class="card-header">
                <h1> ตึก a ชั้น 3 ห้อง 331</h1>
            </div>
            <div class="card-body">
                <div class="container py-2">
                    <div class="row ">
                        <div class="col-lg-8"  id="slider">
                            <div id="myCarousel" class="carousel slide shadow">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner">
                                    <div class="active carousel-item" data-slide-number="0">
                                        <img src="http://placehold.it/1200x480&amp;text=one" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="1">
                                        <img src="http://placehold.it/1200x480/888/FFF" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="2">
                                        <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="3">
                                        <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="4">
                                        <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="5">
                                        <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="6">
                                        <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="7">
                                        <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="8">
                                        <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="9">
                                        <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                                    </div>

                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                                <!-- main slider carousel nav controls -->


                                <ul class="carousel-indicators list-inline mx-auto border px-2">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=one" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=two" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-6" data-slide-to="8" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-7" data-slide-to="9" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="card" style="height: 21rem">
                                <div class="card-header">
                                    <h2>รายละเอียด</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th scope="row">เงินมัดจำ</th>
                                            <td>6000 บาท</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">จ่ายล่วงหน้า</th>
                                            <td>1 เดือน</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">รายเดือน</th>
                                            <td>5500 บาท</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ค่าไฟ</th>
                                            <td>4 บาทต่อยูนิต</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ค่าน้ำ</th>
                                            <td>7 บาทต่อยูนิต</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3>สิ่งอำนวยความสะดวก</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 > สิ่งอำนวยความสะดวก ภายในห้อง</h5>
                                            <div class="container" style="padding-top: 1rem">
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ลิฟท์</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ที่จอดรถ</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> สระว่ายน้ำ</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ฟิตเนส</p>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <h5> สิ่งอำนวยความสะดวก ภายในอาคาร</h5>
                                            <div class="container" style="padding-top: 1rem">
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ลิฟท์</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ที่จอดรถ</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> สระว่ายน้ำ</p>
                                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ฟิตเนส</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3>ติดต่อสอบถาม</h3>
                                </div>
                                <div class="card-body">
                                    <p class="col-6"> เบอร์โทรศัพท์ :</p>
                                    <p class="col-6"> Email :</p>
                                    <p class="col-6">Line ID :</p>

                                </div>
                            </div>
                            <div style="padding-top: 2rem;">
                                <button type="button"   class="btn btn-outline-success w-100">จองห้อง</button>
                            </div>


                        </div>
                    </div>

                </div>





            </div>

        </div>

    </div>
@endsection
