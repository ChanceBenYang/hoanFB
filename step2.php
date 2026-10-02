<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body class="step_2">
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
                <div class="col col-step">
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
                    <div class="row" id="A01">
                        <div class="col"><h3>試算結果：</h3></div>
                    </div>
                    <ul class="selectPlan">
                        <?php for ($a=0; $a < 2; $a++) { ?>
                        <li>
                            <div class="selectT">
                                <button class="btn_delete"><i class="fas fa-times"></i></button>
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
                                                        <span class="Pet Pet_Neutered">已絕育</span>
                                                    </div>
                                                    <div>
                                                        <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="寵物晶片號碼">9902545451658</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selectB">
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <p>寵物體重(請輸入整數，單位為公斤)?<span>*必填</span></p>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2">
                                            <input placeholder="請輸入公斤整數" class="form-control" type="text" name="kg" id="kg" value="" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" oninput="value=value.replace(/[^\d.]/g,'')" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <p>目前被保險寵物身體是否有以下障礙或殘疾？<span>*必填</span></p>
                                            <p class="note">耳聾、兩肢(含)以上斷(缺)肢、甲狀腺功能異常、癌症、傳染性腹膜炎、白血病、愛滋病、胰臟炎、心臟病、糖尿病、腎臟病、四肢癱瘓</p>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-deny" type="radio" name="Q11" id="Q11A1" value="Yes" onclick="alertE1()"/>
                                                <label class="form-check-label" for="Q11A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q11" id="Q11A2" value="No">
                                                <label class="form-check-label" for="Q11A2">否</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 cardQ">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-12 col-lg-8">
                                            <p>被保險寵物除前項障礙或殘疾，是否仍有其他治療中之傷病？<span>*必填</span></p>
                                        </div>
                                        <div class="col-auto mt-lg-0 mt-2">
                                            <div class="form-check form-check-inline" data-bs-toggle="modal" data-bs-target="#ModalAnswer"><!--套用bs彈出視窗-->
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q12" id="Q12A1" value="Yes">
                                                <label class="form-check-label" for="Q12A1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input form-check-input-agree" type="radio" name="Q12" id="Q12A2" value="No">
                                                <label class="form-check-label" for="Q12A2">否</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="cardDia">
                                                <div class="row">
                                                    <div class="col cardDia_T">傷病名稱：</div>
                                                    <div class="col cardDia_N text-end">關節疾病</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selectB selectBB">
                                <div>
                                    <h3 class="h3_H">請選擇投保方案：</h3>
                                </div>
                                <div class="row">
                                    <?php for ($i=0; $i < 3; $i++) { ?>
                                    <div class="col-12">
                                        <div class="cardPlan">
                                            <div class="selectPet_check">
                                                <input class="form-check-input selectPet_radio" type="radio" name="selectPlan<?php echo ($a+1) ?>" value="" id="selectPet_radio_<?php echo ($a+1) ?><?php echo ($i+1) ?>">
                                            </div>
                                            <label class="selectR" for="selectPet_radio_<?php echo ($a+1) ?><?php echo ($i+1) ?>">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg">
                                                        <div class="cardPlanT">
                                                            <span class="cardPlanPv">旺旺友聯</span>
                                                            <span class="cardPlanName">寵物綜合險-方案一<?php echo ($a+1) ?>-<?php echo ($i+1) ?></span>
                                                        </div>
                                                        <div class="cardPlanBrief">
                                                            醫療最高理賠<span>6.8</span>萬，日付不到<span>7</span>元! 
                                                            <button class="cardPlanModal" type="button" data-bs-toggle="modal" data-bs-target="#ModalInfo"><i class="fas fa-play-circle"></i> 詳細</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-auto">
                                                        <div class="cardPlanPrice"><span>$3,830</span>/ 年</div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="row">
                        <div class="col mt-3">
                            <a class="btn_PREV" href="index.php"><i class="fas fa-chevron-left"></i> 上一步</a>
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
                                        <li><a href="#A01">選擇寵物投保方案</a></li>
                                    </ul>
                                </div>
                                <div class="actionbar">
                                    <a id="btn-next" class="btn btn-primary btn-lg d-block disabled" href="step3.php" >立即投保</a>
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
        
<script>
    function checkBothSelected() {
        const selectPlanSelected1 = document.querySelector('input[name="selectPlan1"]:checked');
        const selectPlanSelected2 = document.querySelector('input[name="selectPlan2"]:checked');
        const btnNext = document.getElementById("btn-next");
        
        if (selectPlanSelected1 && selectPlanSelected2) {
            btnNext.classList.remove("disabled");
            document.getElementById("BoxRemind").classList.add("checked");
        } else {
            btnNext.classList.add("disabled");
            document.getElementById("BoxRemind").classList.remove("checked");
        }
    }
    
    document.querySelectorAll('.selectBB').forEach(container => {
        container.addEventListener('change', function(event) {
            if (event.target.type === 'radio') {
                const labels = container.querySelectorAll('label');
                labels.forEach(label => {
                    if (label.htmlFor === event.target.id) {
                        label.parentNode.classList.add('checked');
                        label.parentNode.classList.remove('fadeout');
                    } else {
                        label.parentNode.classList.add('fadeout');
                        label.parentNode.classList.remove('checked');
                    }
                });
                checkBothSelected();
            }
        });
    });
    
    //保險起算日input date，欄位限定今日起算七日內。並預設為今日
    const inputs = document.querySelectorAll('.limitedDate');
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);

    const endDate = new Date();
    endDate.setDate(tomorrow.getDate() + 6); // 明天 + 6 = 共7天範圍

    const toDateString = (date) => {
      const offset = date.getTimezoneOffset();
      const localDate = new Date(date.getTime() - offset * 60000);
      return localDate.toISOString().split('T')[0];
    };

    const minDate = toDateString(tomorrow);
    const maxDate = toDateString(endDate);

    inputs.forEach(input => {
      input.min = minDate;
      input.max = maxDate;
      input.value = minDate; // 預設為明天
    });
</script>

<?php include("module/modal-info.php"); ?><!--彈出視窗_報價詳細-->
<?php include("module/modal-answer.php"); ?><!--彈出視窗_回答傷病-->
<?php include("module/footer.php"); ?>
</body>
</html> 
 