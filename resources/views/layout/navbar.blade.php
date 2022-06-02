<nav id="sidebar">
        <!-- List 列表 -->
    <ul class="list-unstyled" style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white">

        <li style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white;">
            <a href="#sublist" data-bs-toggle="collapse" id="dropdown" style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white;"><i class="bi bi-gear"></i></a>

            <!-- 子連結列表  -->
            <ul id="sublist" class="list-unstyled collapse" >
                <li>
                    <a href="#">字型大小</a>
                </li>
                <li>
                    <a href="#" onclick="logout()">登出</a>
                </li>
            </ul>
        </li>
        <li>
            <a id="List" style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white;"><i class="bi bi-list-check"></i> </a>
        </li>
        <li>
            <a id="Bulletin" style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white"><i class="bi bi-file-earmark-text"></i>  </a>
        </li>
        <li>
            <a id="Notify" style="padding: 10px;
    font-size: 30px;
    display: block;
    text-decoration: none;
    color: white"><i class="bi bi-bell"></i></a>
        </li>

    </ul>

</nav>

<script>

    //  展開/收合按鈕
    $(document).ready(function() {

        $("#List").on("click", function() {

            $("#list").toggleClass("active");
            $("#List_text").show();
            $("#List_add").show();
            $("#Bulletin_text").hide();
            $("#Bulletin_add").hide();
            $("#Notify_text").hide();
        });

        $("#Bulletin").on("click", function () {

            $("#list").toggleClass("active");
            $("#Bulletin_text").show();
            $("#Bulletin_add").show();
            $("#List_text").hide();
            $("#List_add").hide();
            $("#Notify_text").hide();
        });

        $("#Notify").on("click", function () {

            $("#list").toggleClass("active");
            $("#Bulletin_text").hide();
            $("#Bulletin_add").hide();
            $("#List_text").hide();
            $("#List_add").hide();
            $("#Notify_text").show();
        });
    });

    function logout() {
        window.location.href = "{{route('login')}}";
    }
</script>
