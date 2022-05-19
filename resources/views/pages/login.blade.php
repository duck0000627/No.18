<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>群鴻記帳士事務所</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<main>
    <img src="{{asset('picture/icon.png')}}" width="500px" height="100px">
    <form>
        <div class="container" style="position:absolute ; top:40% ; left:13%">
            <div class="row justify-content-center">
                <div class="col.auto">
                    <label class="col-form-label">帳號:</label>
                </div>
                <div class="col.auto">
                    <input type="text" class="form-control" id="account">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col.auto">
                    <label class="col-form-label">密碼:</label>
                </div>
                <div class="col.auto">
                    <input type="text" class="form-control" id="password">
                </div>
            </div>
            <div class="row justify-content-center">
                <input class="col.auto" type="checkbox" value="">
                <label class="col.auto">
                    記住我的帳號
                </label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-outline-info" style="width:600px" onclick="login()">登入</button>
            </div>
            <div class="row justify-content-center">
                <a class="col offset-md-4" href="#">註冊</a>
                <a class="col" href="#">忘記密碼</a>
            </div>
        </div>
    </form>
</main>
</body>
</html>
<script>
    function login() {
        var acc = document.getElementById("account");
        var pass = document.getElementById("password");
        if (acc.value == "123" && pass.value == "123"){
            window.location.href ="{{route('main')}}";
        }
        else {
            Swal.fire(
                '登入失敗',
                '帳號或密碼錯誤',
                'error'
            )
        }
    }
</script>
