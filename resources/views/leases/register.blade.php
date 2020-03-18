@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <input type='text' class="form-control" id='datetimepicker4' />
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker();
        });
    </script>
@endsection
