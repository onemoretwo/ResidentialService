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
    <div class="">
        <div class="">
            <h1 class="text-center">จ่ายบิลออนไลน์</h1>
        </div>
    </div>
    <div class="container row center" style="margin-top: 50px;max-width: 1300px">
        <div class="col-md-8 inner">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    รายละเอียดบิล
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 text-left">
                                <dl class="row">
                                    <dt class="col-12">ชื่อ : {{ $user->title }} {{ $user->first_name }}  {{ $user->last_name }}</dt>
                                    <dt class="col-12">ที่อยู่ : {{ $user->address }} </dt>
                                    <dt class="col-12">ห้อง : ตึก {{ $user->room->building->name }} ชั้น {{ $user->room->floor }} เลขห้อง {{ $user->room->number }} </dt>

                                </dl>

                            </div>
                            <div class="col-6 ">
                                <dl class="row">
                                    <dt class="col-12 ">เลขประจำตัวผู้เสียภาษี : 0016302283835</dt>
                                    <dt class="col-12 ">วันที่ : {{ \Carbon\Carbon::parse($bill->activated_at)->format('d/m/Y')}} </dt>
                                </dl>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th >รายการ</th>
                                <th >จำนวนยูนิต</th>
                                <th >ราคาต่อยูนิต</th>
                                <th >จำนวนเงิน</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th >ค่าไฟ </th>
                                <td>{{ $bill->electric_unit }}</td>
                                <td>{{ $bill->room->building->electric_rate }}</td>
                                <td>{{ $bill->electric_unit * $bill->room->building->electric_rate }}</td>
                            </tr>
                            <tr>
                                <th >ค่าน้ำ</th>
                                <td>{{ $bill->water_unit }}</td>
                                <td>{{ $bill->room->building->water_rate }}</td>
                                <td>{{ $bill->water_unit * $bill->room->building->water_rate }}</td>
                            </tr>
                            <tr>
                                <th>ค่าห้อง</th>
                                <td colspan="2"></td>
                                <td>{{ $bill->room_price }}</td>
                            </tr>
                            @if($request->status == 'รอการชำระเงิน')
                            <tr>
                                <th>ค่ามัดจำ</th>
                                <td colspan="2"></td>
                                <td>
                                    {{ $bill->room_price }}
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <th colspan="2"></th>
                                <td  >รวม</td>
                                <td>
                                    @if($request->status == 'รอการชำระเงิน')
                                        {{ ($bill->room_price)*2 }}
                                    @else
                                        {{ $bill->total_price  }}

                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary w-100">จ่ายเงิน</button>
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
                <button type="button" class="btn btn-outline-success w-100">เติมเงิน</button>
            </div>
            <div class="card" style="margin-top: 50px;">
                <div class="card-header" style="text-align: center">
                    จัดการ
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-home"></i>&nbsp;&nbsp;<a class="text" href="{{ route('rooms.show.user',['id' => $room]) }}">ห้องของฉัน</a></li>
                    <li class="list-group-item"><i class="fas fa-exclamation-triangle errer-sign"></i>&nbsp;&nbsp;<a class="text" href="{{ route('user.create.report',['room' => $room]) }}">แจ้งซ่อมและรายงานปัญหา</a></li>
                    <li class="list-group-item"><i class="fas fa-file-invoice-dollar bill-sign"></i>&nbsp;<a href="{{ route('receipts.show',['receipt' => $room]) }}" class="text">บิลประจำเดือน</a></li>
                    <li class="list-group-item"><i class="fas fa-box-open package-sign"></i><a class="text" href="{{ route('room.users.packages',['id' => $room]) }}">ตรวจสอบพัสดุ</a><span class="badge badge-danger"></span></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
