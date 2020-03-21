@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            /*font-size:16px;*/
        }

        #detail {
            height: 200px;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container align-content-center">
        <div class="card ">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs"  id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">แจ้งเรื่องร้องทุกข์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">แจ้งซ่อมภายใน</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card" >
                            <form action="{{ route('reports.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <h1 class="card-title">แบบฟอร์มแจ้งเรื่องร้องทุกข์</h1>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="head">เรื่อง</label>
                                                <input type="text" class="form-control" id="head" name="title" required>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 1rem">
                                            <div class="col-md-8">
                                                <label for="detail">รายละเอียด</label>
                                                <textarea class="form-control" id="detail" rows="3" name="detail"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="room_id" value="{{ $room_id }}" >
                                    </div>

                                </div>
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-outline-success">ส่งคำขอ</button>
                                </div>

                            </form>

                        </div>


                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card" >
                            <form action="{{ route('reports.repair.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <h1 class="card-title">แบบฟอร์มแจ้งซ่อม</h1>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="head">สิ่งที่ต้องการซ่อม</label>
                                                <input type="text" class="form-control" id="head" name="title" required>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 1rem">
                                            <div class="col-md-8">
                                                <label for="detail">รายละเอียด</label>
                                                <textarea class="form-control" id="detail" rows="3" name="detail"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="room_id" value="{{ $room_id }}" >
                                    </div>


                                </div>
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-outline-success">ส่งคำขอ</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>


    </div>
@endsection
