@extends('layouts.app')

@section('style')
    <style>
        .head-bot{
            margin: auto;
            height: 160px;
            border-bottom: solid 1px darkgray;
            max-width: 1300px;
        }

        .center{
            margin: auto;
        }

        .icon-head{
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .center-item{
            justify-content: center;
        }

        .inner{
            margin-right: 50px;
        }

        .alert-message{
            padding: 20px 20px 0;
            border-right: 1px solid;
            border-bottom: 1px solid;
            border-radius: 0px 26px 26px 26px;
        }

        .header-text{
            -webkit-text-stroke: 1px black;
            color: white;
            text-shadow:
                3px 3px 0 #000,
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;
            margin-top: 30px;
            font-size: 50px;
        }

        .price{
            color: gray;
        }

        .divider{
            width: 400px;
            border-bottom: 3px double slategray;
            margin-bottom: 5px;
        }

        p{
            margin-bottom: 0.3rem;
        }

        .errer-sign{
            color: #d23f3c;
        }

        .bill-sign{
            color: cadetblue;
        }

        .package-sign{
            color: mediumseagreen;
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

        .my{
            margin-left: 150px;
            margin-top: 30px;
            width: 100px;
        }

        #have {
            margin-top: 15px;
            margin-bottom: 15px;
            color: red;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container">
        <div class="">
            <h1 class="text-center">จ่ายบิลออนไลน์</h1>
            <div class="row">
                <div class="col-6 text-left">
                    <dl class="row">
                        <dt class="col-2">ชื่อ : </dt>
                        <dd class="col-10">{{ $user->title }} {{ $user->first_name }}  {{ $user->last_name }}</dd>
                        <dt class="col-2">ที่อยู่ : </dt>
                        <dd class="col-10"> {{$user->address}}</dd>
                    </dl>

                </div>
                <div class="col-6 ">
                    <dl class="row">
                        <dt class="col-10 text-right">เลขประจำตัวผู้เสียภาษี : </dt>
                        <dd class="col-2">0016302283835</dd>
                        <dt class="col-10 text-right">วันที่  : </dt>
                        <dd class="col-2"> {{ \Carbon\Carbon::parse($bill->activated_at)->format('d/m/Y')}} </dd>
                    </dl>

                </div>
            </div>
        </div>
    </div>
    <div class="container row center" style="margin-top: 50px;max-width: 1300px">
        <div class="col-md-7 inner">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    รายละเอียดบิล

                </div>
                <div class="card-body">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center">
                <div class="card-header">
                    My Cash
                </div>
                <div class="card-body" style="font-size: 30px">
                    &nbsp;&nbsp;{{ $user->money }}฿
                </div>
            </div>
            <div class="card" style="margin-top: 50px;">
                <div class="card-header" style="text-align: center">
                    จัดการ
                </div>
{{--                <ul class="list-group list-group-flush">--}}
{{--                    <li class="list-group-item"><i class="fas fa-home"></i>&nbsp;&nbsp;<a class="text" href="{{ route('rooms.show.user',['id' => $room]) }}">ห้องของฉัน</a></li>--}}
{{--                    <li class="list-group-item"><i class="fas fa-exclamation-triangle errer-sign"></i>&nbsp;&nbsp;<a class="text" href="{{ route('user.create.report',['room' => $room]) }}">แจ้งซ่อมและรายงานปัญหา</a></li>--}}
{{--                    <li class="list-group-item"><i class="fas fa-file-invoice-dollar bill-sign"></i>&nbsp;<a href="{{ route('receipts.show',['id' => $room]) }}" class="text">บิลประจำเดือน</a></li>--}}
{{--                    <li class="list-group-item"><i class="fas fa-box-open package-sign"></i><a class="text" href="{{ route('room.users.packages',['id' => $room]) }}">ตรวจสอบพัสดุ</a><span class="badge badge-danger"></span></li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
@endsection
