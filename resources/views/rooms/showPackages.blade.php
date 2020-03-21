@extends('layouts.app')

@section('style')
    <style>
        .card-adapt {
            margin: 25px 30px 25px 20px;
        }

        .card-bot {
            padding: 1rem 1.25rem 1rem;
        }

        .inline{
            display: flex;
            height: 80px;
        }

        .room-detail{
            width: 13%;
            padding: 15px 15px 5px;
            border-right: solid 1px #999da0;
        }

        .package-detail {
            width: 100%;
            padding: 0.5rem 15px;
        }

        .date{
            margin-top: -40px;
            float: right;
        }

        .icon {
            height: 40px;
            width: 40px;
            position: absolute;
            right: -7px;
            top: -20px;
        }

        .icon-con{
            position: absolute;
            right: 50px;
        }

        .marg{
            display: flex;
            margin: 12px 0;
        }
    </style>
    @endsection

@section('content')
    <div class="container align-content-center upper">

        <div class="card ">
            <div class="card-header">
                <h1 class="card-title">พัสดุ ห้องของฉัน</h1>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        @if($packages->count() === 0)
                            <h3>ไม่มีพัสดุ</h3>
                        @else

                            @foreach($packages as $package)
                                <div>
                                    <div class="card card-adapt">
                                        <div class="card-body card-bot">
                                            <img class="icon" src="images/gift.png" alt="">
                                            <div class="inline">
                                                <div class="package-detail">
                                                    <p><b style="color: #777b7e">ชื่อผู้รับพัสดุ :</b>&nbsp;&nbsp;&nbsp; {{ $package->recipient }} </p>
                                                    <p><b style="color: #777b7e">รายละเอียด :</b>&nbsp;&nbsp;&nbsp;&nbsp; {{ $package->detail }}</p>
                                                    <p class="date" style="color: #808588">{{ $package->created_at }}</p>
                                                </div>
                                            </div>
                                            <hr style="margin: 0.4rem 0">
                                            <div class="marg">
                                                <p style="margin-bottom: 0.1rem;color: #808588">ผู้รับผิดชอบ :  {{ $package->user->first_name }}    {{ $package->user->last_name }}</p>
                                                <a class="icon-con btn btn-outline-info" style="color: #0080fe;" href="{{ route('package.confirm',['room' => $package->room->id, 'package' => $package->id]) }}">รับพัสดุแล้ว</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>


    </div>
    @endsection
