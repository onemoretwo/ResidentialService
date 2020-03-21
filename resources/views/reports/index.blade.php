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

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="report" role="tabpanel" aria-labelledby="report-tab">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">เรื่อง</th>
                                <th scope="col">เวลาที่ส่ง</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $reports as $report)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{  $report->title}}</td>
                                        <td>{{  $report->created_at}}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-primary">แสดง</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-pane fade" id="repair" role="tabpanel" aria-labelledby="repair-tab">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">เรื่อง</th>
                                <th scope="col">เวลาที่ส่ง</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $repairs as $repair)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{  $repair->title}}</td>
                                        <td>{{  $repair->created_at}}</td>
                                        <td>
                                            <a href="{{route('reports.edit',['report' => $repair->id])}}">
                                                <button type="submit" class="btn btn-outline-primary">แสดง</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
