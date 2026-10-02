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
                            <div class="text-box" id="A03">
                                <div class="text-boxT">
                                    <div class="selectPet_check">
                                        <input class="form-check-input" type="checkbox" value="" id="CheckboxTerm1">
                                    </div>
                                    <div>會員網路保險服務契約 <span class="selectPet_checkNote">※ 完整閱讀後(內文拉到底)將自動勾選聲明事項</span></div>
                                </div>
                                <div id="member">
<pre><span>第一條 契約之適用範圍</span>
當事人間依電子簽章法及相關法令之規定從事網路保險事務者，適用本契約之約定。但個別網路保險服務契約對消費者之保護更有利者，從其約定。
<span>第二條 名詞定義</span>
本契約之名詞定義如下：
一、「保險電子交易」：指消費者經由網際網路與本保險公司資訊系統電腦連線，且利用電子簽章或其他足資辨識消費者身分之方式，直接取得本保險公司所提供之各項保險服務。
二、「電子訊息」：指本保險公司或消費者經由網際網路連線傳遞之訊息。
三、「數位簽章」：指將電子文件以數學演算法或其他方式運算為一定長度之數位資料，以簽署人之私密金鑰對其加密，形成電子簽章，並得以公開金鑰加以驗證者。
四、「私密金鑰」：指一組具有配對關係之數位資料中，由簽章製作者保有之數位資料，該數位資料係作電子訊息解密及製作數位簽章之用。
五、「公開金鑰」：指一組具有配對關係之數位資料中，用以對電子訊息加密、或驗證簽署者身分及數位簽章真偽之數位資料。
六、「加密」：指利用數學演算法或其他方法，將電子文件以亂碼方式處理。
七、「電子簽章」：指依附於電子文件並與其相關連，用以辨識及確認電子文件簽署人身分、資格及電子文件真偽者。
八、「憑證」：指載有簽章驗證資料，用以確認簽署人身分、資格之電子形式證明。
九、「資訊系統」：指產生、送出、收受、儲存或其他處理電子形式訊息資料之系統。
<span>第三條 連線所使用之網路</span>
本公司及消費者應各自與網路業者簽訂網路服務契約，並各自負擔網路使用之費用。
<span>第四條 網頁之確認</span>
消費者使用本公司網路投保服務前，應先確認本公司正確之網址。
本公司應盡善良管理人之注意義務，隨時維護網站的正確性與安全性，以避免消費者之權益受損。
<span>第五條 電子訊息之接收與回應</span>
本公司接收電子訊息後，應立即以下列方式之ㄧ要求消費者再確認：
一、以資訊系統自動回覆通知消費者。
二、以資訊系統再次確認裝置提示消費者。
經消費者依前項規定再確認者，該項電子訊息視為已經本公司受理。
本公司受理消費者之電子訊息後，應即時進行檢核或處理，並於三個工作日內將結果通知消費者。
本公司於消費者完成要保文件填寫(登打)後，應告知消費者已將其網路投保相關文件轉送給保險公司。
本公司應要求保險公司於同意承保後，將網路投保交易成功訊息（內容包含保險單號碼或交易序號、保險單生效時間、保險金額等重要資訊）傳送予本公司與消費者。且要求保險公司同意承保後，保險契約即為成立。
本公司、消費者或保險公司接收來自任一方任何電子訊息，若無法辨識其身分或內容時，視為傳送作業未完成。但本公司或保險公司可確定消費者身分時，應立即將內容無法辨識之事實通知消費者。
<span>第六條 電子訊息之不處理</span>
有下列情形之一者，本公司或保險公司得不處理任何接收之電子訊息：
一、本公司或保險公司能舉出證據有具體理由懷疑電子訊息之真實性或所指定事項之正確性者。
二、本公司或保險公司依據電子訊息處理，將違反相關法令或保險契約之規定者。
本公司或保險公司不處理前項電子訊息者，應同時將不處理之具體理由及情形通知消費者。
<span>第七條 消費者軟硬體安裝與風險</span>
消費者申請使用本服務，應自費安裝其所需之電腦軟體、硬體，以及其他與安全相關之設備。
<span>第八條 消費者之注意義務</span>
消費者對使用者帳號、密碼、憑證及相關文件，應妥善保管。
消費者輸入前項密碼連續錯誤達三次時，本公司資訊系統即自動停止消費者使用本契約之服務。消費者如擬恢復使用，應向本公司提出申請。
<span>第九條 交易核對</span>
本公司或保險公司於每筆交易指示處理完畢後，以電子訊息通知消費者，消費者應核對其結果有無錯誤。如有不符，應於通知到達之日起四十五日內，通知本公司或保險公司查明。
本公司或保險公司對於消費者之通知，應即進行調查，並於通知到達本公司或保險公司之日起四十五日內，將調查之情形或結果覆知消費者。
<span>第十條 電子訊息錯誤之處理</span>
消費者使用本服務，如其電子訊息因不可歸責於消費者之事由而發生錯誤者，本公司或保險公司應協助消費者更正，並提供其他必要之協助。
前項錯誤之發生，係因可歸責於本公司或保險公司者，本公司或保險公司應於知悉時，立即更正，並同時以電子訊息或雙方約定之方式通知消費者。
<span>第十一條 電子文件之合法授權與責任</span>
雙方應確保所傳送至對方之電子訊息均經合法授權。
雙方於發現有第三人冒用或盜用使用者帳號、密碼、憑證或其他任何未經合法授權之情形，應立即以電話或書面或其他約定方式通知他方停止使用本服務並採取防範之措施。
本公司或保險公司接受消費者為前項通知前，已依本服務之指示為給付或作為者，得對抗消費者。但本公司或保險公司有故意或過失者不在此限。
<span>第十二條 資料安全</span>
本公司對於所保有消費者及其利害關係人之個人資料檔案，應採取適當之安全措施，防止個人資料被竊取、竄改、毀損、滅失或洩露。
本公司違反前項規定，致個人資料遭不法蒐集、處理、利用或其他侵害當事人權利者，應負損害賠償責任。但能證明其無故意或過失者，不在此限。
<span>第十三條 資訊保密義務</span>
本公司因處理本契約及基於本契約所從事之保險電子交易，所取得之相關資料負有保密義務。除經當事人同意或符合個人資料保護之相關法令規定外，本公司不得使用於與本契約無關之目的或對第三人揭露。
<span>第十四條 損害賠償責任</span>
因本契約雙方之故意或過失，就本契約傳送或接收電子訊息，有遲延、遺漏或錯誤之情事；或就本契約所生義務之不履行或遲延履行，而致他方受有損害時，應負賠償責任。
<span>第十五條 紀錄保存</span>
雙方應保存所有本服務訊息（不含查詢類）紀錄，並應確保其真實性及完整性。
本公司對前項紀錄之保存，應盡善良管理人之注意義務。
保存期限至少為保險契約有效期間屆滿或通知消費者不同意承保後五年。
<span>第十六條 電子訊息之效力</span>
消費者、本公司及保險公司同意依本契約利用電子文件方式交換之電子訊息，其效力與書面簽署文件相同。
消費者同意經本公司資訊系統提供予保險公司之電子訊息，視為本人所為之意思表示或通知。
<span>第十七條 消費者終止契約</span>
消費者得隨時通知本公司終止本契約。
<span>第十八條 本公司終止契約</span>
本公司欲終止本契約時，須於終止日三十日前以書面通知消費者。但消費者如有下列情事之一者，本公司得隨時以書面通知消費者終止本契約：
一、消費者未經本公司同意，擅自將本契約之權利或義務轉讓第三人。
二、消費者受法院破產或重整宣告。
三、消費者違反本契約第十一條第一項之規定。
四、消費者違反本契約之其他約定，經催告改善或限期請求履行未果。
<span>第十九條 通知處所</span>
消費者或本公司就本契約事項對他方為通知者，應向他方所留存本契約之最後地址或電子郵件信箱為之。
<span>第二十條 法令適用</span>
本契約準據法，依中華民國法律。
<span>第二十一條 管轄法院</span>
因本契約涉訟者，雙方同意以消費者住所地地方法院為第一審管轄法院。消費者之住所在中華民國境外時，以臺灣台北地方法院為第一審管轄法院。但不得排除消費者保護法第四十七條及民事訴訟法第四百三十六條之九小額訴訟管轄法院之適用。
<span>第二十二條 契約修訂</span>
本契約如有未盡事宜，得經本公司及消費者協議補充或修正之。</pre>                            
                                </div>
                            </div>
                            <div class="text-box" id="A04">
                                <div class="text-boxT">
                                    <div class="selectPet_check">
                                        <input class="form-check-input" type="checkbox" value="" id="CheckboxTerm2">
                                    </div>
                                    <div>履行個資法告知義務事項 <span class="selectPet_checkNote">※ 完整閱讀後(內文拉到底)將自動勾選聲明事項</span></div>
                                </div>
                                <div id="privacy">
<pre>親愛的客戶，您好：
和安保險代理人股份有限公司（下稱本公司）及本公司所代理之產物保險公司依據個人資料保護法（以下稱個資法）第8條第1項（如為間接蒐集之個人資料則為第9條第1項）規定，向 台端告知下列事項，請 台端詳閱：
<span>一、 蒐集之目的：</span>
(一) 保險代理
(二) 人身保險
(三) 財產保險
(四) 其他經營合於營業登記項目或組織章程所定之業務
<span>二、 蒐集之個人資料類別：</span>
姓名、身分證統一編號/護照號碼、出生年月日、住址、財務狀況、聯絡方式、病歷、醫療、健康檢查、職業、保險資料等，詳如相關業務申請書或契約書內容。
<span>三、 個人資料之來源（個人資料非由當事人提供間接蒐集之情形適用）</span>
(一) 要保人/被保險人
(二) 司法警憲機關、委託協助處理理賠之公證人或機構
(三) 當事人之法定代理人、輔助人
(四) 各醫療院所
(五) 與第三人共同行銷、交互運用客戶資料、合作推廣等關係、或於本公司各項業務內所委託往來之第三人。
<span>四、 個人資料利用之期間、地區、對象、方式：</span>
(一) 期間：
因執行業務所必須、依法令規定應為保存之期間或依個別契約就資料之保存所定之保存年限。
(二) 對象：
本公司、本公司所代理之產物保險公司、中華民國產物保險商業同業公會、中華民國人壽保險商業同業公會、財團法人保險事業發展中心、財團法人保險安定基金、財團法人住宅地震保險基金、財團法人汽車交通事故特別補償基金、財團法人保險犯罪防制中心、財團法人金融消費評議中心、財團法人金融聯合徵信中心、財團法人聯合信用卡中心、台灣票據交換所、財金資訊公司、關貿網路股份有限公司、中央健康保險局、業務委外機構、依法有調查權機關或金融監理機關。
(三) 地區：
上述對象所在之國內及國外之地區。
(四) 方式：
合於法令規定之利用方式。
<span>五、 依據個資法第3條規定， 台端就本公司及本公司所代理之產物保險公司保有 台端之個人資料得行使之權利及方式：</span>
(一) 得向本公司行使之權利：
1 向本公司查詢、請求閱覽或請求製給複製本，惟本公司依個資法第十四條規定得酌收必要成本費用。
2 向本公司請求補充或更正，惟依個資法施行細則第十九條規定，台端應適當釋明其原因及事實。
3 向本公司請求停止蒐集、處理或利用及請求刪除。
4 向本公司就台端個人資料正確性有爭議之部分，請求停止處理或利用。
(二) 行使權利之方式：以書面或其他日後可供證明之方式。
<span>六、 台端不提供個人資料所致權益之影響（個人資料由當事人直接蒐集之情形適用）：</span>
台端若未能提供相關個人資料時，本公司將可能延後或無法進行必要之審核作業，因此將婉謝、延遲或無法提供 台端相關服務。
針對上開告知事項，如有任何問題歡迎洽詢本公司0800-066-020免費諮詢專線。</pre>                            
                                </div>
                            </div>
                            <div class="text-box" id="A05">
                                <div class="text-boxT">
                                    <div class="selectPet_check">
                                        <input class="form-check-input" type="checkbox" value="" id="CheckboxTerm2">
                                    </div>
                                    <div>我已閱讀並同意保單條款 <span class="selectPet_checkNote">※ 完整閱讀後(內文拉到底)將自動勾選聲明事項</span></div>
                                </div>
                                <div id="terms">
<pre>
<span>旺旺友聯產物保險股份有限公司(Union Insurance Co., Ltd.)</span>
有關本公司公開資訊，請見本公司網址：www.wwunion.com 免費申訴電話：0800-024-024
※本商品經本公司合格簽署人員檢視其內容業已符合保險精算原則及保險法令，惟為確保權益，基於保險業與消費者衡平對等原則，消費者仍應詳加閱讀保險單條款與相關文件，審慎選擇保險商品。本商品如有虛偽不實或違法情事，應由本公司及負責人依法負責。【本商品受保險安定基金之保障】

<span>旺旺友聯產物寵物全能綜合保險</span>
115.09.01旺總精算字第1150001462號函備查
【主要給付項目】寵物醫療費用保險金、寵物侵權責任保險金、寵物協尋廣告費用保險金、被保險人住院期間寵物寄宿費用保險金、寵物喪葬費用保險金、寵物重新取得費用保險金

<span>第一章 共同條款</span>
<span>第一條 保險契約之構成與解釋</span>
本保險契約所載條款、批註及其他記載事項與本契約所附著之要保書及其他約定書均係本保險契約之構成部份。
本保險契約之解釋，應探求契約當事人之真意，不得拘泥於所用之文字；如有疑義時，以作有利於被保險人之解釋為原則。
<span>第二條 承保範圍</span>
本保險契約之承保範圍係由下列保險所構成，得經雙方當事人同意後，就下列各類別保險同時或二種以上訂定之：
一、寵物醫療費用保險。
二、寵物侵權責任保險。
三、寵物協尋廣告費用保險。
四、被保險人住院期間寵物寄宿費用保險。
五、寵物喪葬費用保險。
六、寵物重新取得費用保險。
<span>第三條 用詞定義</span>
本保險契約之用詞定義如下：
一、要保人：指向本公司投保並負有交付保險費義務之人。
二、被保險人：指本保險契約所載明之被保險人，但以被保險寵物之飼主為限。
三、第三人：指被保險人、被保險人之配偶、家屬、同居人或家務受僱人以外之人。
四、被保險寵物：指因玩賞、伴侶之目的而飼養或管領，已向農業部辦理寵物登記且植入晶片，並經本公司同意承保且載明於本保險契約之犬隻或貓隻，不包含專門繁殖用、狩獵用、工作用、醫學用途之犬隻或貓隻。
五、疾病：指被保險寵物自本保險契約生效日起持續有效達下列期間或續保日以後所發生之疾病：
（一）九十日：癌症、膝蓋骨異位、髖關節發育不良、椎間盤突出、心臟疾病、腎臟疾病、癲癇、糖尿病或甲狀腺疾病。
（二）三十日：非前目所載之其他疾病。
總公司：台北市忠孝東路4段219號12F TEL：(02)2776-5567 FAX：(02)2741-7590
有關本公司公開資訊，請見本公司網址：www.wwunion.com 免費申訴電話：0800-024-024
※本商品經本公司合格簽署人員檢視其內容業已符合保險精算原則及保險法令，惟為確保權益，基於保險業與消費者衡平對等原則，消費者仍應詳加閱讀保險單條款與相關文件，審慎選擇保險商品。本商品如有虛偽不實或違法情事，應由本公司及負責人依法負責。【本商品受保險安定基金之保障】
六、傷害：指被保險寵物於保險期間內因非自身疾病引起之外來突發事故，因而蒙受之傷害。
七、指定獸醫院：指依中華民國獸醫師法規定領有開業執照，且經本公司於要保書或其他約定方式載明之指定公、私立之獸醫診療機構。
八、寵物寄養業：指依中華民國特定寵物業管理辦法規定領有特定寵物業許可證之特定寵物寄養業者。
九、國外：指台灣、澎湖、金門、馬祖及中華民國政府統治權所及之其他地區以外之國家或地區。
十、門診費用：指被保險寵物在需要診療的狀況下，於指定獸醫院接受一般門診治療，包含治療前之相關檢查費用。
十一、住院費用：指被保險寵物經獸醫師診斷其疾病或傷害必須入住指定獸醫院，且正式辦理住院手續並確實在指定獸醫院接受診療達六小時以上，因而所需之費用。
十二、手術費用：指被保險寵物以治療為目的，利用器具及麻醉將患部或必要部位切除或切開等行為所需之費用，包含門診手術費用。上述手術費用包含手術前之相關檢查費用，惟其相關檢查費用不得與當次門診費用之相同檢查費用重複申請，僅能擇一申請。經獸醫師診斷建議並執行安樂死所生之費用亦視為手術費用。
<span>第四條 共同不保事項</span>
因下列原因所致之損失，本公司不負理賠之責：
一、戰爭、類似戰爭（不論宣戰與否）、敵人侵略、外敵行為、叛亂、內亂、其他類似武裝變亂、強力霸佔或被徵用所致者。
二、要保人或被保險人本人、配偶、家屬、同居人或家務受僱人之故意行為所致者。
三、政府機關或其委託之有關單位依法之沒入或撲殺。
四、被保險人犯罪行為。
五、因原子或核子能裝置所引起之爆炸、灼熱、輻射或污染。
六、被保險寵物為供出租或販售者。
七、被保險寵物從事競賽、獵捕或特技表演所致者。
八、於國外所發生之事故所致者。
九、被保險寵物罹患動物傳染病所致者，前述動物傳染病係依動物傳染病防治條例法第六條第一項及其他相關法令認定之。
十、因颱風、暴風、龍捲風、洪水、閃電、雷擊、地震、火山爆發、海嘯、土崩、岩崩、土石流或地陷等天然災變所致者。
<span>第五條 自負額</span>
被保險人於保險期間發生承保範圍內之損失時，對於每一次損失，須先負擔本保險契約所約定之自負額，本公司僅就超過自負額部份之損失負理賠責任。
<span>第六條 告知義務</span>
要保人在訂立本契約時，對於本公司要保書書面或投保網頁所詢問之告知事項應據實說明，如有為隱匿或遺漏不為說明，或為不實之說明，足以變更或減少本公司對於危險之估計者，本公司得解除契約，其保險事故發生後亦同。但危險之發生未基於其說明或未說明之事實時，不在此限。
前項解除契約權，自本公司知有解除之原因後經過一個月不行使而消滅。
<span>第七條 保險費之計收</span>
本保險契約之保險期間為一年者，以一年為期計收保險費。
保險期間如不足一年，本公司按短期費率計收保險費。
<span>第八條 保險費之交付</span>
要保人應於本保險契約訂立時，向本公司所在地或指定地點交付保險費。
要保人於交付保險費時，本公司應給與收據或繳款證明或委由代收機構出具其它相關之繳款證明為憑。除經本公司同意延緩交付外，對於保險費交付前所發生之損失，本公司不負賠償責任。
<span>第九條 保險契約終止與保險費返還</span>
要保人得隨時終止本契約。
前項契約之終止，自本公司收到要保人書面或其他約定方式通知翌日起開始生效，對於終止前之保險費本公司按短期費率計算。但被保險寵物於保險期間內遺失或死亡時，經要保人終止契約者，本公司應返還之未滿期保險費應按日數比例計算。
被保險人對本保險契約之理賠有詐欺行為，或要保人未依約定交付保險費者，本公司得以書面通知送達要保人最後留於本公司之住所或居所後第十五日終止本保險契約。
本公司依本保險契約之約定就各承保範圍所賠付之金額，已達保險期間內各承保範圍類別約定之保險金額時，該保險之效力即行終止，其未滿期之保險費不予退還。
本條之終止，已有領取承保範圍內任一項保險之保險金者，本公司就該項保險不返還未滿期保險費。
<span>第十條 契約內容之變更</span>
有關本保險契約之通知事項，除另有特別約定外，要保人或被保險人應以書面或其他約定方式為之。本契約所記載事項遇有變更時，要保人或被保險人應於事前以書面或其他約定方式通知本公司。上述變更，需經本公司簽批同意後始生效力。
<span>第十一條 危險發生之通知</span>
遇有承保之危險事故發生時，要保人或被保險人應於知悉後五日內，通知本公司。
未依前項約定為通知者，對於本公司因此所受之損失，被保險人應負賠償責任。
<span>第十二條 代位</span>
被保險人因本保險契約承保範圍內之損失而對於第三人有賠償請求權者，本公司得於給付賠償金額後，於賠償金額範圍內代位行使被保險人對於第三人之請求權，所衍生之費用由本公司負擔。
被保險人不得免除或減輕對第三人之請求權利或為任何不利本公司行使該項權利之行為，被保險人違反前述約定者，雖理賠金額已給付，本公司仍得於受妨害而未能請求之範圍內請求被保險人返還之。
<span>第十三條 其他保險</span>
本保險契約所承保之損失，若有其他保險契約亦加以承保，且所能受領之總保險金超過其損失金額時，本公司依照下列公式計算應給付之保險金：
損失金額×（本保險契約原應給付之保險金÷各保險契約原應給付保險金之總額）
本條之約定不適用於定額補償之保險給付。
<span>第十四條 消滅時效</span>
由本保險契約所生之權利，自得為請求之日起，經過二年不行使而消滅。有下列各款情形之一者，其期限之起算，依各該款之規定：
一、要保人或被保險人對於危險之說明，有隱匿遺漏或不實者，自本公司知情之日起算。
二、危險發生後，利害關係人能證明其非因疏忽而不知情者，自其知情之日起算。
三、要保人或被保險人對於本公司之請求，係由於第三人之請求而生者，自要保人或被保險人受請求之日起算。
<span>第十五條 申訴、調解或仲裁</span>
本公司與要保人或被保險人或其他有保險賠償請求權之人對於因本契約所生爭議時，得提出申訴或提交調解或經雙方同意提交仲裁，其程序及費用等，依相關法令或仲裁法規定辦理。
<span>第十六條 管轄法院</span>
因本保險契約涉訟時，約定以要保人或被保險人住所地之地方法院為管轄法院。但要保人或被保險人住所地在中華民國境外者，則以臺灣臺北地方法院為管轄法院。
<span>第十七條 法令之適用</span>
本保險契約未約定之事項，悉依照中華民國保險法或其他法令之規定辦理。

<span>第二章 寵物醫療費用保險</span>
<span>第十八條 承保範圍</span>
被保險寵物於保險期間內因第三條約定之疾病或傷害於指定獸醫院內進行診療者，本公司就被保險人實際所支出之醫療費用，給付寵物醫療費用保險金，但不包含交通費及看護費。前述醫療費用分為門診費用、住院費用及手術費用。
因皮膚或毛髮相關疾病所生之醫療費用僅以門診費用給付為限，另本公司於保險期間內，僅於每一保險事故醫療費用保險金額範圍內給付二次為限。
<span>第十九條 同一保險事故之認定</span>
因不同疾病或傷害於同一日內所為之診療，視為同一保險事故。
因同一疾病或傷害，或因此引起之併發症，十四日內於任一指定獸醫院再次診療時，其各項保險金給付合計額，視為同一保險事故。
<span>第二十條 保險金額</span>
寵物醫療費用保險之保險金額係指：
一、每一保險事故醫療費用保險金額：指任何一次保險事故內，本公司對於被保險寵物醫療費用所負之最高賠償金額，但仍受保險單首頁所列醫療費用項目之保險金額之限制。
二、保險期間內累積最高賠償限額：指被保險人向本公司之賠償請求超過一次時，本公司所負之累積最高賠償金額，但仍受保險單首頁所列醫療費用項目之保險金額之限制。
<span>第二十一條 特別除外責任</span>
除本保險契約第四條共同不保事項外，對於下列事故所致之費用，本公司不負賠償責任：
一、進行美容、除爪、修甲、清潔、除蟲、身體（健康）檢查、預防注射、疫苗接種、整型、行為矯正及預防性治療等所生之費用。
二、獸醫建議或自行購買之食品、維他命、礦物質補充劑、健康補充品及沐浴清潔用品等所生之費用。
三、治療口腔疾病（包括牙齒、牙齦或舌部）所生之費用，但因傷害所致者不在此限。
四、本保險契約生效前已知存在且尚未痊癒之疾病或傷害，續保前已發生且尚未痊癒之疾病或傷害者亦同。
五、結紮、懷孕、生產、配種或繁殖及其任何併發症所生之費用。
六、治療短吻呼吸道症候群所生之費用，包含鼻孔（翼）擴張、軟顎切除、喉囊切除或類似手術。
七、治療隱睪症、白內障、青光眼、視網膜退化或退化性骨關節炎所生之費用。
八、治療外觀可見之先天畸形或缺陷、先天性疾病所生之費用。
九、非必要性之治療或手術所生之費用。
十、被保險寵物死亡屍體檢驗所生之費用。
<span>第二十二條 理賠申請文件</span>
被保險人向本公司請求理賠時，應檢附下列文件：
一、理賠申請書（格式由本公司提供）。
二、由指定獸醫院開立且記載被保險寵物晶片序號之診斷證明及檢驗文件。前述文件得由指定獸醫院所提供之數位診斷紀錄及檢驗紀錄替代（由本公司代為取得）。
三、由指定獸醫院開立之醫療費用清單及收據正本。前述文件得由指定獸醫院所提供數位醫療費用紀錄替代（由本公司代為取得）。
四、經指定獸醫院確認須轉診且出具轉診單者，接受轉診之登記合格獸醫院非本公司指定之獸醫院時，應自行提供轉診獸醫院所開立且記載被保險寵物晶片序號之診斷證明、檢驗證明、醫療費用清單及收據正本。
五、必要時本公司得要求提供相關證明文件。
被保險人請求理賠時，本公司基於審核之必要，得徵詢其他獸醫師之醫學專業意見，並得經被保險人同意調閱被保險寵物之就醫相關資料。因此所生之費用由本公司負擔。

<span>第三章 寵物侵權責任保險</span>
<span>第二十三條 承保範圍</span>
被保險人在保險期間內因被保險寵物行為致第三人體傷、死亡或財物損害，依法應負賠償責任，而受賠償請求時，本公司對被保險人負賠償之責。
<span>第二十四條 賠償責任之限制</span>
寵物侵權責任保險之賠償責任限制得依下列方式約定：
一、分項限額約定
（一）每一個人體傷責任之保險金額：指在任何一次意外事故內，本公司對每一個人體傷所負之最高賠償責任。前述所稱體傷含死亡。
（二）每一意外事故體傷責任之保險金額：指在任何一次意外事故傷亡人數超過一人時，本公司對所有傷亡人數所負之最高賠償責任。但仍受每一個人體傷責任之保險金額之限制。
（三）每一意外事故財物損失責任之保險金額：指在任何一次意外事故內，本公司對所有受損財物所負之最高賠償責任。
（四）保險期間內累積最高賠償限額：指本保險契約所受請求賠償次數超過一次時，本公司所負之累積最高賠償責任。
二、單一限額約定
（一）合併單一限額：指在任何一次意外事故內，本公司對所有傷亡人數或受損財物所負之最高賠償責任。
（二）保險期間內累積最高賠償限額：指本保險契約所受請求賠償次數超過一次時，本公司所負之累積最高賠償責任。
<span>第二十五條 特別除外責任</span>
除第四條共同不保事項外，對於下列事故所致之賠償責任或損失，本公司不負賠償責任：
一、被保險寵物出入公共場所或公眾得出入之場所，未由七歲以上之人伴同，或未採取適當防護措施。
二、具攻擊性之被保險寵物出入公共場所或公眾得出入之場所，未由成年人伴同，或未採取適當防護措施。
三、被保險人或其家屬所承租之建築物及其裝潢、設備、傢俱所受之損失。
四、被保險人或其家屬受第三人委託保管、照顧、控制之財物所受之損失。
五、於被保險人住所或居所所生之損失。
前項具攻擊性之寵物及適當防護措施之認定，依動物保護法第二十條第三項及其他相關法令認定之。
<span>第二十六條 保險事故之通知與處置</span>
被保險人受第三人賠償請求時，應按下列規定辦理：
一、於初次受第三人賠償請求後五日內通知本公司。
二、立即採取必要合理措施以避免或減少損失。
三、將收到之賠償請求書、法院令文、傳票或訴狀等影本儘速送交本公司。
四、提供本公司所要求之相關資料及文書證件，或為出庭作證、協助鑑定、勘驗等必要之調查或行為。
<span>第二十七條 承認、和解或賠償之參與</span>
除必要之急救費用外，被保險人對於第三人就其責任所為之承認、和解或賠償，未經本公司參與者，本公司不受拘束。但經要保人或被保險人通知本公司參與而無正當理由拒絕或藉故遲延者，不在此限。
<span>第二十八條 抗辯與訴訟</span>
被保險人因發生本保險契約所承保之危險事故，致被起訴或受賠償請求時：
一、本公司受被保險人之請求，應即就民事部分協助被保險人進行抗辯或和解，所生抗辯費用由本公司負擔。但應賠償金額超過保險金額，若非因本公司之故意或過失所致者，本公司僅按保險金額與應賠償金額之比例分攤之；被保險人經本公司之要求，仍有到法院應訊並協助覓取有關證據之義務。
二、本公司經被保險人之委託進行抗辯或和解，就訴訟上之捨棄、承諾、撤回或和解，非經被保險人書面同意不得為之。
三、被保險人因處理民事賠償請求所生之抗辯費用，經本公司事前書面同意者，由本公司償還之。但應賠償金額超過保險金額者，本公司僅按保險金額與應賠償金額之比例分攤之。
四、被保險人因刑事責任所生之一切費用，由被保險人自行負擔，本公司不負償還之責。
<span>第二十九條 理賠申請文件</span>
被保險人向本公司請求理賠時，應分別依下列情形檢附相關文件：
一、理賠申請書（格式由本公司提供）。
二、和解書、調解書、法院確定判決書等損害賠償責任確定之證明文件。
三、損害金額及支付第三人死亡、體傷、財損之相關證明文件。
四、必要時本公司得要求提供事故證明文件、憲警單位處理證明文件或其他相關證明文件。
<span>第三十條 第三人直接請求權</span>
被保險人對第三人應負損失賠償責任確定時，第三人得在保險金額範圍內，依其應得之比例，直接向本公司請求給付賠償金額。
前項第三人直接向本公司請求給付賠償金額時，本公司基於本保險契約所得對抗要保人或被保險人之事由，亦得以之對抗第三人。

<span>第四章 寵物協尋廣告費用保險</span>
<span>第三十一條 承保範圍</span>
被保險寵物於保險期間內遺失時，本公司就被保險寵物自發現遺失三十日內被保險人實際所發生之媒體或印刷品等協尋廣告費用，給付寵物協尋廣告費用保險金，賠償金額總額以本保險契約保險單首頁上所載「寵物協尋廣告費用保險金額」為限。
前項費用之給付不包含被保險人因懸賞廣告所給付之報酬。
<span>第三十二條 理賠申請文件</span>
被保險人向本公司請求理賠時，應檢附下列文件：
一、理賠申請書（格式由本公司提供）。
二、標明遺失日期之協尋廣告樣本。
三、標明廣告費用支出日期之明細表及收據正本。
四、必要時本公司得要求提供相關證明文件。

<span>第五章 被保險人住院期間寵物寄宿費用保險</span>
<span>第三十三條 承保範圍</span>
被保險人於保險期間內因疾病或遭受意外傷害事故，經登記合格之醫院診治而須住院者，因連續住院日數達三日以上（含入院與出院日），於住院期間無法照護被保險寵物，致寄託被保險寵物於獸醫院或合法設立之寵物寄養業，本公司就被保險人實際所支出寵物寄宿費用，依照本保險契約保險單首頁上所載「被保險人住院期間寵物寄宿費用保險金額」內，給付被保險人住院期間寵物寄宿費用保險金，保險期間給付總日數，最高以本保險契約保險單首頁所載日數為限。
本保險契約第四條第八款之約定於本保險承保範圍不予適用。
<span>第三十四條 用詞定義</span>
本保險承保範圍之用詞定義如下：
一、疾病：指被保險人自本保險契約生效後第三十一日或續保日起所發生之疾病。
二、醫院：指依中華民國醫療法規定領有開業執照並設有病房收治病人之公、私立及醫療法人設立之醫院。
三、住院：指被保險人經醫師診斷其疾病或傷害必須入住醫院，且正式辦理住院手續並確實在醫院接受診療者。
<span>第三十五條 理賠申請文件</span>
被保險人向本公司請求理賠時，應檢附下列文件：
一、理賠申請書（格式由本公司提供）。
二、被保險人住院之醫療診斷書或住院證明；但必要時本公司得要求提供意外傷害事故證明文件。
三、被保險寵物寄宿費用支出明細表及收據正本。
四、必要時本公司得要求提供相關證明文件。

<span>第六章 寵物喪葬費用保險</span>
<span>第三十六條 承保範圍</span>
被保險寵物於保險期間內因第三條約定之疾病或傷害致死，本公司對被保險人實際支出之寵物喪葬費用給付寵物喪葬費用保險金，賠償金額最高以本保險契約保險單首頁所載「寵物喪葬費用保險金額」為限。
<span>第三十七條 理賠申請文件</span>
被保險人向本公司請求理賠時，應檢附下列文件：
一、理賠申請書（格式由本公司提供）。
二、被保險寵物死亡註銷登記之證明。
三、被保險寵物喪葬費用支出明細表及收據正本。
四、必要時本公司得要求提供相關證明文件。

<span>第七章 寵物重新取得費用保險</span>
<span>第三十八條 承保範圍</span>
被保險人因被保險寵物於保險期間內因第三條約定之疾病或傷害致死而重新取得寵物，本公司就被保險人實際支出之下列費用給付寵物重新取得費用保險金：
一、被保險人認養寵物之相關費用，惟以向農業部認可之公立動物收容所辦理認養者為限。前述費用得包含認養、植入晶片、寵物登記、診療、美容、清潔、體檢、預防注射、結紮、預防性治療或除蟲之費用；或
二、被保險人購買寵物之費用，並包含植入晶片及寵物登記之費用。
本公司依前項約定，對被保險人重新取得寵物費用之給付以該重新取得之寵物完成晶片植入、寵物登記者為限，賠償金額最高以本保險契約保險單首頁所載「寵物重新取得費用保險金額」為限。
<span>第三十九條 理賠申請文件</span>
被保險人向本公司請求理賠時，應檢附下列文件：
一、理賠申請書（格式由本公司提供）。
二、被保險寵物死亡註銷登記之證明。
三、寵物認養費用或購買費用之清單及收據正本。
四、重新取得之寵物所植入晶片與辦理寵物登記之證明。
五、必要時本公司得要求提供相關證明文件。




</pre>                            
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
                                        <li><a href="#A03">請詳閱會員網路保險服務契約</a></li>
                                        <li><a href="#A04">請詳閱履行個資法告知義務事項</a></li>
                                        <li><a href="#A05">請詳閱保單條款</a></li>
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
 