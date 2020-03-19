@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            margin:10px;
            font-size:16px;
        }
        .input-aligned {
            line-height:34px;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container justify-content-center">
        <div class="">
            <div class="card" >
                <div class="card-body">
                    <h3 class="card-title text-center">ฟอร์มการจองห้อง</h3>
                    <div  class="container m-md-3" style="padding-top: 2rem">
                        <dl class="row">
                            <dt class="col-sm-3 input-aligned">ชื่อ :</dt>
                            <dd class="col-sm-9">
                                <input class="form-control w-25" type="text">
                            </dd>
                            <dt class="col-sm-3 input-aligned">นามสกุล :</dt>
                            <dd class="col-sm-9">
                                <input class="form-control w-25" type="text">
                            </dd>


                            <dt class="col-sm-3 input-aligned">ที่อยุ่ :</dt>
                            <dd class="col-sm-9">
                                <input class="form-control w-50" type="text">
                            </dd>

                            <dt class="col-sm-3 input-aligned">เบอร์โทรศัพท์ :</dt>
                            <dd class="col-sm-9">
                                <input class="form-control w-25" type="text">
                            </dd>

                            <dt class="col-sm-3 input-aligned">Email :</dt>
                            <dd class="col-sm-9">
                                <input class="form-control w-25" type="text">
                            </dd>


                        </dl>
                    </div>

                    <h3 class="card-title text-center">ข้อมูลห้องที่จอง</h3>
                    <div  class="container m-md-3" style="padding-top: 2rem">
                        <dl class="row">
                            <dt class="col-sm-3">ตึก :</dt>
                            <dd class="col-sm-9">A</dd>

                            <dt class="col-sm-3">ชั้น :</dt>
                            <dd class="col-sm-9"> 1</dd>

                            <dt class="col-sm-3">เลขห้อง :</dt>
                            <dd class="col-sm-9">101</dd>

                            <dt class="col-sm-3 text-truncate">แบบห้อง :</dt>
                            <dd class="col-sm-9">1 ห้องน้ำ 1 ห้องนอน</dd>

                            <dt class="col-sm-3">ขนาด :</dt>
                            <dd class="col-sm-9">10 ตร.ม</dd>

                            <dt class="col-sm-3">เฟอร์นิเจอร์ :</dt>
                            <dd class="col-sm-9">เตียงคู่ ตู้เย็น ทีวี โต๊ะ เก้าอี้ ตู้เสื้อผ้า</dd>

                            <dt class="col-sm-3">ราคามัดจำ :</dt>
                            <dd class="col-sm-9">1000 บาท</dd>

                            <dt class="col-sm-3">ราคาเช่า :</dt>
                            <dd class="col-sm-9">2000 บาท</dd>

                            <dt class="col-sm-3">ค่าน้ำ :</dt>
                            <dd class="col-sm-9">4 บาทต่อยูนิต</dd>
                            <dt class="col-sm-3">ค่าไฟ :</dt>
                            <dd class="col-sm-9">7 บาทต่อยูนิต</dd>

                            <dt class="col-sm-3">สัญญา :</dt>
                            <dd class="col-sm-9">1 ปี</dd>

                        </dl>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary btn-lg">รีเซ็ท</button>
                        <button type="button" class="btn btn-success btn-lg">ยืนยันการส่ง</button>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection
