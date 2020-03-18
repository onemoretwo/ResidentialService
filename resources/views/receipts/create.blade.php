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
        <div class="card" >
            <div class="card-body">
                <h1 class="card-title">แบบฟอร์มออกบิล</h1>
                <div class="container">
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
                    <div class="row">
                        <div class="col-md-3">
                            <label for="roomPrice">ค่าห้อง</label>
                            <input type="number" class="form-control disabled" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                    </div>
                    <div class="row" style="padding-top: 1rem">
                        <div class="col-md-3">
                            <label for="roomPrice">ยูนิตไฟ</label>
                            <input type="number" class="form-control" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                        <div class="col-md-3">
                            <label for="roomPrice">ยูนิตน้ำ</label>
                            <input type="number" class="form-control" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                    </div>


                </div>

            </div>
            <button type="button" class="btn btn-outline-success">ออกบิล</button>

        </div>



    </div>
@endsection