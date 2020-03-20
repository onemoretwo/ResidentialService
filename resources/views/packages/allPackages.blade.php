@extends('layouts.app')

@section('style')
    <style>
        .card-adapt {
            margin: 25px 30px 25px 20px;
        }

        .card-bot {
            padding: 0.5rem 1.25rem 0.5rem;
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
            margin-top: -30px;
            float: right;
        }
    </style>
    @endsection

@section('content')
    <div class="container align-content-center upper">

        <div class="card ">
            <div class="card-header">
                <h1 class="card-title">พัสดุทั้งหมด</h1>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        @foreach($packages as $package)
                        <div>
                            <div class="card card-adapt">
                                <div class="card-body card-bot">
                                    <div class="inline">
                                        <div class="room-detail">
                                            <h5>ตึก  : {{ $package->room->building->name }}</h5>
                                            <h5 style="margin-bottom: 0">ห้อง : {{ $package->room->number }}</h5>
                                        </div>
                                        <div class="package-detail">
                                            <p>ชื่อผู้รับพัสดุ : {{ $package->recipient }} </p>
                                            <p>รายละเอียด : {{ $package->detail }}</p>
                                            <p class="date" style="color: #808588">{{ $package->created_at }}</p>
                                        </div>
                                    </div>
                                    <hr style="margin: 0.4rem 0">
                                    <p style="margin-bottom: 0.1rem;color: #808588">ผู้รับผิดชอบ : {{ $package->user->first_name }}</p>
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>


    </div>
    @endsection
