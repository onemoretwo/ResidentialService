@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            font-size:16px;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container justify-content-center">
        <div class="card" style="height: 40rem;">
            <div class="card-header"> <div class="form-row" style="padding-top: 1rem">
                    รายชื่อห้องที่ถูกจอง
                    <div class="row"></div>


                </div>


            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ตึก</th>
                        <th scope="col">ชั้น</th>
                        <th scope="col">ห้อง</th>
                        <th scope="col">วัน-เวลา</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="row">1</th>
                        <th scope="row">1</th>

                        <td>ซ่อมแอร์</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">แสดง</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">1</th>
                        <th scope="row">1</th>

                        <td>Jacobฟกหฟหกฟก</td>
                        <td><button type="button" class="btn btn-outline-primary">แสดง</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th scope="row">1</th>

                        <th scope="row">1</th>

                        <td >Larry the Bird</td>
                        <td><a href="{{ route("requests.show",1) }}"><button type="button" class="btn btn-outline-primary">แสดง</button></a>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
