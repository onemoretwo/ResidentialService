@extends('layouts.app')
@section('style')
    <style>
        .upper {
            margin-top: 50px;
        }
        .row {
            margin: 50px 0;
        }

        label {
            margin-bottom: 20px;
        }

        #detail {
            height: 200px;
        }
    </style>
    @endsection

@section('content')
    <div class="container align-content-center upper">
        <div class="card ">
            <div class="card-header">
                <h1 class="card-title">แบบฟอร์ม พัสดุ</h1>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="PUT">

                            <div class="card" >
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="name">ชื่อผู้รับพัสดุ</label>
                                                <input type="text" class="form-control" id="head" name="name" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 form-group">
                                                <label for="detail">รายละเอียด และ หมายเหตุ</label>
                                                <textarea class="form-control" id="detail" rows="3" name="detail"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <button type="submit" class="btn btn-outline-success">เพิ่มพัสดุ</button>

                            </div>

                        </form>


                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>


    </div>
    @endsection
