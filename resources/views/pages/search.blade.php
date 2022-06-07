@extends("layout.master")
@section("search")
    <div class="container" style="position: relative;top: 20%">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="輸入關鍵字，搜尋案件編號、員工姓名" id="number">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-secondary" name="search" onclick="search_data()">搜尋</button>
                </div>
            </div>
    </div>
    <div class="container" style="position: relative;top: 25%">
        <div class="row">
            <div class="col">
                <label id="name" class="fs-3">案件編號</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label id="company" class="fs-3" style="position: relative;top: 20%">公司名稱</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label id="type" class="fs-3" style="position: relative;top: 40%">種類</label>
            </div>
        </div>
    </div>
<script>
    {{--function search_data() {--}}
    {{--    window.location.href = "{{route('search_data')}}"+"?number="+number;--}}
    {{--}--}}
</script>
@endsection
