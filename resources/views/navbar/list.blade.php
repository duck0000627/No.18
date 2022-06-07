<nav id="list">
        {{--  標題  --}}
        <i class="bi bi-list-check fs-1" id="List_text" style="display: none">待辦清單</i>
        <i class="bi bi-file-earmark-text fs-1" id="Bulletin_text" style="display: none">公佈欄</i>
        <i class="bi bi-bell fs-1" id="Notify_text" style="display: none">通知</i>
        {{--  按鈕  --}}
        <button type="button" class="btn btn-light fs-5" id="List_add" style="position: relative;left: 90px">+</button>
        <button type="button" class="btn btn-light fs-5" id="Bulletin_add" style="position: relative;left: 90px">+
        </button>
        <button type="button" class="btn btn-light fs-5" id="List_add_back" style="position: relative;left: 90px">ㄑ
        </button>
        <button type="button" class="btn btn-light fs-5" id="Bulletin_add_back" style="position: relative;left: 90px">
            ㄑ
        </button>
        <hr style="width: 350px ; border:1px solid">
    <form action="{{route('list_add')}}" method="get">
        {{--  待辦清單  --}}
        <input type="text" class="form-control" placeholder="輸入待辦標題" id="List_title" name="List_title">
        <input type="text" class="form-control" placeholder="敘述待辦事項" id="List_work" name="List_work">
        <input type="text" class="form-control" placeholder="上傳檔案" id="List_data">
        <button id="List_cancle">取消</button>
        <button id="List_yes" type="submit">儲存</button>
    </form>
    <form action="{{route('bulletins_add')}}" method="get">
        {{--  公告欄  --}}
        <input type="text" class="form-control" placeholder="輸入公告欄標題" id="Bulletin_title" name="Bulletin_title">
        <input type="text" class="form-control" placeholder="敘述公告欄事項" id="Bulletin_work" name="Bulletin_work">
        <input type="text" class="form-control" placeholder="上傳檔案" id="Bulletin_data">
        <button id="Bulletin_cancle">取消</button>
        <button id="Bulletin_yes" type="submit">儲存</button>
    </form>
    <table class="table table-bordered" style="width: 240px" id="List_list">
        <tbody>
    @foreach($lists as $row)
        <tr>
            <td class="col">{{$row->title}}</td>
            <td class="col">{{$row->work}}</td>
        </tr>
    @endforeach
        </tbody>
    </table>
    <table class="table table-bordered" style="width: 240px" id="Bulletin_list">
        <tbody>
        @foreach($bulletins as $row)
            <tr>
                <td class="col">{{$row->title}}</td>
                <td class="col">{{$row->work}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</nav>

<script>
    $(document).ready(function () {

        $("#List_add").on("click", function () {

            $("#List_add").hide();
            $("#List_add_back").show();
            $("#List_title").show();
            $("#List_work").show();
            $("#List_data").show();
            $("#List_cancle").show();
            $("#List_yes").show();
        });
        $("#List_add_back").on("click", function () {

            $("#List_add").show();
            $("#List_add_back").hide();
            $("#List_title").hide();
            $("#List_work").hide();
            $("#List_data").hide();
            $("#List_cancle").hide();
            $("#List_yes").hide();
        });
        $("#Bulletin_add").on("click", function () {

            $("#Bulletin_add").hide();
            $("#Bulletin_add_back").show();
            $("#Bulletin_title").show();
            $("#Bulletin_work").show();
            $("#Bulletin_data").show();
            $("#Bulletin_cancle").show();
            $("#Bulletin_yes").show();
        });
        $("#Bulletin_add_back").on("click", function () {

            $("#Bulletin_add").show();
            $("#Bulletin_add_back").hide();
            $("#Bulletin_title").hide();
            $("#Bulletin_work").hide();
            $("#Bulletin_data").hide();
            $("#Bulletin_cancle").hide();
            $("#Bulletin_yes").hide();
        });
    })
</script>
