@extends("layout.master")
@section("search")
    <div class="container" style="position: relative;top: 20%">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="輸入關鍵字，搜尋案件編號" id="number" name="number">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-secondary" name="search" id="search">搜尋</button>
            </div>
        </div>
    </div>
    <table class="table" style="position: relative;top: 25%">
        <thead>
        <tr>
            <th scope="col">案件編號</th>
            <th scope="col">公司名稱</th>
            <th scope="col">種類</th>
        </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
    </table>
    <script>
        $("#search").click(function () {
            let tbody = $("#tbody")
            let number = $("#number").val()
            $.ajax({
                url: "{{route('search_data')}}",
                method: 'get',
                data: {
                    number: number,
                }, success: function (res) {
                    tbody.children().remove();
                    $.each(res, function (index, value) {
                        console.log(value)
                        let row = `
                        <tr>
                            <td>${value["number"]}</td>
                            <td>${value["name"]}</td>
                            <td>${value["type"]}</td>
                        </tr>
                        `;
                        tbody.append(row);
                    })
                }, error: function (res) {
                    console.log(res)
                }
            })
            console.log(number)
        })


    </script>
@endsection
