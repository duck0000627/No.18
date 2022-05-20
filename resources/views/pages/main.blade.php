@extends('layout.master')
@section('content')
    <div>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color" id="btn"
                            ondblclick="changecolor()">1.完備各項基本資料
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">
                        10.開立請款單給客戶&歸還客戶印章與核准公文
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">11.確認是否已收到工商費用
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">2.確認客戶資料是否完備，缺件需要通知
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">9.收到核准公文</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">12.與老闆確認是否可以結案
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">
                        3.主管派案，承辦同仁確認客戶聯絡資訊案件種類及主管承辦機關
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">8.待主管機關與國稅局核准變更登記
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">13.清點資料、移轉給帳務組同仁
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">4.登打奇勝與選戰系統基本資料
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">7.送件</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">
                        14.案件結案呈報老闆裁示，選戰內容結案、勾選結案日期
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">5.應付書件、親簽資料提供給客戶
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary col-8 btn-change-color">6.經主管確認後準備送件資料
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>           {{--套件--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".btn-change-color").dblclick(function () {
            Swal.fire(
                '確認完成此進度',
                '',
                'question'
            )
            let thisbtn = $(this);
            thisbtn.toggleClass("btn-outline-secondary");
            thisbtn.toggleClass("btn-outline-success");
        })
    </script>
@endsection

