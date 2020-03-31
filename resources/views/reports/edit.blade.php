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
            <form action="{{ route('reports.update',['report' => $report->id ]) }}" method="post">
                @method('PUT')
                @csrf
                <h1 class="card-header">เรื่อง {{ $report->title }}</h1>

                <div class="card-body">
                    <div class="container">
                        <div class="form-row" style="padding-top: 1rem">
                            <div class="col-md-2 mb-3">
                                <label for="building">ตึก</label>
                                <input class="form-control" id="building" type="text"   placeholder="ตึก A" disabled>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="floor">ชั้น</label>
                                <input class="form-control" id="floor" type="text" value="{{ $room->floor }}" placeholder="ชั้น 5" disabled>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="numRoom">เลขห้อง</label>
                                <input class="form-control" id="numRoom" type="text" value="{{ $room->number }}" placeholder="501" disabled>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">

                                <textarea  class="form-control" name=""  disabled>{{ $report->detail }}</textarea>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="card-footer justify-content-end">
{{--                    <form action="{{ route('reports.destroy', ['report' => $report->id]) }}" method="POST">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
                        <button type="submit" class="btn btn-outline-danger">ปฎิเสธ</button>
{{--                    </form>--}}
                    <button type="submit" class="btn btn-outline-success">อนุมัติ</button>
                </div>
            </form>




        </div>



    </div>
@endsection
@section('script')
    <script>

    </script>
    @endsection
