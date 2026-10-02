<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body style="background: #fff">
    <div class="container" style="max-width: 991px">
        <div class="row mb-5">
            <div class="col-12 my-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">首頁</a></li>
                        <li class="breadcrumb-item"><a href="#">投保管理</a></li>
                        <li class="breadcrumb-item active" aria-current="page">訂單編號 - <span>2025050900001</span></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="alert alert-danger " role="alert">
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="CallCheck">是否完成抽樣電訪?</label>
                        </div>
                        <div class="col text-end">
                            <input class="form-check-input" type="checkbox" value="" id="CallCheck">
                        </div>
                    </div>
                </div>
                <div class="alert alert-primary" role="alert">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <h3>備註</h3>
                                    </div>
                                    <div class="col text-end">
                                        <button type="submit" class="btn btn-primary">儲存</button>
                                    </div>
                                </div>
                                <textarea class="form-control btn-lg col-form-r" id="exampleFormControlTextarea1" rows="2" placeholder="請輸入備註內容"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <!--訂單資訊-->
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="">訂單</h3>
                    </div>
                    <div class="col-md-5">
                        <label for="" class="form-label">訂單編號</label>
                        <input type="" class="form-control" id="" value="2025050900001" disabled>
                    </div>
                    <div class="col-md-5">
                        <label for="" class="form-label">報價 OID</label>
                        <input type="" class="form-control" id="" value="OPET2310260033" disabled>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">投保日期</label>
                        <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">保險起日</label>
                        <div class="row g-2">
                            <div class="col">
                                <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                            </div>
                            <div class="col-auto">
                                <input type="" class="form-control" id="" value="00:00" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">保險迄日</label>
                        <div class="row g-2">
                            <div class="col">
                                <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                            </div>
                            <div class="col-auto">
                                <input type="" class="form-control" id="" value="00:00" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <!--要保人資訊-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">要保人</h3>
                    </div>
                    <div class="col-12">
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">查詢序號(RSAID)</label>
                            <div class="col-md-8">
                                <input type="" class="form-control" id="" value="A123456789" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人姓名/出生年月日/性別/國籍</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="王小明" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="男" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="台灣" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人職業別</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="服務業" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人證件類型/證號</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="身分證" disabled>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="" class="form-control" id="" value="A123456989" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人市話/手機</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="02-2222-0202" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="0966-966-666" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人郵遞區號/地址</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="25020" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="" class="form-control" id="" value="台北市大安區復興南路三段111號1樓" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人電子信箱</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="ben@chacnems.com" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">要保人代表人</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">保單註記</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">與被保人關係/與被保人關係其他</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="其他" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="朋友" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--寵物資訊-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">寵物</h3>
                    </div>
                    <div class="col-12">
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">寵物名稱/晶片號碼/出生日期</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="阿旺" disabled>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="548124877856458584" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">寵物類型/品種代碼/品種類別/品種名稱</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <input type="" class="form-control" id="" value="1" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="" class="form-control" id="" value="33" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="混種犬" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="黃金獵犬" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">性別/體重/絕育狀態</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="男生" disabled>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="5" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="Y" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">年齡歲數/年齡月份/保險年齡</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="5" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="11" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="3" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">施打疫苗</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="Y" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">照片/EXIF日期</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="www.sdaasd.ds/img01.jpg" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">是否有治療中傷病/傷病</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="N" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="" class="form-control" id="" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">是否已投保其他寵物保險/保險公司名稱</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="Y" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="" class="form-control" id="" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--方案資訊-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">方案</h3>
                    </div>
                    <div class="col-12">
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">專案代碼/方案代碼/險種</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="PET" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="H1" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="PTI" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">門診費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$2,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">住院費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$10,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">手術費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$50,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">保期最高限額保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$80,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">侵權責任保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$1,000,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">協尋廣告費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$2,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">寄宿日額費用保額/每日</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$1,000" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">喪葬費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$0" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">重新取得費用保額</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$0" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">總保費</label>
                            <div class="col-md-8">
                                <input type="" class="form-control text-end" id="" value="$9,999" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <!--付款資訊-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">付款</h3>
                    </div>
                    <div class="col-12">
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">繳費方式/卡別/到期年月</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="信用卡" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="MASTER" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="11/28" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">信用卡銀行代碼/發卡銀行名稱</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="005" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="台北富邦銀行" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">卡號</label>
                            <div class="col-md-8">
                                <input type="" class="form-control" id="" value="****-****-****-****" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">信用卡持有人/持卡人ID</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="王小明" disabled>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="" class="form-control" id="" value="A123456989" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">持卡人電話/卡片關係</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="0800-000-000" disabled>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="" class="form-control" id="" value="配偶" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">卡片關係備註</label>
                            <div class="col-md-8">
                                <input type="" class="form-control" id="" value="備註">
                            </div>
                        </div>
                    </div>
                </div>
                <!--聲明記錄-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">聲明記錄</h3>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">
                                <p>1.請問目前是否有投保其他公司寵物險?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>2.您是否同意旺旺友聯產險公司使用您的個人資料及寵物晶片序號向農業部取得被保險寵物資訊，並以該資訊做為實際核保及簽發保險單之依據？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>3.您是否同意確認投保成功後，旺旺友聯產險公司得將您的投保紀錄(含寵物晶片序號、保險商品名稱及保險期間)提供予農業部，並做為您日後登入「寵物登記管理資訊網」內可查詢之資訊？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>4.您是否同意被保險寵物之診療行為須於旺旺友聯產險公司所  指定獸醫院 進行？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>5.您是否同意旺旺友聯產險公司取得處理與利用您的被保險寵物於  指定獸醫院 診療之相關紀錄？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>6.您是否知悉欲前往之指定獸醫院與您住居所的相對位置，並清楚被保險寵物發生急重症時應送往之指定獸醫院為何？ 指定獸醫院清單</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>7.您是否知悉首次於旺旺友聯產險公司投保時，自保險契約生效首日起，有30-90日之等待期(詳下方備註)，屆滿後發生之「疾病」所生之相關費用方能理賠？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>8.您是否知悉旺旺友聯產險公司  指定獸醫院 係為方便被保險人申請理賠傳輸數位資料，關於就診之規定、診療項目、服務時間及費用收取等仍依各獸醫院實際狀況？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>9.您是否知悉要求獸醫師在診斷書上書寫不實診斷、虛構資訊、捏造或刻意更改日期等行為，有觸法之可能?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>10.如果獸醫院與您商議，想要額外開立其他不屬於診療項目之其他費用，您是否會同意？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>11.要/被保險人目前是否受有監護宣告?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>12.要/被保險人是否為聽語障人士?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>13.要/被保險人職業?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="包含當鋪、金融代辦中心、地下匯兌等提供金融服務之非銀行單位、虛擬貨幣的發行者或交易商、賭場、 賽馬或賭博相關行業。" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>14.要/被保險人的屬性?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="非專業客" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>15.要保人繳交保險費之資金來源為 ?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="存款" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>16.投保前三個月內是否有辦理終止契約、貸款或保險單借款之情形？</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>17.要/被保險人家庭年收入?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="50-100萬" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>18.過去一年內要/被保人是否居住於中華民國境外超過半年以上?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>19.要/被保險人是否是現任（或曾任）國內外政府或國際組織之重要政治性職務人士（如：中央或地方民意代表、公務機關首長）?</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="N" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>要保人若為聽障人士者，將以簡訊或電子郵件替代電話抽樣訪問投保意願。</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>同意：同意指定獸醫院</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>同意：會員網路保險服務契約</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p>同意：履行個資法告知義務事項</p>
                            </div>
                            <div class="col-4">
                                <input type="" class="form-control" id="" value="Y" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--經手單位-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">經手單位</h3>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">經手人</label>
                        <input type="" class="form-control" id="" value="7700" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">經手人公司別</label>
                        <input type="" class="form-control" id="" value="00N5" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">通路代碼</label>
                        <input type="" class="form-control" id="" value="NETA" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">經代碼</label>
                        <input type="" class="form-control" id="" value="57" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">通路單位名稱</label>
                        <input type="" class="form-control" id="" value="" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">通路業務員證號</label>
                        <input type="" class="form-control" id="" value="" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">通路業務員名稱</label>
                        <input type="" class="form-control" id="" value="" disabled>
                    </div>
                </div>
                <!--被保人資訊-->
                <div class="row g-3">
                    <div class="col-12 mt-5">
                        <h3 class="">被保人</h3>
                    </div>
                    <div class="col-12">
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人姓名/出生年月日/性別/國籍</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="王小明" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="YYYY/MM/DD" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="男" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="" class="form-control" id="" value="台灣" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保險人職業別</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="服務業" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人證件類型/證號</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-5">
                                        <input type="" class="form-control" id="" value="身分證" disabled>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="" class="form-control" id="" value="A123456989" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人市話/手機</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="02-2222-0202" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="" class="form-control" id="" value="0966-966-666" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人郵遞區號/地址</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="" class="form-control" id="" value="25020" disabled>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="" class="form-control" id="" value="台北市大安區復興南路三段111號1樓" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人電子信箱</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="ben@chacnems.com" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-md-4 form-label">被保人代表人</label>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <input type="" class="form-control" id="" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 







 