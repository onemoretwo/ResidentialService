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
        <div class="card justify-content-center" >
            <div class="card-body">
                <h1 class="card-title text-center">ส่งฟอร์มการจองห้อง</h1>
                <div class="container">
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">ชื่อ</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="email" >

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
