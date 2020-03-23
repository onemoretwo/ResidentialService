@extends('layouts.app')
@section('style')
    <style>
        /*.upper {*/
        /*    margin-top: 50px;*/
        /*}*/
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
                <h1 class="card-title">แบบฟอร์มแจ้งพัสดุ</h1>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form method="post" action="{{ route('packages.store') }}">
                            @csrf
                            <div class="card" >
                                <div class="card-body">
                                    <div class="container">
                                        <div class="form-row" style="padding-top: 1rem">
                                            <div class="col-md-2 mb-3">
                                                <label for="building">คำนำหน้า</label>
                                                <select class="custom-select" id="building" name="title" required>
                                                    <option selected disabled value="">เลือกคำนำหน้า</option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นางสาว">นางสาว</option>

                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="numRoom">ชื่อจริง</label>
                                                <input type="text" class="form-control" id="numRoom" name="first_name" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="numRoom">นามสกุล</label>
                                                <input type="text" class="form-control" id="numRoom" name="last_name" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
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
