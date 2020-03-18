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
            <div class="col-md-9">
                <div class="card" style="height: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">ข้อมูลผู้เช่า</h5>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="..." class="rounded float-left" width="200" height="200" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <dl class="row" style="padding-top: 1rem; margin-left: 2rem">

                                        <dt class="col-sm-3"><i class="fas fa-user"></i> ชื่อ :</dt>
                                        <dd class="col-sm-9">40 ห้อง</dd>

                                        <dt class="col-sm-3"><i class="far fa-envelope"></i> email :</dt>
                                        <dd class="col-sm-9 "> _จหก</dd>

                                        <dt class="col-sm-3"><i class="fas fa-map-marker-alt"></i> ที่อยู่ :</dt>
                                        <dd class="col-sm-9">40 ห้อง</dd>

                                        <dt class="col-sm-3"><i class="fas fa-phone-square-alt"></i> เบอร์ : </dt>
                                        <dd class="col-sm-9">40 ห้อง</dd>

                                    </dl>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-lg-center" style="padding-top: 1rem">ข้อมูลห้อง</h5>
                        <div class="container">
                                <p class="col-6"><i class="far fa-building"></i> ตึก</p>
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> ชั้น</p>
                                <p class="col-6"><i class="fas fa-check-circle" style="color: #1c7430"></i> เลขห้อง</p>
                                <p class="col-6"><i class="fas fa-wifi"></i> Wifi code</p>

                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-3">

                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        ผู้ที่อยุ่อาศัยด้วย
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Arnon</li>
                        <li class="list-group-item">Patipat</li>
                        <li class="list-group-item">Gomin</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
@endsection
