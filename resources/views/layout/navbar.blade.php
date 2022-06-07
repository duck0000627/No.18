<nav id="sidebar">
        <!-- List 列表 -->
    <ul class="list-unstyled">

        <li>
            <a href="#sublist" data-bs-toggle="collapse" id="dropdown"><i class="bi bi-gear"></i></a>

            <!-- 子連結列表  -->
            <ul id="sublist" class="list-unstyled collapse">
                <li>
                    <a href="#">字型大小</a>
                </li>
                <li>
                    <a href="#" onclick="logout()">登出</a>
                </li>
            </ul>
        </li>
        <li>
            <a id="List"><i class="bi bi-list-check"></i> </a>
        </li>
        <li>
            <a id="Bulletin"><i class="bi bi-file-earmark-text"></i>  </a>
        </li>
        <li>
            <a id="Notify"><i class="bi bi-bell"></i></a>
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
            $("#List_list").show();
            $("#List_add_back").hide();
            $("#Bulletin_text").hide();
            $("#Bulletin_add").hide();
            $("#Bulletin_list").hide();
            $("#Notify_text").hide();
            $("#List_title").hide();
            $("#List_work").hide();
            $("#List_data").hide();
            $("#List_cancle").hide();
            $("#List_yes").hide();
            $("#Bulletin_add_back").hide();
            $("#Bulletin_title").hide();
            $("#Bulletin_work").hide();
            $("#Bulletin_data").hide();
            $("#Bulletin_cancle").hide();
            $("#Bulletin_yes").hide();
        });

        $("#Bulletin").on("click", function () {

            $("#list").toggleClass("active");
            $("#Bulletin_text").show();
            $("#Bulletin_add").show();
            $("#Bulletin_list").show();
            $("#List_list").hide();
            $("#List_text").hide();
            $("#List_add").hide();
            $("#List_add_back").hide();
            $("#Notify_text").hide();
            $("#List_title").hide();
            $("#List_work").hide();
            $("#List_data").hide();
            $("#List_cancle").hide();
            $("#List_yes").hide();
            $("#Bulletin_add_back").hide();
            $("#Bulletin_title").hide();
            $("#Bulletin_work").hide();
            $("#Bulletin_data").hide();
            $("#Bulletin_cancle").hide();
            $("#Bulletin_yes").hide();
        });

        $("#Notify").on("click", function () {

            $("#list").toggleClass("active");
            $("#Bulletin_text").hide();
            $("#Bulletin_add").hide();
            $("#List_text").hide();
            $("#List_add").hide();
            $("#List_add_back").hide();
            $("#Notify_text").show();
            $("#List_title").hide();
            $("#List_list").hide();
            $("#List_work").hide();
            $("#List_data").hide();
            $("#List_cancle").hide();
            $("#List_yes").hide();
            $("#Bulletin_add_back").hide();
            $("#Bulletin_list").hide();
            $("#Bulletin_title").hide();
            $("#Bulletin_work").hide();
            $("#Bulletin_data").hide();
            $("#Bulletin_cancle").hide();
            $("#Bulletin_yes").hide();
        });
    });

    function logout() {
        window.location.href = "{{route('login')}}";
    }
</script>

