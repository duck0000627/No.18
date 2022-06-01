<div class="col col-3">
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
                    <button class="btn btn-light" onclick="process({{$row->number}})">查看</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    function add() {
        window.location.href = "{{route('add')}}";
    }

    function process(number) {
        window.location = "{{route('process')}}?number="+number;
    }
</script>
