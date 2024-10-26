<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輔仁大學教室預借系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="123.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/zh/thumb/d/da/Fu_Jen_Catholic_University_logo.svg/1200px-Fu_Jen_Catholic_University_logo.svg.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@550&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css"/>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
</head>
<body>
    <header>
        <div class="headergrid">
            <div style="margin-top: 20px; margin-left: 30px;">
                <h1 style="color: black;">輔仁大學教室預借系統</h1>
                <!-- Nav Item - User Information -->
            </div>
            <div style="margin-top: 20px;">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="text-align: right;">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 16px;">使用者登入/註冊</span>
                    <i class="fa-regular fa-user"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <div id="login-block" style="text-align: center;">
                        <button type="button" class="custom-button" onclick="window.location.href='登入.html'">登入</button><br>
                        <button type="button" class="custom-button" onclick="window.location.href='註冊.html'" style="margin-top: 10px;">註冊</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="nav">
            <div class="sidebar">
                <ul><a href="首頁.html"><img class="img" src="https://cdn3.iconfinder.com/data/icons/fluent-regular-24px-vol-4/24/ic_fluent_home_24_regular-64.png"> 首頁</img></a></ul>
                <ul><a href="教室預約現況.html"><img class="img" src="https://cdn2.iconfinder.com/data/icons/school-set-5/512/6-64.png"> 教室預約現況</img></a></ul>
                <ul><a href="教室預約使用.html"><img class="img" src="https://cdn4.iconfinder.com/data/icons/user-interface-937/24/20.clock_time_watch_date_ui-64.png"> 預約教室使用</img></a></ul>
                <ul><a href="繳費系統.html"><img class="img" src="https://cdn0.iconfinder.com/data/icons/finance-business-02/32/Payment-64.png"></img> 繳費系統</a></ul>
                <ul><a href="使用規則與管理辦法.html"><img class="img" src="https://cdn2.iconfinder.com/data/icons/legal-services-icostory-black-and-white/64/button-legal_document-list-goals-checklist-64.png"> 使用規則與管理辦法</img></a></ul>
                <ul><a href="校內資源.html"><img class="img" src="https://cdn0.iconfinder.com/data/icons/miscellaneous-4-bold/64/atomizing_nuclear_atomic_core_connect-64.png"> 校內資源</img></a></ul>
                <ul><a href="#"><img class="img" src="https://cdn1.iconfinder.com/data/icons/carbon-design-system-vol-3/32/cloud--service-management-64.png"></img> 後台管理</a></ul>
                <ul><a href="評分反饋.html"><img class="img" src="https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/mail-64.png"> 評分反饋</img></a></ul>
                <ul><a href="#"><img class="img" src=""></img></a></ul>
            </div>
        </div>
        <div class="main">
            <h2 style="margin-top: 20px; margin-left: 60px;">使用規則與管理辦法</h2>
            <div class="editwrap"><br>
                
                <p>&nbsp;一、輔仁大學（以下簡稱本校）國璽樓10~12樓教學場地（以下簡稱本場地）係提供優質教學環境而設立，為有效管理及<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;合理使用，特訂立「輔仁大學國璽樓10~12樓教學場地使用管理要點」，以下簡稱本要點。</p>
                <p>二、權責單位：本校總務處負責場地修繕與清潔；管理學院負責場地借用管理與儀器設備維護。</p>
                <p>三、場地類別：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.郎世寧廳：大廳MD1102及貴賓休息室MD1104<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.階梯教室：MD1001<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3.專業教室：MD1002、MD1003、MD1004、MD1101、MD1103、MD1201、MD1204</p>
                <p>四、使用對象：本場地之使用對象及時間衝突時之優先順序如下：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.管理學院辦公室。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.管理學院各系、所、學程及研究中心。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3.本校行政、學術單位。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4.本校校友、校外機構。</p>
                <p>五、使用規範：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 1.本場地以提供前項單位作為教學、學術相關活動，不得有下列情事，如有違反規定除立即停止其使用權暨<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;沒收其所繳之費用外，並依法處理。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(1)違反國家法令者。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(2)違反本校規定者。 <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(3)妨害公序良俗或損害本校校譽者。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(4)使用事實與申請登記事項不符，或將場地私自轉讓他人使用、或有未經核可之營業行為者。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(5)有損害場地設備，或危及公共安全之虞時，不宜繼續使用者。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;2.借用單位請於使用日前確認場地並測試視聽、燈光設備，使用及佈置範圍僅限原申請之借用場地，以免影響其他場地運作。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;3.借用單位應負場地及設備維護之責，嚴禁擅自加裝燈光、音響吊具等各項設備，不得臨時另接電源或安裝其他電器設備。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;倘因使用不當致使器材或設備受損，借用單位應負賠償責任及其他法律責任。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;4.借用單位應維護場地整潔，嚴禁吸菸、嚼檳榔，攜帶任何易燃、爆裂物等違禁品，未經同意不得食物、飲料入內。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;5.使用單位未經同意不得調整場地內設備(含桌椅)，佈置紅布條、標語、海報、旗幟、宣傳品等，禁止使用釘槍、圖釘、<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;一般膠帶、雙面膠、泡棉膠等物品，如有損壞場地裝潢或設備，需修復原狀或照價賠償。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;6.場地使用完畢需將桌椅回復原狀，離開前關閉電燈、空調及設備電源，離開時門、窗關閉上鎖，並切勿超過借用時間。&nbsp;</p>
                <p>六、借用程序：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 1. (1) 校內單位：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;需於使用日前提出申請、繳交職員證及設備使用認證卡並完成繳費。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(2) 校友、校外機構：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;需備文且於使用日二週前派員至管理學院辦公室辦理，核定後向本校總務處出納組繳付費用。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 2.未繳費者得取消其使用權，申請者不得異議。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 3. 經核准使用本場地後，如遇管理學院有特殊需要時，得停止借用或改期使用。如停止借用，所繳費用予以全額無息退還。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 4. 借用單位於完成借用後，得於使用日前三日終止使用關係，並通知管理單位；終止使用關係者必須支付違約金，違約金額<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;為場地使用費之十分之一，但因不可抗拒之情事，需以書面敘明理由，申請免支付違約金。未依此規定辦理者，無論使用<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;與否，均不得要求退費。</p>
                <p>七、收費標準：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; 1.&nbsp;保證金：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(1)校內單位免收保證金。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(2)校友、校外機構借用保證金新台幣8,000元。<br>
                &nbsp; &nbsp; &nbsp; &nbsp;2.&nbsp;場地使用費及清潔費：<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(1) 管理學院及所屬各系、所、學程及研究中心免計。<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(2) 收費標準以小時計算（包含布置、彩排及正式使用時間），不滿一小時者，以一小時計，每小時計算標準如下：</p>
                <div align="center">
                <table border="1" cellspacing="1" cellpadding="1" width="100%">
                    <tbody>
                        <tr>
                            <td width="63" rowspan="2" align="center" valign="middle">
                            <p style="text-align: center;">時段</p>
                            </td>
                            <td width="104" rowspan="2">
                            <p style="text-align: center;">空間類型</p>
                            </td>
                            <td width="131" colspan="2">
                            <p style="text-align: center;">本校行政、學術單位</p>
                            </td>
                            <td width="131" colspan="2">
                            <p style="text-align: center;">本校校友</p>
                            </td>
                            <td width="128" colspan="2">
                            <p style="text-align: center;">校外機構</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="66">
                            <p style="text-align: center;">使用費</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">清潔費</p>
                            </td>
                            <td width="67">
                            <p style="text-align: center;">使用費</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">清潔費</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">使用費</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">清潔費</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="63" rowspan="2">
                            <p style="text-align: center;">平日</p>
                            </td>
                            <td width="104">
                            <p style="text-align: center;">郎世寧廳及<br>
                            階梯教室</p>
                            </td>
                            <td width="66">
                            <p style="text-align: center;">1,500</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">500</p>
                            </td>
                            <td width="67">
                            <p style="text-align: center;">1,800</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">500</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">2,200</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">500</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="104">
                            <p style="text-align: center;">專業教室</p>
                            </td>
                            <td width="66">
                            <p style="text-align: center;">1,000</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">300</p>
                            </td>
                            <td width="67">
                            <p style="text-align: center;">1,200</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">300</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">1,500</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">300</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="63" rowspan="2">
                            <p style="text-align: center;">晚間/假日</p>
                            </td>
                            <td width="104">
                            <p style="text-align: center;">郎世寧廳及<br>
                            階梯教室</p>
                            </td>
                            <td width="66">
                            <p style="text-align: center;">3,000</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">600</p>
                            </td>
                            <td width="67">
                            <p style="text-align: center;">3,600</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">600</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">4,500</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">600</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="104">
                            <p style="text-align: center;">專業教室</p>
                            </td>
                            <td width="66">
                            <p style="text-align: center;">2,000</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">400</p>
                            </td>
                            <td width="67">
                            <p style="text-align: center;">2,400</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">400</p>
                            </td>
                            <td width="63">
                            <p style="text-align: center;">3,000</p>
                            </td>
                            <td width="64">
                            <p style="text-align: center;">400</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3.&nbsp;加班費：依學校規定另計。</p>
                <p style="text-align: left;">八、本場地專業教室之學期借用依管理學院專業教室使用辦法規範之。<br>
                九、本要點經行政會議通過，報請校長核定後公布施行。修正時亦同。</p>
                <p style="text-align: left;">&nbsp;</p>
                <p class="center paTxs20 maTxs20 top-dotline"><a class="btn blue" href="#" target="_blank">我要預約場地</a></p></div>
            
                
                
            </div>
            <div id="details-container" class="details-container">
                <div id="details-title" style="font-size: 18px; color: slategray;"></div>
                <div id="details-content"></div>
            </div>
            <script></script>
        </div>
    </div>

    <footer>
        <div class="copy-right">2024 © 輔仁大學 研究資源整合發展中心
            <br>建議使用 Chrome / Safari / Firefox瀏覽
        </div>
        <div class="copy-right">
            <i class="fa-solid fa-location-dot"></i> 地址：242062 新北市新莊區中正路 510 號 天主教輔仁大學
            <br><i class="fa-solid fa-phone"></i>電話：(02) 29052000
            <br><i class="fa-solid fa-envelope"></i>信箱：<a href="mailto:pubwww@mail.fju.edu.tw">pubwww@mail.fju.edu.tw</a>
        </div>
        <a href="#top" id="gototop"><span>返回頂端</span></a>
    </footer>
</body>
</html>
