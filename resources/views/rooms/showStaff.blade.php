@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            /*font-size:16px;*/
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
        <div class="card bg-secondary" >
            <div class="card-header text-white">
                <h1> ตึก {{ $room->building->name }} ชั้น {{ $room->floor }} ห้อง {{ $room->number }}</h1>
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
                                            <div class="container" style="padding-top: 1rem">
                                                <dl class="row">
                                                    <dt class="col-8"> ห้องขนาด </dt>
                                                    <dd class="col-4"> {{ $room->type->size }}  ตร.ม</dd>

                                                    <dt class="col-8"> ประเภท </dt>
                                                    <dd class="col-4"> {{ $room->type->name }} </dd>

                                                    <dt class="col-8"> ราคา </dt>
                                                    <dd class="col-4"> {{ $room->type->price }}   บาท</dd>

                                                </dl>

{{--                                                <p> ห้องขนาด </p>--}}
{{--                                                <p> ประเถท </p>--}}


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
        @if($room->users == null)
            <div class="row">
                <div class="col-4">
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
                @else
                    asdasd
                @endif



    </div>
@endsection
