@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            /*font-size:16px;*/
        }

        .newwidth{
            max-width: 1300px;
        }

        .text {
            -webkit-transition: background-size 0.4s ease;
            transition: background-size 0.4s ease;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(62%, transparent), color-stop(0, #fff87e)) center center/0% 75% no-repeat;
            background: linear-gradient(to bottom, transparent 62%, #fff87e 0) center center/0% 75% no-repeat;
            padding: 0 6px 2px 6px;
            cursor: pointer;
            color: rgba(80, 89, 113, 0.7);
            letter-spacing: 0.08rem;
        }
        .text:hover {
            background-size: 100% 100%;
        }
        .text:active {
            background-size: 80% 100%;
        }

        .errer-sign{
            color: #d23f3c;
        }

        .bill-sign{
            color: cadetblue;
        }

        .wifi-sign{
            color: steelblue;
        }

        .package-sign{
            color: mediumseagreen;
        }

        dt {
            margin-bottom: 1rem;
        }

        .margbot {
            margin-bottom: 20px;
        }

        .wifi{
            width: 200px;
            padding:5px 30px;
            border:none;
            border-radius:4px;
            background-color:lightgreen;
        }

    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container newwidth">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="margin-bottom: 20px">
                            <h5 class="text-lg-center" style="padding-top: 1rem">ข้อมูลห้อง</h5>
                        </div>
                        <div class="container">
                            <div class="row ">
                                <p class="col-3"><i class="fas fa-check-circle" style="color: #1c7430"></i> เลขห้อง : {{ $room->number }}</p>
                                <p class="col-3"><i class="fas fa-check-circle" style="color: #1c7430"></i> ประเภทห้อง : {{ $room->type->name }}</p>
                            </div>
                            <hr>
                            <dl class="row" style="padding-top: 1rem; margin-left: 2rem">

                                <dt class="col-sm-2"><i class="far fa-building"></i>&nbsp;&nbsp;&nbsp; ตึก </dt>
                                <dd class="col-sm-9">{{ $room->building->name }}</dd>

                                <dt class="col-sm-2"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp; ที่อยู่ </dt>
                                <dd class="col-sm-9 "> {{ $room->building->address }}</dd>

                                <dt class="col-sm-2"><i class="fas fa-wifi"></i>&nbsp;&nbsp; Wifi Code </dt>
                                <dd class="col-sm-9">
                                    @if($wifi_code != null)
                                        <div class="row">
                                            <p class="wifi ">{{ $wifi_code->code }}</p>
                                            <p style="margin-left: 30px">(หมดอายุวันที่ {{ $wifi_code->expire_at }})</p>
                                        </div>
                                    @else
                                        ไม่มี wifi package
                                        @endif
                                </dd>

                            </dl>
                            <hr>
                        </div>
                        <div class="card-header" style="margin-bottom: 20px">
                            <h5 class="text-lg-center" style="padding-top: 1rem">ข้อมูลผู้เช่า</h5>
                        </div>
                        @foreach($room->users as $user)
                        <div class="card margbot">
                            <div class="row">
                                <div class="col-md-10">
                                    <dl class="row" style="padding-top: 1rem; margin-left: 2rem">

                                        <dt class="col-sm-2"><i class="fas fa-user"></i> ชื่อ :</dt>
                                        <dd class="col-sm-9">{{ $user->title . " " . $user->first_name . "     " . $user->last_name}}</dd>

                                        <dt class="col-sm-2"><i class="far fa-envelope"></i> email :</dt>
                                        <dd class="col-sm-9 "> {{ $user->email }}</dd>

                                        <dt class="col-sm-2"><i class="fas fa-phone-square-alt"></i> เบอร์ : </dt>
                                        <dd class="col-sm-9">{{ $user->phone_number_1 }}</dd>

                                    </dl>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        จัดการ
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-exclamation-triangle errer-sign"></i>&nbsp;&nbsp;<a class="text" href="{{ route('user.create.report',['room' => $room->id]) }}">แจ้งซ่อมและรายงานปัญหา</a></li>
                        <li class="list-group-item"><i class="fas fa-file-invoice-dollar bill-sign"></i>&nbsp;&nbsp;&nbsp;<a class="text">บิลประจำเดือน</a></li>
                        <li class="list-group-item"><i class="fas fa-box-open package-sign"></i>&nbsp;&nbsp;<a class="text" href="{{ route('room.users.packages',['id' => $room->id]) }}">ตรวจสอบพัสดุ</a><span class="badge badge-danger">{{ $c }}</span></li>
                        <li class="list-group-item"><i class="fas fa-wifi wifi-sign"></i>&nbsp;&nbsp;&nbsp;<a class="text" href="{{ route('room.user.wifi', ['room' => $room->id]) }}">ซื้อ wifi package</a></li>
                        <li class="list-group-item"><i class="fas fa-receipt" style="font-size: 120%"></i>&nbsp;&nbsp;&nbsp;<a class="text" href="{{ route('room.user.statement',['room' => $room->id]) }}">ประวัติการชำระเงินของฉัน</a></li>
                    </ul>
                </div>
            </div>
{{--            <div class="col-md-3">--}}

{{--                <div class="card" style="width: 18rem;">--}}
{{--                    <div class="card-header">--}}
{{--                        ผู้ที่อยุ่อาศัยด้วย--}}
{{--                    </div>--}}
{{--                    <ul class="list-group list-group-flush">--}}
{{--                        <li class="list-group-item">Arnon</li>--}}
{{--                        <li class="list-group-item">Patipat</li>--}}
{{--                        <li class="list-group-item">Gomin</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>

    </div>
@endsection
