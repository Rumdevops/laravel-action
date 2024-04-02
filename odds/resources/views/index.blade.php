<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bảng kèo</title>
    <link rel="stylesheet" href="bk.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bk.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <script src="js/app.js"></script>


    <div id="bang-keo">
        <div class="list-btn-bk">
            <a href="javascript:void(0);" class="btn-bk active">Ngoại hạng Anh</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">La Liga - TBN</a>
            <a href="javascript:void(0);" class="btn-bk">Serie A - Ý</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
            <a href="javascript:void(0);" class="btn-bk">BundesLiga - Đức</a>
            <a href="javascript:void(0);" class="btn-bk">Champions League</a>
        </div>

        <div class="bk-header-search">
            <div class="form-search-keo">
                <input name="search-keo" type="text" placeholder="Nhập từ khóa tìm kiếm">
                <button type="submit" aria-label="Tìm" class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.137" height="17.494" viewBox="0 0 17.137 17.494">
                        <g id="Group_10356" data-name="Group 10356" transform="translate(-1499.258 -30.107)">
                            <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search"
                                d="M21.479,20.671l-3.452-3.857a7.552,7.552,0,1,0-1.151,1.161L20.3,21.8a.816.816,0,1,0,1.181-1.127Zm-9.394-2.632A5.963,5.963,0,1,1,16.3,16.292a5.963,5.963,0,0,1-4.218,1.747Z"
                                transform="translate(1494.692 25.55)" fill="#f60"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="bk-select-league">
                <select name="league">
                    <option>Tất cả giải đấu</option>
                    <option value="Ngoại hạng Anh">Ngoại hạng Anh</option>
                </select>
            </div>
        </div>
        <div class="bk-select-nav">
            <div class="chosen-date">
                <a href="javascript:void(0);" class="keo-live active" id="keo-live" aria-label="Kèo trực tuyến">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                        <g id="Group_17405" data-name="Group 17405" transform="translate(-401 -345)">
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="7.5" cy="7.5" r="7.5"
                                transform="translate(401 345)" fill="#ff704b"></circle>
                            <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(404 348)" fill="#ff0909"
                                stroke="#fff" stroke-width="1">
                                <circle cx="4.5" cy="4.5" r="4.5" stroke="none"></circle>
                                <circle cx="4.5" cy="4.5" r="4" fill="none"></circle>
                            </g>
                        </g>
                    </svg>
                    <span>Kèo trực tuyến</span>
                </a>
                <a href="#" class="bk-date active">
                    <span class="dot"></span>
                    Hôm nay
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    Ngày mai
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    08/03
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    09/03
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    10/03
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    11/03
                </a>
                <a href="#" class="bk-date">
                    <span class="dot"></span>
                    12/03
                </a>
            </div>
            <div class="bk-right-nav">
                <div class="bk-hd rd hide-mb" id="bk-hd">HD bảng kèo</div>
                <div class="select-odds-type">
                    <select class="bk-select rd" name="odd_type">
                        <option>Tỷ lệ cược HK</option>
                        <option>Tỷ lệ cược EU</option>
                    </select>
                </div>
                <div class="select-odds-bookmarker">
                    <select class="rd bk-select" name="bookmarker">
                        <option>SBOBET</option>
                        <option>1xBet</option>
                        <option>365BET</option>
                        <option>K8Sport</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="bk-container">
            <div class="bk-header flex">
                <div class="bk-time w-10">
                    Giờ
                </div>
                <div class="bk-fixture w-20">
                    Trận đấu
                </div>
                <div class="bk-fulltime w-30">
                    Cả trận
                    <div class="flex column-3">
                        <div>Tỷ lệ</div>
                        <div>Tài xỉu</div>
                        <div>1x2</div>
                    </div>
                </div>
                <div class="bk-halftime w-30">
                    Hiệp 1
                    <div class="flex column-3">
                        <div>Tỷ lệ</div>
                        <div>Tài xỉu</div>
                        <div>1x2</div>
                    </div>
                </div>
                <div class="bk-bet w-10">
                    <a href="javascript:void(0);" class="bk-bet-btn">Cược ngay</a>
                </div>


            </div>
            <div class="bk-header-live hide-pc">
                <span class="bk-live-title">Kèo trực tuyến</span>
                <span class="bk-hd">HD bảng kèo</span>
            </div>
            @if ($oddTables->isEmpty())
                <td colspan="9" class="text-lg-center w-100">Không tìm thấy bảng kèo nào!</td>
            @else
                @foreach ($oddTables as $key => $oddTable)
                    <div class="bk-match">
                        <div class="bk-league is-open">
                            {{ $oddTable->tournament_name ? $oddTable->tournament_name : '' }}</div>
                        <div class="bk-details is-open">
                            <div class="bk-time text-center w-10">
                                <span
                                    class="score">{{ $oddTable->score_fulltime ? $oddTable->score_fulltime : date('h:i A', strtotime($oddTable->startDate)) }}</span>
                                <span class="half">H1</span>
                                <span class="time">{{ $oddTable->fulltime ? $oddTable->fulltime : '' }}</span>

                            </div>
                            <div class="bk-fixture w-20">
                                <span class="home-team">{{ $oddTable->home_team ? $oddTable->home_team : '' }}</span>
                                <span class="away-team">{{ $oddTable->away_team ? $oddTable->away_team : '' }}</span>
                                <div class="c-odds-details">
                                    <span class="bk-bxh"><img src="img/bxh.png" alt="bxh" width="20"
                                            height="20"></span>
                                    <span class="bk-h2h"><img src="img/h2h.png" alt="h2h" width="20"
                                            height="20"></span>
                                </div>
                            </div>
                            <div class="bk-fulltime bk-row-odds w-30">
                                <div class="odds-list flex column-3">
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $ratioFulltime = json_decode($oddTable->ratioFulltime); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span>{{ $ratioFulltime->handicap ? $ratioFulltime->handicap : '' }}</span>
                                                <span
                                                    class="odd-v">{{ $ratioFulltime->ratioWin ? $ratioFulltime->ratioWin : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $ratioFulltime->ratioLose ? $ratioFulltime->ratioLose : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $topUnderfulltime = json_decode($oddTable->topUnderfulltime); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span>{{ $topUnderfulltime->handicap ? $topUnderfulltime->handicap : '' }}</span>
                                                <span
                                                    class="odd-v">{{ $topUnderfulltime->ratioTop ? $topUnderfulltime->ratioTop : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span>u</span> <span
                                                    class="odd-v">{{ $topUnderfulltime->ratioUnder ? $topUnderfulltime->ratioUnder : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $choose_team_fulltime = json_decode($oddTable->choose_team_fulltime); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_fulltime->ratioWin ? $choose_team_fulltime->ratioWin : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_fulltime->ratioDrew ? $choose_team_fulltime->ratioDrew : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_fulltime->ratioLose ? $choose_team_fulltime->ratioLose : '' }}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="odds-list flex column-3">
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $choose_team_fulltime = json_decode($oddTable->choose_team_fulltime); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span>0.5</span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <div data-odds-status="" data-selected="false">
                                                <span>0/0.5</span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span>u</span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="odds-list flex column-3">
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <div data-odds-status="" data-selected="false">
                                                <span>0.5</span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <div data-odds-status="" data-selected="false">
                                                <span>0/0.5</span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span>u</span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span class="odd-v">0.78</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bk-halftime bk-row-odds w-30">
                                <div class="odds-list flex column-3">
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $ratiohalf = json_decode($oddTable->ratiohalf); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span>{{ $ratiohalf->handicap ? $ratiohalf->handicap : '' }}</span>
                                                <span
                                                    class="odd-v">{{ $ratiohalf->ratioWin ? $ratiohalf->ratioWin : '' }}</span>
                                            </div>
                                            <div data-odds-status="up" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $ratiohalf->ratioLose ? $ratiohalf->ratioLose : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $topUnderhalf = json_decode($oddTable->topUnderhalf); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span>{{ $topUnderhalf->handicap ? $topUnderhalf->handicap : '' }}</span>
                                                <span
                                                    class="odd-v">{{ $topUnderhalf->ratioTop ? $topUnderhalf->ratioTop : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span>u</span> <span
                                                    class="odd-v">{{ $topUnderhalf->ratioUnder ? $topUnderhalf->ratioUnder : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="odds-col">
                                        <div class="odds-c">
                                            <?php $choose_team_half = json_decode($oddTable->choose_team_half); ?>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_half->ratioWin ? $choose_team_half->ratioWin : '' }}</span>
                                            </div>
                                            <div data-odds-status="down" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_half->ratioDrew ? $choose_team_half->ratioDrew : '' }}</span>
                                            </div>
                                            <div data-odds-status="" data-selected="false">
                                                <span></span> <span
                                                    class="odd-v">{{ $choose_team_half->ratioLose ? $choose_team_half->ratioLose : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-70 hide-pc">
                                <div class="bk-odds-mobile">
                                    <div class="odds-mb-slide owl-theme owl-carousel">
                                        <div class="item">
                                            <div class="odds-fmb-header">
                                                <span class="odds-mb-title">Cả trận Cược Chấp</span>
                                                <span class="odds-mb-title">Cả trận Tài xỉu</span>
                                                <span class="odds-mb-title">Cả trận 1X2</span>
                                            </div>
                                            <div class="odds-list flex column-3">
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>0.5</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>0/0.5</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>u</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="odds-fmb-header">
                                                <span class="odds-mb-title">Hiệp 1 - Cược Chấp</span>
                                                <span class="odds-mb-title">Hiệp 1 - Tài xỉu</span>
                                                <span class="odds-mb-title">Hiệp 1 - 1X2</span>
                                            </div>
                                            <div class="odds-list flex column-3">
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>1.5</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>0/0.5</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span>u</span> <span class="odd-v">0.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="odds-col">
                                                    <div class="odds-c">
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>
                                                        <div data-odds-status="" data-selected="false">
                                                            <span></span> <span class="odd-v">0.78</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="match-bet-btn w-10">
                                <div class="btn-bet-inner">
                                    <a href="javascript:void(0);" class="bk-bet-btn">Cược ngay</a>
                                </div>
                                <div class="du-doan">
                                    <a href="javascript:void(0);" class="img-dd" title="Máy tính dự đoán"><img
                                            src="img/dd.png"></a>
                                </div>
                            </div>
                            <div class="odds-other flex">
                                <div class="w-10"></div>
                                <div class="w-20">
                                    <div class="c-odds-details">

                                        <span class="bk-phantich"><img src="img/phantich.png" alt="pt"
                                                width="20" height="20"></span>
                                        <span class="bk-comprare"><img src="img/comprare.png" alt="compare"
                                                width="20" height="20"></span>
                                        <span class="bk-chitiet"><img src="img/details.png" alt="details"
                                                width="20" height="20"></span>
                                        <span class="bk-nhandinh"><img src="img/nhandinh.png" alt="nhandinh"
                                                width="20" height="20"></span>
                                        <span class="bk-trandau"><img src="img/details.png" alt="fixture"
                                                width="20" height="20"></span>
                                    </div>
                                </div>
                                <div class="w-60">
                                    <div class="title-odds">
                                        Các loại cược khác
                                        <span class="carret-down"></span>
                                    </div>
                                </div>
                                <div class="more-odds"><img src="img/arrow-right.png" alt="more-odds"></div>
                            </div>
                            <div class="odds-other-details">
                                <div class="tab odds-tabs">
                                    <button class="tablinks active" data-target="tab-1">Phổ biến</button>
                                    <button class="tablinks" data-target="tab-2">Toàn trận</button>
                                    <button class="tablinks" data-target="tab-3">Hiệp 1</button>
                                    <button class="tablinks" data-target="tab-4">Phạt góc / thẻ phạt</button>
                                    <button class="tablinks" data-target="tab-5">Cược xiên</button>
                                </div>
                                <div class="tabs-content">
                                    <div id="tab-1" class="tabcontent" style="display: block;">
                                        <div class="c-bettypes">
                                            <div class="c-bettype c-bettype--cs">
                                                <div class="c-bettype__row-heading is-open">
                                                    <div class="c-text" title="Tỷ Số Chính Xác">Tỷ Số Chính Xác</div>
                                                </div>
                                                <div class="c-bet-content is-open">
                                                    <div class="c-bettype__row-title">
                                                        <div class="c-bettype__col" title="1-0"
                                                            data-in-play="false">
                                                            1-0
                                                        </div>
                                                        <div class="c-bettype__col" title="2-0"
                                                            data-in-play="false">
                                                            2-0
                                                        </div>
                                                        <div class="c-bettype__col" title="2-1"
                                                            data-in-play="false">
                                                            2-1
                                                        </div>
                                                        <div class="c-bettype__col" title="3-0"
                                                            data-in-play="false">
                                                            3-0
                                                        </div>
                                                        <div class="c-bettype__col" title="3-1"
                                                            data-in-play="false">
                                                            3-1
                                                        </div>
                                                        <div class="c-bettype__col" title="3-2"
                                                            data-in-play="false">
                                                            3-2
                                                        </div>
                                                        <div class="c-bettype__col" title="4-0"
                                                            data-in-play="false">
                                                            4-0
                                                        </div>
                                                        <div class="c-bettype__col" title="4-1"
                                                            data-in-play="false">
                                                            4-1
                                                        </div>
                                                        <div class="c-bettype__col" title="4-2"
                                                            data-in-play="false">
                                                            4-2
                                                        </div>
                                                        <div class="c-bettype__col" title="4-3"
                                                            data-in-play="false">
                                                            4-3
                                                        </div>
                                                        <div class="c-bettype__col" title="0-0"
                                                            data-in-play="false">
                                                            0-0
                                                        </div>
                                                        <div class="c-bettype__col" title="1-1"
                                                            data-in-play="false">
                                                            1-1
                                                        </div>
                                                        <div class="c-bettype__col" title="2-2"
                                                            data-in-play="false">
                                                            2-2
                                                        </div>
                                                        <div class="c-bettype__col" title="3-3"
                                                            data-in-play="false">
                                                            3-3
                                                        </div>
                                                        <div class="c-bettype__col" title="4-4"
                                                            data-in-play="false">
                                                            4-4
                                                        </div>
                                                        <div class="c-bettype__col" title="Mọi Điểm số Khác"
                                                            data-in-play="false">AOS</div>
                                                    </div>
                                                    <div class="c-bettype__row">
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242881:0"><span
                                                                    class="c-odds">5.2</span></div>
                                                            <div class="c-odds-button" id="6603242880:1"><span
                                                                    class="c-odds">8.8</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:0"><span
                                                                    class="c-odds">7.7</span></div>
                                                            <div class="c-odds-button" id="6603242880:2"><span
                                                                    class="c-odds">19</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:1"><span
                                                                    class="c-odds">9.2</span></div>
                                                            <div class="c-odds-button" id="6603242881:2"><span
                                                                    class="c-odds">14</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:0"><span
                                                                    class="c-odds">17</span></div>
                                                            <div class="c-odds-button" id="6603242880:3"><span
                                                                    class="c-odds">67</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:1"><span
                                                                    class="c-odds">20</span></div>
                                                            <div class="c-odds-button" id="6603242881:3"><span
                                                                    class="c-odds">50</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:2"><span
                                                                    class="c-odds">46</span></div>
                                                            <div class="c-odds-button" id="6603242882:3"><span
                                                                    class="c-odds">72</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:0"><span
                                                                    class="c-odds">51</span></div>
                                                            <div class="c-odds-button" id="6603242880:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:1"><span
                                                                    class="c-odds">60</span></div>
                                                            <div class="c-odds-button" id="6603242881:4"><span
                                                                    class="c-odds">230</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:2"><span
                                                                    class="c-odds">135</span></div>
                                                            <div class="c-odds-button" id="6603242882:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:3"><span
                                                                    class="c-odds">230</span></div>
                                                            <div class="c-odds-button" id="6603242883:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242880:0"><span
                                                                    class="c-odds">6.9</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242881:1"><span
                                                                    class="c-odds">6.2</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:2"><span
                                                                    class="c-odds">21</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:3"><span
                                                                    class="c-odds">154</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:4"><span
                                                                    class="c-odds">300</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="660324288aos"><span
                                                                    class="c-odds">58</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-bettypes">
                                            <div class="c-bettype c-bettype--cs">
                                                <div class="c-bettype__row-heading">
                                                    <div class="c-text" title="Tỷ Số Chính Xác">Tỷ số hiệp 1</div>
                                                </div>
                                                <div class="c-bet-content">
                                                    <div class="c-bettype__row-title">
                                                        <div class="c-bettype__col" title="1-0"
                                                            data-in-play="false">
                                                            1-0
                                                        </div>
                                                        <div class="c-bettype__col" title="2-0"
                                                            data-in-play="false">
                                                            2-0
                                                        </div>
                                                        <div class="c-bettype__col" title="2-1"
                                                            data-in-play="false">
                                                            2-1
                                                        </div>
                                                        <div class="c-bettype__col" title="3-0"
                                                            data-in-play="false">
                                                            3-0
                                                        </div>
                                                        <div class="c-bettype__col" title="3-1"
                                                            data-in-play="false">
                                                            3-1
                                                        </div>
                                                        <div class="c-bettype__col" title="3-2"
                                                            data-in-play="false">
                                                            3-2
                                                        </div>
                                                        <div class="c-bettype__col" title="4-0"
                                                            data-in-play="false">
                                                            4-0
                                                        </div>
                                                        <div class="c-bettype__col" title="4-1"
                                                            data-in-play="false">
                                                            4-1
                                                        </div>
                                                        <div class="c-bettype__col" title="4-2"
                                                            data-in-play="false">
                                                            4-2
                                                        </div>
                                                        <div class="c-bettype__col" title="4-3"
                                                            data-in-play="false">
                                                            4-3
                                                        </div>
                                                        <div class="c-bettype__col" title="0-0"
                                                            data-in-play="false">
                                                            0-0
                                                        </div>
                                                        <div class="c-bettype__col" title="1-1"
                                                            data-in-play="false">
                                                            1-1
                                                        </div>
                                                        <div class="c-bettype__col" title="2-2"
                                                            data-in-play="false">
                                                            2-2
                                                        </div>
                                                        <div class="c-bettype__col" title="3-3"
                                                            data-in-play="false">
                                                            3-3
                                                        </div>
                                                        <div class="c-bettype__col" title="4-4"
                                                            data-in-play="false">
                                                            4-4
                                                        </div>
                                                        <div class="c-bettype__col" title="Mọi Điểm số Khác"
                                                            data-in-play="false">AOS</div>
                                                    </div>
                                                    <div class="c-bettype__row">
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242881:0"><span
                                                                    class="c-odds">5.2</span></div>
                                                            <div class="c-odds-button" id="6603242880:1"><span
                                                                    class="c-odds">8.8</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:0"><span
                                                                    class="c-odds">7.7</span></div>
                                                            <div class="c-odds-button" id="6603242880:2"><span
                                                                    class="c-odds">19</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:1"><span
                                                                    class="c-odds">9.2</span></div>
                                                            <div class="c-odds-button" id="6603242881:2"><span
                                                                    class="c-odds">14</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:0"><span
                                                                    class="c-odds">17</span></div>
                                                            <div class="c-odds-button" id="6603242880:3"><span
                                                                    class="c-odds">67</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:1"><span
                                                                    class="c-odds">20</span></div>
                                                            <div class="c-odds-button" id="6603242881:3"><span
                                                                    class="c-odds">50</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:2"><span
                                                                    class="c-odds">46</span></div>
                                                            <div class="c-odds-button" id="6603242882:3"><span
                                                                    class="c-odds">72</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:0"><span
                                                                    class="c-odds">51</span></div>
                                                            <div class="c-odds-button" id="6603242880:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:1"><span
                                                                    class="c-odds">60</span></div>
                                                            <div class="c-odds-button" id="6603242881:4"><span
                                                                    class="c-odds">230</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:2"><span
                                                                    class="c-odds">135</span></div>
                                                            <div class="c-odds-button" id="6603242882:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:3"><span
                                                                    class="c-odds">230</span></div>
                                                            <div class="c-odds-button" id="6603242883:4"><span
                                                                    class="c-odds">238</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242880:0"><span
                                                                    class="c-odds">6.9</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242881:1"><span
                                                                    class="c-odds">6.2</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242882:2"><span
                                                                    class="c-odds">21</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242883:3"><span
                                                                    class="c-odds">154</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="6603242884:4"><span
                                                                    class="c-odds">300</span></div>
                                                        </div>
                                                        <div class="c-bettype__col">
                                                            <div class="c-odds-button" id="660324288aos"><span
                                                                    class="c-odds">58</span></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        jQuery(document).ready(function($) {
            $('.odds-mb-slide').owlCarousel({
                dots: true,
                items: 1,
                autoplay: true,
                arrows: false,

            });
        });
    </script>
</body>

</html>
