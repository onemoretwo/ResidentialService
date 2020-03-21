@extends('layouts.app')
@section('style')
    <style>
        body {
            background-color:#1d1d1d !important;
            font-family: "Asap", sans-serif;
            margin:10px;
            font-size:16px;
        }
    </style>
@endsection
<script src="https://kit.fontawesome.com/56e49317d8.js" crossorigin="anonymous"></script>

@section('content')
    <div class="container justify-content-center">
        <div class="card" style="height: 40rem;">
            <div class="card-header"> <div class="form-row" style="padding-top: 1rem">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="building">ตึก</label>
                            <select class="custom-select" id="building" required>
                                <option selected disabled value="">เลือกตึก</option>
                                <option>ตึก A</option>
                                <option>ตึก B</option>
                                <option>ตึก C</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="floor">ชั้น</label>
                            <select class="custom-select" id="floor" required>
                                <option selected disabled value="">เลือกชั้น</option>
                                <option>ชั้น 1</option>
                                <option>ชั้น 2</option>
                                <option>ชั้น 3</option>
                                <option>ชั้น 4</option>
                                <option>ชั้น 5</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="numRoom">เลขห้อง</label>
                            <input type="text" class="form-control" id="numRoom" required>

                        </div>
                        <div class="col-md-3 mb-3" style="padding-top: 2rem">
                            <button type="button" class="btn btn-outline-primary">ค้นหา</button>

                        </div>

                    </div>


                </div>


            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ตึก</th>
                        <th scope="col">ชั้น</th>
                        <th scope="col">ห้อง</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                            @if(auth()->check())
                                @if(auth()->user()->isAdmin())
                                    <tr>
                                        <td>{{ $room->building_id }}</td>
                                        <td>{{ $room->floor }}</td>
                                        <th scope="row">{{ $room->number }}</th>
                                        <td><a href="{{ route("rooms.show.staff", ['id' => $room->id]) }}"><button type="button" class="btn btn-outline-primary">แสดง</button></a>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>{{ $room->building->name }}</td>
                                        <td>{{ $room->floor }}</td>
                                        <th scope="row">{{ $room->number }}</th>
                                        <td><a href="{{ route("rooms.show",['room' => $room->id]) }}"><button type="button" class="btn btn-outline-success">แสดง</button></a>
                                        </td>

                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
