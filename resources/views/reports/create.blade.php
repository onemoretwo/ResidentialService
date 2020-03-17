@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            /*font-size:16px;*/
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
                            <div class="card-body">
                                <h1 class="card-title">แบบฟอร์มแจ้งเรื่องร้องทุกข์</h1>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="head">เรื่อง</label>
                                            <input type="text" class="form-control" id="head" required>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 1rem">
                                        <div class="col-md-4">
                                            <label for="detail">รายละเอียด</label>
                                            <textarea class="form-control" id="detail" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row" style="padding-top: 1rem">
                                        <div class="col-md-2 mb-3">
                                            <label for="building">ตึก</label>
                                            <select class="custom-select" id="building" required>
                                                <option selected disabled value="">เลือกตึก</option>
                                                <option>ตึก A</option>
                                                <option>ตึก B</option>
                                                <option>ตึก C</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="floor">ชั้น</label>
                                            <select class="custom-select" id="floor" required>
                                                <option selected disabled value="">เลือกชั้น</option>
                                                <option>ชั้น 1</option>
                                                <option>ชั้น 2</option>
                                                <option>ชั้น 3</option>
                                                <option>ชั้น 4</option>
                                                <option>ชั้น 5</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="numRoom">เลขห้อง</label>
                                            <input type="text" class="form-control" id="numRoom" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="button" class="btn btn-outline-success">ส่งคำขอ</button>

                        </div>


                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card" >
                            <div class="card-body">
                                <h1 class="card-title">แบบฟอร์มแจ้งซ่อม</h1>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="head">สิ่งที่ต้องการซ่อม</label>
                                            <input type="text" class="form-control" id="head" required>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 1rem">
                                        <div class="col-md-4">
                                            <label for="detail">รายละเอียด</label>
                                            <textarea class="form-control" id="detail" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <button type="button" class="btn btn-outline-success">ส่งคำขอ</button>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>


    </div>
@endsection
