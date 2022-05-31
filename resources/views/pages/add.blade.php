@extends('layout.master')
@section('add')
    <div class="container" style="margin-top: 100px">
        <form action="{{route('get_add_data')}}" method="post">
            @csrf
            <div class="row mb-5">
                <div class="col fs-2">+建立新案件</div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">案件編號</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">公司名稱</div>
                <div class="col-5">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">種類</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="type">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人姓名</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="employee">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人電話</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人信箱</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row justify-content-end mb-4">
                <div class="col-2">
                    <button type="button" class="btn btn-light" onclick="cancle()">取消</button>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-light">儲存</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function cancle() {
            window.location.href = "{{route('main')}}";
        }
    </script>
@endsection
