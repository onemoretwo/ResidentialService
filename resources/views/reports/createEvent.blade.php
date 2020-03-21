@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Kanit', sans-serif;margin-top: 7%;">
        <div class="card ">
            <div class="card-header">
                CREATE EVENT
            </div>
            <div class="card-body">
                <h5 class="card-title">กรุณากรอกข้อมูลเพื่อสร้างอีเวนท์</h5>

                <form method="POST"
                      action="@if (isset($event)){{ route('events.update', $event->id) }}}@else{{ route('events.store') }}@endif"
                      enctype="multipart/form-data">
                    @csrf
                    @if (isset($event))
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $event->id }}"/>
                    @endif
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">ชื่ออีเวนท์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   placeholder="ชื่ออีเวนท์"
                                   value="{{ old('name', isset($event) ? $event->name : '') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="event_start">เวลาเริ่มต้น/สิ้นสุดลงทะเบียน</label>
                            <div class="input-daterange input-group">
                                <input type="text"
                                       class="form-control @error('registration_start') is-invalid @enderror"
                                       id="registration_start"
                                       name="registration_start"
                                       value="{{ old('registration_start', isset($event) ? $event->registration_start->format('d/m/Y H:m:s น.') : '') }}">
                                @error('registration_start')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group-addon">to</div>
                                <input type="text" class="form-control @error('registration_end') is-invalid @enderror"
                                       id="registration_end" name="registration_end"
                                       value="{{ old('registration_end', isset($event) ? $event->registration_end->format('d/m/Y H:m:s น.') : '') }}">
                                @error('registration_end')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="event_start">เวลาเริ่มต้น/สิ้นสุดอีเวนท์</label>
                            <div class="input-group input-daterange">
                                <input type="text" class="form-control @error('event_start') is-invalid @enderror"
                                       id="event_start" name="event_start"
                                       value="{{ old('event_start', isset($event) ? $event->event_start->format('d/m/Y H:m:s น.') : '') }}">
                                @error('event_start')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group-addon">to</div>
                                <input type="text" class="form-control @error('event_end') is-invalid @enderror"
                                       id="event_end" name="event_end"
                                       value="{{ old('event_end', isset($event) ? $event->event_end->format('d/m/Y H:m:s น.') : '') }}">
                                @error('event_end')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <label for="category_id">ประเภทของอีเวนท์</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id"
                                style="width: 50%;margin-left: 10%;">
                            <option value=""
                                    @if (old('category_id') == '') selected
                                    @elseif (isset($event) && $event->category_id == '') selected @endif>
                                ไม่มีประเภท
                            </option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if (old('category_id') == $category->id) selected
                                        @elseif(!old('category_id') && isset($event) && $event->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row" style="margin-top: 2%;">
                        <label for="max_attendee" class="col-sm-2 col-form-label">จำนวนจำกัดของผู้เข้าร่วมงาน</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  @error('max_attendee') is-invalid @enderror"
                                   name="max_attendee"
                                   value="{{ old('max_attendee', isset($event) ? $event->max_attendee : '') }}"
                                   style="width: 20%;margin-left: 5%;margin-top: 2%;">
                            @error('max_attendee')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row" style="margin-top: 2%;">
                        <label for="max_staff" class="col-sm-2 col-form-label">จำนวนจำกัดของคณะบุคลากร (staff)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  @error('max_staff') is-invalid @enderror" id=""
                                   name="max_staff"
                                   value="{{ old('max_staff', isset($event) ? $event->max_staff : '') }}"
                                   style="width: 20%;margin-left: 5%;margin-top: 2%;">
                            @error('max_staff')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="location">รายละเอียดสถานที่การจัดงาน</label>
                        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror"
                               name="location"
                               value="{{ old('location', isset($event) ? $event->location : '') }}">
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">รายละเอียดของงาน</label>
                        <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                                  name="description"
                                  rows="4">{{ old('description', isset($event) ? $event->description : '') }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Banner Image</label>
                        <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror"
                               value="{{ old('banner', isset($event) ? $event->banner : '') }}"/>
                        @error('banner')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @if (isset($event))
                            <label>Old Banner</label>
                            <img style="max-height: 200px" src="{{ Storage::url($event->banner) }}">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Main Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                               value="{{ old('image', isset($event) ? $event->image : '') }}"/>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @if (isset($event))
                            <label>Old Main Image</label>
                            <img style="max-height: 200px" src="{{ Storage::url($event->image) }}">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-info">@if(isset($event)) Save @else Create @endif</button>
                </form>

            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            var dateFormat = "dd/mm/yy",
                timeFormat = "HH:mm:ss น.",
                registration_start = $("#registration_start")
                    .datetimepicker({
                        changeMonth: true,
                        numberOfMonths: 1,
                        dateFormat,
                        timeFormat,
                    }),
                registration_end = $("#registration_end").datetimepicker({
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat,
                    timeFormat,
                }),
                event_start = $("#event_start")
                    .datetimepicker({
                        changeMonth: true,
                        numberOfMonths: 1,
                        dateFormat,
                        timeFormat,
                    }),
                event_end = $("#event_end").datetimepicker({
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat,
                    timeFormat,
                });
        });
    </script>
@endsection
