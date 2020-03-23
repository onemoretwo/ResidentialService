@extends('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="container justify-content-center">
        <div class="card">
            <div class="card-header">
                <h1>ข้อมูลผู้ดูแล</h1>
            </div>
            <div class="card-body">
                <div class="row" style="font-size: large">
                    <div class="col-2"></div>
                    <div class="col-2">
                        <div>ชื่อ</div>
                        <div>นามสกุล</div>
                        <div>อีเมล</div>
                        <div>วันเกิด</div>
                        <div>รหัสบัตรประชาชน</div>
                        <div>ที่อยู่</div>
                        <div>เบอร์โทรศัพท์</div>
                        <div>วันที่เพิ่มเข้าระบบ</div>
                    </div>
                    <div class="col-1 text-right">
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                        <div>:</div>
                    </div>
                    <div class="col-7">
                        <div> {{ $user->title }}{{ $user->first_name }}</div>
                        <div> {{ $user->last_name }}</div>
                        <div> {{ $user->email }}</div>
                        <div> {{ $user->birth_date }}</div>
                        <div> {{ $user->citizen_id }}</div>
                        <div> {{ $user->address }}</div>
                        <div> {{ $user->phone_number_1 }}</div>
                        <div> {{ $user->created_at }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right" style="margin-top: 10px">
            <a href="{{ route('admin.destroy', ['admin' => $user->id]) }}" type="button" class="btn btn-danger"> ลบผู้ดูแล </a>
        </div>
    </div>
@endsection
