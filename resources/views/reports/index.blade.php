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
    <div class="container justify-content-center">
        <div class="card " style="height: 40rem">
            <div class="card-header ">
                <div class="text-center">
                    <h3>รายงานและแจ้งซ่อม</h3>
                </div>
                <form action="{{ route('reports.index.search') }}" method="GET">
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="building">ตึก</label>
                            <select class="custom-select" id="building"  name="building" required>
                                <option selected disabled value="">เลือกตึก</option>
                                <option value="1">ตึก A</option>
                                <option value="2">ตึก B</option>
                                <option value="3">ตึก C</option>

                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="floor">ชั้น</label>
                            <select class="custom-select" name="floor" id="floor" required>
                                <option selected disabled value="">เลือกชั้น</option>
                                <option value="1">ชั้น 1</option>
                                <option value="2">ชั้น 2</option>
                                <option value="3">ชั้น 3</option>
                                <option value="4">ชั้น 4</option>
                                <option value="5">ชั้น 5</option>

                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="numRoom">เลขห้อง</label>
                            <input type="text" class="form-control" id="numRoom"  name="number" required>
                        </div>

                        <div class="col-md-3 mb-3" style="padding-top: 2rem">
                            <a href="{{ url('/reports') }}"><button type="button" class="btn btn-outline-primary">รีเซ็ท</button></a>


                            <button type="submit" class="btn btn-outline-primary">ค้นหา</button>
                        </div>
                    </div>
                </form>




                <ul class="nav nav-tabs card-header-tabs"  id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="true">แจ้งเรื่องร้องทุกข์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="repair-tab" data-toggle="tab" href="#repair" role="tab" aria-controls="repair" aria-selected="false">แจ้งซ่อมภายใน</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>--}}
{{--                    </li>--}}
                </ul>
            </div>

            <div class="card-body table-responsive ">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="report" role="tabpanel" aria-labelledby="report-tab">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">เรื่อง</th>
                                <th scope="col">เวลาที่ส่ง</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($reports)
                                    @foreach( $reports as $report)
                                        <tr>
                                            <td>{{ $report->title}}</td>
                                            <td>{{ $report->created_at}}</td>
                                            <td>
                                                <a href="{{route('reports.edit',['report' => $report->id])}}">
                                                    <button type="submit" class="btn btn-outline-primary">แสดง</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td class=" text-black-50" colspan="3">
                                            ไม่มีเรื่องร้องทุกข์

                                        </td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-pane fade table-responsive" id="repair" role="tabpanel" aria-labelledby="repair-tab">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">เรื่อง</th>
                                <th scope="col">เวลาที่ส่ง</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($repairs)
                                    @foreach( $repairs as $repair)
                                        <tr>
                                            <td>{{  $repair->title}}</td>
                                            <td>{{  $repair->created_at}}</td>
                                            <td>
                                                <a href="{{route('reports.edit',['report' => $repair->id])}}">
                                                    <button type="submit" class="btn btn-outline-primary">แสดง</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td class=" text-black-50" colspan="3">
                                            ไม่มีเรื่องแจ้งซ่อม
                                        </td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
