<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body class="step_3">
<?php include("module/navbar.php"); ?>

<div class="main">
    <div class="container">
        <div class="mainStep">
            <div class="row g-0">
                <div class="col col-step active">
                    <div class="stepN">STEP.1</div>
                    <div></div>
                    <div class="stepT">寵物查詢</div>
                </div>
                <div class="col col-step active">
                    <div class="stepN">STEP.2</div>
                    <div></div>
                    <div class="stepT">選擇方案</div>
                </div>
                <div class="col col-step active">
                    <div class="stepN">STEP.3</div>
                    <div></div>
                    <div class="stepT">投保聲明</div>
                </div>
                <div class="col col-step">
                    <div class="stepN">STEP.4</div>
                    <div></div>
                    <div class="stepT">線上繳費</div>
                </div>
                <div class="col col-step">
                    <div class="stepN">FINISH</div>
                    <div></div>
                    <div class="stepT">送件完成</div>
                </div>
            </div>
        </div>
        <div class="mainForm">
            <div class="row justify-content-around">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="row" id="A01">
                                <div class="col-12">
                                    <h3>投保聲明</h3>
                                </div>
                            </div>
                            <div class="BoxQ">
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">1.</div>
                                                </div>
                                                <div class="col">
                                                    <p>請問目前是否有投保其他公司寵物險?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q1" id="Q1A1" value="Yes" onclick="alertE2()">
                                                <label class="form-check-label" for="Q1A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q1" id="Q1A2" value="No">
                                                <label class="form-check-label" for="Q1A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">2.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否同意旺旺友聯產險公司使用您的個人資料及寵物晶片序號向農業部取得被保險寵物資訊，並以該資訊做為實際核保及簽發保險單之依據？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q2" id="Q2A1" value="Yes">
                                                <label class="form-check-label" for="Q2A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q2" id="Q2A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q2A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">3.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否同意確認投保成功後，旺旺友聯產險公司得將您的投保紀錄(含寵物晶片序號、保險商品名稱及保險期間)提供予農業部，並做為您日後登入「寵物登記管理資訊網」內可查詢之資訊？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q3" id="Q3A1" value="Yes">
                                                <label class="form-check-label" for="Q3A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q3" id="Q3A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q3A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">4.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否同意被保險寵物之診療行為須於旺旺友聯產險公司所 <button class="cardQ_btn" type="button" data-bs-toggle="modal" data-bs-target="#ModalMap"><i class="fas fa-link"></i> 指定獸醫院</button> 進行？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q4" id="Q4A1" value="Yes">
                                                <label class="form-check-label" for="Q4A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q4" id="Q4A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q4A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">5.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否同意旺旺友聯產險公司取得處理與利用您的被保險寵物於 <button class="cardQ_btn" type="button" data-bs-toggle="modal" data-bs-target="#ModalMap"><i class="fas fa-link"></i> 指定獸醫院</button> 診療之相關紀錄？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q5" id="Q5A1" value="Yes">
                                                <label class="form-check-label" for="Q5A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q5" id="Q5A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q5A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">6.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否知悉欲前往之指定獸醫院與您住居所的相對位置，並清楚被保險寵物發生急重症時應送往之指定獸醫院為何？<button class="cardQ_btn" type="button" data-bs-toggle="modal" data-bs-target="#ModalMap"><i class="fas fa-link"></i> 指定獸醫院</button></span><span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q6" id="Q6A1" value="Yes">
                                                <label class="form-check-label" for="Q6A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q6" id="Q6A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q6A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">7.</div>
                                                </div>
                                                <div class="col">
                                                    <p>您是否知悉首次於旺旺友聯產險公司投保時，自保險契約生效首日起，有30-90日之等待期(詳下方備註)，屆滿後發生之「疾病」所生之相關費用方能理賠？<span>*必填</span></p>
                                                    <p class="note">備註：<br/>
                                                    （一）九十日：癌症、膝蓋骨異位、髖關節發育不良、椎間盤突出、心臟疾病、腎臟疾病、癲癇、糖尿病或甲狀腺疾病。<br/>
                                                    （二）三十日：非前項所載之其他疾病。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q7" id="Q7A1" value="Yes">
                                                <label class="form-check-label" for="Q7A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q7" id="Q7A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q7A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">8.</div>
                                                </div>
                                                <div class="col">
                                                     <p>您是否知悉旺旺友聯產險公司 <button class="cardQ_btn" type="button" data-bs-toggle="modal" data-bs-target="#ModalMap"><i class="fas fa-link"></i> 指定獸醫院</button> 係為方便被保險人申請理賠傳輸數位資料，關於就診之規定、診療項目、服務時間及費用收取等仍依各獸醫院實際狀況？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q8" id="Q8A1" value="Yes">
                                                <label class="form-check-label" for="Q8A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q8" id="Q8A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q8A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">9.</div>
                                                </div>
                                                <div class="col">
                                                     <p>您是否知悉要求獸醫師在診斷書上書寫不實診斷、虛構資訊、捏造或刻意更改日期等行為，有觸法之可能?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q9" id="Q9A1" value="Yes">
                                                <label class="form-check-label" for="Q9A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q9" id="Q9A2" value="No" onclick="alertE3()">
                                                <label class="form-check-label" for="Q9A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">10.</div>
                                                </div>
                                                <div class="col">
                                                     <p>如果獸醫院與您商議，想要額外開立其他不屬於診療項目之其他費用，您是否會同意？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q10" id="Q10A1" value="Yes" onclick="alertE3()">
                                                <label class="form-check-label" for="Q10A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q10" id="Q10A2" value="No">
                                                <label class="form-check-label" for="Q10A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">11.</div>
                                                </div>
                                                <div class="col">
                                                     <p>要/被保險人目前是否受有監護宣告?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q13" id="Q13A1" value="Yes" onclick="alertE4()">
                                                <label class="form-check-label" for="Q13A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q13" id="Q13A2" value="No">
                                                <label class="form-check-label" for="Q13A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">12.</div>
                                                </div>
                                                <div class="col">
                                                     <p>要/被保險人是否為聽語障人士?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q14" id="Q14A1" value="Yes">
                                                <label class="form-check-label" for="Q14A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q14" id="Q14A2" value="No">
                                                <label class="form-check-label" for="Q14A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">13.</div>
                                                </div>
                                                <div class="col">
                                                     <p>要/被保險人職業?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <select class="form-select" aria-label="">
                                                <option selected>請選擇</option>
                                                <option value="1">包含當鋪、金融代辦中心、地下匯兌等提供金融服務之非銀行單位、虛擬貨幣的發行者或交易商、賭場、 賽馬或賭博相關行業。</option>
                                                <option value="2">包含國內外政治人士、外交人員、大使館、辦事處、軍火商、珠寶、骨董或名畫古玩商、銀樓、貴金屬交易商、拍賣公司、基金會、協會、寺廟、教會從業人員。</option>
                                                <option value="3">不動產買賣商、律師、會計師、貿易商、證券或期貨仲介經紀商、公證人，或是其合夥人或受雇人</option>
                                                <option value="4">前3類以外者</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">14.</div>
                                                </div>
                                                <div class="col">
                                                     <p>要/被保險人的屬性? <button type="button" class="Icon_info" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="（一）專業客戶：係指要保人或被保險人符合以下條件之一者： 1.依金融消費者保護法第四條第二項授權規定之專業投資機構。 2.要保人或被保險人為法人，其接受財產保險業者提供保險商品或服務 時最近一期之財務報告總資產達新臺幣五千萬元以上。 （二）非專業客戶：係指符合前項專業客戶條件以外之要保人或被保險人。" data-bs-original-title="" title="">i</button> <span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <select class="form-select" aria-label="">
                                                <option selected>請選擇</option>
                                                <option value="1">非專業客</option>
                                                <option value="2">專業客戶</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">15.</div>
                                                </div>
                                                <div class="col">
                                                     <p>要保人繳交保險費之資金來源為?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <select class="form-select" aria-label="">
                                                <option selected>請選擇</option>
                                                <option value="1">工作或營業收入</option>
                                                <option value="2">存款</option>
                                                <option value="3">其他</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <input class="mt-3 form-control form-control-lg" type="text" placeholder="請輸入繳交保險費之資金來源" aria-label="" name="formAnswer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">16.</div>
                                                </div>
                                                <div class="col">
                                                    <p>投保前三個月內是否有辦理終止契約、貸款或保險單借款之情形？<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q16" id="Q16A1" value="Yes" onclick="alertE5()">
                                                <label class="form-check-label" for="Q16A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q16" id="Q16A2" value="No">
                                                <label class="form-check-label" for="Q16A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">17.</div>
                                                </div>
                                                <div class="col">
                                                    <p>要/被保險人家庭年收入?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-4 mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <select class="form-select" aria-label="">
                                                <option selected>請選擇</option>
                                                <option value="1">50萬以內</option>
                                                <option value="2">50萬~100萬</option>
                                                <option value="3">100萬~200萬</option>
                                                <option value="3">200萬~400萬</option>
                                                <option value="3">400萬以上</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">18.</div>
                                                </div>
                                                <div class="col">
                                                    <p>過去一年內要/被保人是否居住於中華民國境外超過半年以上?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q18" id="Q18A1" value="Yes" onclick="alertE6()">
                                                <label class="form-check-label" for="Q19A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q18" id="Q18A2" value="No">
                                                <label class="form-check-label" for="Q18A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="Qnum">19.</div>
                                                </div>
                                                <div class="col">
                                                    <p>要/被保險人是否是現任（或曾任）國內外政府或國際組織之重要政治性職務人士（如：中央或地方民意代表、公務機關首長）?<span>*必填</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2 ms-lg-0 ms-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q19" id="Q19A1" value="Yes" onclick="alertE7()">
                                                <label class="form-check-label" for="Q19A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q19" id="Q19A2" value="No">
                                                <label class="form-check-label" for="Q19A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="BoxHearing" id="A02">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div>
                                            <p>要保人若為聽障人士者，將以簡訊或電子郵件替代電話抽樣訪問投保意願。</p>
                                        </div>
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="Hearing" id="CheckboxHearing">
                                            </div>
                                            <div class="col-auto">
                                                <label for="CheckboxHearing">我需要此服務</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="text-boxT">
                                    <div class="selectPet_check">
                                        <input class="form-check-input" type="checkbox" value="" id="CheckboxAssign">
                                    </div>
                                    <div>
                                        <label for="CheckboxAssign">同意指定獸醫院：</label><button class="cardQ_btn" type="button" data-bs-toggle="modal" data-bs-target="#ModalMap"><i class="fas fa-link"></i> 全台指定動物醫院</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn_PREV" href="step2.php"><i class="fas fa-chevron-left"></i> 上一步</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="sidebar">
                        <h5>摘要</h5>
                        <div class="row align-items-center">
                            <div class="col colN">保單</div>
                            <div class="col colD text-end">共<span>2</span>筆</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col colN">總計保費</div>
                            <div class="col colD text-end">$9,120</div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <div id="BoxRemind">
                                    <h6>請完成下列：</h6>
                                    <ul>
                                        <li><a href="#A01">投保聲明資料填寫</a></li>
                                        <li><a href="#A02">請詳閱指定獸醫院</a></li>
                                    </ul>
                                </div>
                                <div class="actionbar">
                                    <a id="btn-next" class="btn btn-primary btn-lg d-block" href="step4.php">下一步</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebarB">
                            <ul>
                                <li>保險預定生效日於當日凌晨0時起，保險期間一年。</li>
                                <li>更多相關FAQ請點選此<a href="#">連結</a>。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("module/modal-map.php"); ?>  
<?php include("module/footer.php"); ?>
</body>
</html> 
 