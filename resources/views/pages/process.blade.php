@extends('layout.master')
@section('process')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">案件編號</th>
            <th scope="col">公司姓名</th>
            <th scope="col">種類</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col">{{$getid -> number}}</td>
                <td class="col">{{$getid -> name}}</td>
                <td class="col">{{$getid -> type}}</td>
            </tr>
        </tbody>
    </table>
    <div class="container" style="margin-top: 100px">
        <div class="row row-cols-3">
            <div class="col">
                <button type="button" class="btn {{$process -> step1 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="1"
                        ondblclick="changecolor()">1.完備各項基本資料
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step10 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="10">
                    10.開立請款單給客戶&歸還客戶印章與核准公文
                </button>
                <img src="{{asset('picture/up.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step11 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="11">11.確認是否已收到工商費用
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step2 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="2">2.確認客戶資料是否完備，缺件需要通知
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step9 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="9">9.收到核准公文</button>
                <img src="{{asset('picture/up.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step12 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="12">12.與老闆確認是否可以結案
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step3 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="3">
                    3.主管派案，承辦同仁確認客戶聯絡資訊案件種類及主管承辦機關
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step8 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="8">8.待主管機關與國稅局核准變更登記
                </button>
                <img src="{{asset('picture/up.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step13 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="13">13.清點資料、移轉給帳務組同仁
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step4 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="4">4.登打奇勝與選戰系統基本資料
                </button>
                <img src="{{asset('picture/down.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step7 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="7">7.送件</button>
                <img src="{{asset('picture/up.png')}}" style="height: 50px;position: relative;left: 150px">
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step14 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="14">
                    14.案件結案呈報老闆裁示，選戰內容結案、勾選結案日期
                </button>
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step5 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="5">5.應付書件、親簽資料提供給客戶
                </button>
            </div>
            <div class="col">
                <button type="button" class="btn {{$process -> step6 == true?"btn-success":"btn-secondary"}} col-12 btn-change-color" id="6" name="btn6">6.經主管確認後準備送件資料
                </button>
            </div>
        </div>
    </div>
    <script>
        $(".btn-change-color").dblclick(function () {
            Swal.fire(
                '確認完成此進度',
                '',
                'question'
            )
            let thisbtn = $(this);
            thisbtn.toggleClass("btn-secondary");
            thisbtn.toggleClass("btn-success");
            console.log(this.id)
        })

        $(".btn").dblclick(function () {
            $.ajax({
                url: "{{route('process_data')}}",
                method: 'get',
                data: {
                    number:"{{$number}}",
                    step1:$("#1").hasClass("btn-success"),
                    step2:$("#2").hasClass("btn-success"),
                    step3:$("#3").hasClass("btn-success"),
                    step4:$("#4").hasClass("btn-success"),
                    step5:$("#5").hasClass("btn-success"),
                    step6:$("#6").hasClass("btn-success"),
                    step7:$("#7").hasClass("btn-success"),
                    step8:$("#8").hasClass("btn-success"),
                    step9:$("#9").hasClass("btn-success"),
                    step10:$("#10").hasClass("btn-success"),
                    step11:$("#11").hasClass("btn-success"),
                    step12:$("#12").hasClass("btn-success"),
                    step13:$("#13").hasClass("btn-success"),
                    step14:$("#14").hasClass("btn-success"),
                    checkid:this.id
                }, success: function (res) {
                    console.log(res)
                }, error: function (res) {
                    console.log(res)
                }
            })
            $(this).hasClass("btn-success");
            console.log($(this).hasClass("btn-success"))
        })
    </script>
@endsection

