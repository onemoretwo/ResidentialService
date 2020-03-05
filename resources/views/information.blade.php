@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            margin:10px;
            font-size:16px;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="height: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">ข้อมูลหอพัก</h5>
                        <div class="container">
                            <dl class="row" style="padding-top: 1rem; margin-left: 2rem">
                                <dt class="col-sm-3">จำนวนห้อง</dt>
                                <dd class="col-sm-9">40 ห้อง</dd>

                                <dt class="col-sm-3">ประเภทห้อง</dt>
                                <dd class="col-sm-9 ">
                                    <p>2 ห้อง</p>
                                </dd>

                            </dl>
                        </div>
                        <h5 class="text-lg-center" >สิ่งอำนวยความสะดวก</h5>
                        <div class="container">
                            <ul class="row" style="padding-top: 1rem">
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ลิฟท์</p>
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ที่จอดรถ</p>
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> สระว่ายน้ำ</p>
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ฟิตเนส</p>

                            </ul>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-6">

                <div class="card text-center" style="height: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">ที่ตั้ง</h5>
                        <p class="card-text" style="color: rgba(39,44,36,0.62)">เอลลิโอ เดล มอสส์ พหลโยธิน 34
                            ซ.พหลโยธิน 34 แยก 11 </p>
                        <img src="{{ asset('images/map1.png') }}" class="w-100 "  alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
