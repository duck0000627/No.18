@extends('layout.master')
@section('add')
    <div class="container" style="margin-top: 100px">
        <form action="{{route('get_add_data')}}" method="post" onsubmit="return check()" name="send">
            @csrf
            <div class="row mb-5">
                <div class="col fs-2">+建立新案件</div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">案件編號</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="number" id="number">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">公司名稱</div>
                <div class="col-5">
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">種類</div>
                <div class="col-4">
                    <div class="form-group">
                        <select class="form-control form-control-lg" id="FormControlSelect1" name="type">
                            <option class="fs-4" disabled>公司及商號</option>
                            <option>公司及商號設立登記</option>
                            <option>公司及商號變更登記</option>
                            <option>公司及商號停業及歇業登記</option>
                            <option class="fs-4" disabled>營造業登記</option>
                            <option>營造業設立登記</option>
                            <option>營造業晉升等級及其他事項登記</option>
                            <option>營造業工程承攬總額申報</option>
                            <option class="fs-4" disabled>工廠設立</option>
                            <option>工廠設立登記</option>
                            <option>工廠變更登記</option>
                            <option>工廠停業及歇業登記</option>
                            <option class="fs-4" disabled>其他申請</option>
                            <option>華僑及外國人投資申請</option>
                            <option>境外公司申請及規劃</option>
                            <option>承辦各項環保業務</option>
                            <option>各類許可證照之申請</option>
                            <option>進出口業務之申請</option>
                            <option>勞保健保業務之申請</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人姓名</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="employee" id="employee">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人電話</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2 fs-4">負責人信箱</div>
                <div class="col-4">
                    <input type="text" class="form-control" name="email" id="email">
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
        function check() {
            if (document.send.number.value=='' || document.send.name.value=='' || document.send.employee.value=='' || document.send.phone.value=='' || document.send.email.value=='') {
                Swal.fire(
                    '資料未填寫完',
                    '',
                    'warning'
                );
                return false;
            }
            return true;
        }
    </script>
@endsection
