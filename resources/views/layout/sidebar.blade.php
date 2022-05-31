<div class="col col-3" style="margin-left:90px">
    <input class=" form-control me-2" type="search" placeholder="搜尋案件編號、員工姓名....." aria-label="Search"
           style="width: 240px">
    <hr style="width: 250px ; border:1px solid">
    <div class="container">
        <div class="row" style="width: 250px">
            <div class="col fw-bold fs-3">案件</div>
            <div class="col">
                <button type="button" class="btn btn-light fs-3" onclick="add()">+</button>
            </div>
        </div>
    </div>
    <hr style="width: 250px ; border:1px solid">
    <table class="table" style="width: 240px">
        <thead>
        <tr>
            <th scope="col">員工姓名A</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td class="col">{{$row->number}}</td>
                <td class="col">
                    <button class="btn btn-light" onclick="process()">查看</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table" style="width: 240px">
        <thead>
        <tr>
            <th scope="col">員工姓名B</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">B001</th>
        </tr>
        <tr>
            <th scope="row">B002</th>
        </tr>
        </tbody>
    </table>
</div>
<script>
    function add() {
        window.location.href = "{{route('add')}}";
    }

    function process() {
        console.log("1")
        window.location.herf = "{{route('process')}}";
    }
</script>
