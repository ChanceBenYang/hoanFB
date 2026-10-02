<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body class="step_4">
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
                <div class="col col-step active">
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
                    <div class="row mb-2" id="A01">
                        <div class="col-12">
                            <div class="row">
                                <div class="col"><h3>保單內容：</h3></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="selectPlan">
                                <?php for ($a=0; $a < 2; $a++) { ?>
                                <li>
                                    <div class="selectT">
                                        <div class="selectPet_info">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <img class="Pet Pet_Avatar" src="images/Pet_avatar.jpg" alt="">
                                                </div>
                                                <div class="col">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <div>
                                                                <span class="Pet Pet_Name">Coca</span> / 
                                                                <span class="Pet Pet_Variety">荒金獵犬</span> / 
                                                                <span class="Pet Pet_Bd">1991-08</span> / 
                                                                <span class="Pet Pet_Gender">公</span> / 
                                                                <span class="Pet Pet_Status">已絕育</span>
                                                            </div>
                                                            <div>
                                                                <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="寵物晶片號碼">9902545451658</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-xl-4 col-status">
                                                            保險生效日<br class="d-none d-xl-block"/><span class="Pet Pet_status">2025/02/08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selectB">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="selectR">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-lg">
                                                            <div class="cardPlanT">
                                                                <span class="cardPlanPv">旺旺友聯</span>
                                                                <span class="cardPlanName">寵物綜合險-方案一1-1</span>
                                                                <button class="cardPlanModal" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-play-circle"></i> 詳細</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-auto">
                                                            <div class="cardPlanPrice"><span>$3,830</span>/年</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="A02">
                        <div class="col mt-3 mb-2">
                            <div class="row">
                                <div class="col"><h3 class="h3_H">信用卡交易資訊</h3></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="payment-method">
										<div class="payment-method-form">
											<div class="mb-3 row align-items-center">
												<label for="" class="col-12 col-lg-2 col-form-label">信用卡卡號</label>
                                                <div class="col-12 col-lg-10 col-xll-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <input type="" maxlength="4" class="form-control form-control-lg" id="" placeholder="">
                                                        </div>
                                                        <span>-</span>
                                                        <div class="">
                                                            <input type="" maxlength="4" class="form-control form-control-lg" id="" placeholder="">
                                                        </div>
                                                        <span>-</span>
                                                        <div class="">
                                                            <input type="" maxlength="4" class="form-control form-control-lg" id="" placeholder="">
                                                        </div>
                                                        <span>-</span>
                                                        <div class="">
                                                            <input type="" maxlength="4" class="form-control form-control-lg" id="" placeholder="">
                                                        </div>
                                                        <img class="card_P" src="images/card_P.png" alt="">
                                                    </div>
                                                </div>
											</div>
											<div class="mb-3 row align-items-center">
												<label for="" class="col-12 col-lg-2 col-form-label">有效年月</label>
                                                <div class="col-12 col-lg-6 col-xll-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <select name="cardValidMonth" id="cardValidMonth" checked="false" class="form-control form-control-lg"><option value="X">請選擇</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
                                                        </div>
                                                        <span>/</span>
                                                        <div class="">
                                                            <select name="cardValidYear" id="cardValidYear" checked="false" class="form-control form-control-lg"><option value="X">請選擇</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2041">2042</option><option value="2041">2043</option><option value="2041">2044</option><option value="2041">2045</option></select>
                                                        </div>
                                                        <span>年</span>
                                                    </div>
                                                </div>
											</div>
                                            <div class="mb-3 row align-items-center">
												<label for="" class="col-12 col-lg-2 col-form-label">持卡人姓名</label>
												<div class="col-12 col-lg-5">
													<input type="name" class="form-control form-control-lg" id="" placeholder="請輸入信卡片上的姓名" value="WEIPIN YANG" disabled>
												</div>
											</div>
											<div class="mb-3 row">
												<label for="" class="col-12 col-lg-2 col-form-label">手機號碼</label>
												<div class="col-12 col-lg-6">
													<input type="tel" class="form-control form-control-lg" id="" placeholder="請輸入信用卡登記手機號碼" value="0961218920" disabled>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <a class="btn_PREV" href="step3.php"><i class="fas fa-chevron-left"></i> 上一步</a>
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
                                        <li><a href="#A01">確認保單內容</a></li>
                                        <li><a href="#A02">填寫信用卡資訊</a></li>
                                    </ul>
                                </div>
                                <div class="actionbar">
                                    <a id="btn-next" class="btn btn-primary btn-lg d-block" href="otp.php">下一步</a>
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
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="selectT" id="exampleModalLabel">
                    <div class="selectPet_info">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <img class="Pet Pet_Avatar" src="images/Pet_avatar.jpg" alt="">
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div>
                                            <span class="Pet Pet_Name">Coca</span> / 
                                            <span class="Pet Pet_Variety">荒金獵犬</span> / 
                                            <span class="Pet Pet_Bd">1991-08</span> / 
                                            <span class="Pet Pet_Gender">公</span> / 
                                            <span class="Pet Pet_Status">已絕育</span>
                                        </div>
                                        <div>
                                            <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="寵物晶片號碼">9902545451658</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include("module/insuranceD.php"); ?>
            </div>
        </div>
    </div>
</div>
    
<?php include("module/footer.php"); ?>
</body>
</html> 
 