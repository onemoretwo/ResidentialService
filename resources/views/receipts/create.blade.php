@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            /*margin:10px;*/
            /*font-size:16px;*/
        }

        .h-set {
            height: 400px;
        }

        .inner{
            margin: 7px;
            padding: 7px 7px 0;
        }

        p {
            margin-bottom: 0.3rem;
        }

        .scroll {
            overflow: auto;
        }

        .numberf{
            position: absolute;
            right: 30px;
            top: 10px;
            font-weight: bold;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container align-content-center">
        <div class="card" style="text-align: center">
            <h1 style="margin: 20px 0;">แบบฟอร์มออกบิล</h1>
            <hr>
            <div class="card-body row">
                <div class="col-md-6">
                <form class="container" action="{{route('receipts.store')}}" method="POST">
                    @csrf
                    <form method="post" action="{{ route('receipt.show.report') }}">
                        @csrf
                    <div class="form-row" style="padding-top: 1rem">
                        <div class="col-md-3 mb-3">
                            <label for="building">ตึก</label>
                            <select class="custom-select" id="building" name="building_name" required>
                                <option selected disabled value="">เลือกตึก</option>
                                <option value="A">ตึก A</option>
                                <option value="B">ตึก B</option>
                                <option value="C">ตึก C</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="floor">ชั้น</label>
                            <select class="custom-select" id="floor" name="building_floor" required>
                                <option selected disabled value="">เลือกชั้น</option>
                                <option value="1">ชั้น 1</option>
                                <option value="2">ชั้น 2</option>
                                <option value="3">ชั้น 3</option>
                                <option value="4">ชั้น 4</option>
                                <option value="5">ชั้น 5</option>
                                <option value="6">ชั้น 6</option>
                                <option value="7">ชั้น 7</option>
                                <option value="8">ชั้น 8</option>
                                <option value="9">ชั้น 9</option>

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="numRoom">เลขห้อง</label>
                            <input type="text" class="form-control" id="numRoom" name="room_number" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info" style="height: 37px;margin-top: 30px;margin-left: 20px">ดูรายงาน</button>
                    </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="roomPrice">ค่าห้อง</label>
                            <input type="number" class="form-control disabled" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                    </div>
                    <div class="row" style="padding-top: 1rem;margin-bottom: 30px">
                        <div class="col-md-4">
                            <label for="roomPrice">ยูนิตไฟ</label>
                            <input type="number" class="form-control" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                        <div class="col-md-4">
                            <label for="roomPrice">ยูนิตน้ำ</label>
                            <input type="number" class="form-control" id="roomPrice" min="0" data-bind="value:replyNumber" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success">ออกบิล</button>
                </form>


                </div>

                <div class="col-6 scroll">
                    <div class="card h-set">
                        <div class="card-header" style="text-align: center">รายงานของห้อง</div>
                        @if($reports === null)
                            <div>
                                <h3 style="margin-top: 30px">No report</h3>
                            </div>
                        @elseif($reports->count() === 0)
                            <div>
                                <h3 style="margin-top: 30px">No report</h3>
                            </div>
                        @else
                            @php
                                $i = 0
                            @endphp
                            @foreach($reports as $report)
                                @php( $i++ )
                                <div class="card inner row">
                                    <div style="text-align: left;font-size: 14px">
                                        <p style="color: #808588;margin-bottom: 0">ผู้แจ้ง : {{ $report->user->tile . " " . $report->user->first_name . "     " . $report->user->last_name }}</p>
                                        <p class="numberf">{{ $i }}</p>
                                    </div>
                                    <hr style="margin: 0.3rem">
                                    <div style="text-align: left;padding-left: 30px">
                                        <p>เรื่อง : {{ $report->title }}</p>
                                        <p>{{ $report->detail }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>

            </div>
        </div>



    </div>
@endsection
