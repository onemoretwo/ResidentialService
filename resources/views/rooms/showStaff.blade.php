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
                <h1> ตึก A ชั้น 3 ห้อง 331</h1>
            </div>
            <div class="card-body">
                <div class="container py-2">

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3>รายละเอียดห้อง</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 >  </h5>
                                            <div class="container" style="padding-top: 1rem">
                                                <p> ห้องขนาด </p>
                                                <p> ประเถท </p>


                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <h5>  </h5>
                                            <div class="container" style="padding-top: 1rem">

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>...</h3>
                                </div>
                                <div class="card-body"></div>
                            </div>
                            <div style="padding-top: 2rem;">
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-4">
                <div style="padding-top: 1rem">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label >ชื่อ :</label>
                                <label > title name </label>
                                <label > lastname  </label>
                            </div>

                            <div>
                                <label >ที่อยู่ :</label>
                                <label >address</label>
                            </div>
                            <div>
                                <label >Email :</label>
                                <label >email</label>
                            </div>
                            <div>
                                <label >เบอร์ติดต่อ :</label>
                                <label >tel</label>
                            </div>





                        </div>
                    </div>
                </div>
            </div>


    </div>
@endsection
