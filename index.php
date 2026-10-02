<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body class="step_1">
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
                <div class="col col-step">
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
                        <div class="col mb-2">
                            <div class="row">
                                <div class="col"><h3>要保人/被保險人(飼主)資料：<span>名下寵物查詢/需與晶片登記資訊一致</span></h3></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="colN col-4 col-lg-6">身分證/居留證</div>
                                        <div class="colT col">N1********48</div>
                                    </div>
                                    <div class="row">
                                        <div class="colN col-4 col-lg-6">要保人/被保險人(飼主)</div>
                                        <div class="colT col">
                                            <span>WEIPIN YANG</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="colN col-4 col-lg-6">性別</div>
                                        <div class="colT col">
                                            男
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="colN col-4 col-lg-6">生日</div>
                                        <div class="colT col">
                                            <span>1983/02/18</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="colN col-4 col-lg-6">電子信箱</div>
                                        <div class="colT col">sunei0218@gmail.com</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="colN col-4 col-lg-4">行動電話</div>
                                        <div class="colT col">0961218920</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="colN col-4 col-lg-4">聯絡電話</div>
                                        <div class="colT col">02 - 22545938</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="colN col-4 col-lg-3">通訊地址</div>
                                        <div class="colT col">114台北市內湖區民權東路六段191巷38弄15號5F</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col text-center">
                                            <button type="button" id="BtnResult" class="btn btn-search btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#ModalLoading"><img src="images/icon_search.png" alt="">查詢飼主寵物</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form id="Result_selectPet">
                        <div class="row">
                            <div class="col">
                                <div class="selectT">
                                    <h3 class="h3_H">請選擇試算寵物：<span>(可複選)</span></h3>
                                </div>
                                <div class="selectB">
                                    <ul class="selectPet">
                                        <li>
                                            <div class="selectT">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-auto">
                                                        <div class="selectPet_check">
                                                            <input class="form-check-input selectPet_checkbox" type="checkbox" value="" id="selectPet_checkbox_1">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label class="selectPet_info" for="selectPet_checkbox_1">
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
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="selectB">
                                                <div class="col-12 cardQ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-12 col-lg-8">
                                                            <p>保險起算日：</p>
                                                            <p class="note">續保寵物接續上期日期，並且無法更改日期。</p>
                                                        </div>
                                                        <div class="col-auto mt-lg-0 mt-2">
                                                            <input class="form-control limitedDate" type="date" value="" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="selectT">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-auto">
                                                        <div class="selectPet_check">
                                                            <input class="form-check-input selectPet_checkbox" type="checkbox" value="" id="selectPet_checkbox_2">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label class="selectPet_info" for="selectPet_checkbox_2">
                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-auto">
                                                                    <img class="Pet Pet_Avatar" src="images/Pet_default.jpg" alt="">
                                                                    <button  class="upload_avatar" type="button" data-bs-toggle="modal" data-bs-target="#ModalUpload"></button><!--這邊要判斷一下是否有寵物照片，若無要有這個隱形的popup btn-->
                                                                </div>
                                                                <div class="col">
                                                                    <div class="row align-items-center">
                                                                        <div class="col">
                                                                            <div>
                                                                                <span class="Pet Pet_Name">阿金</span> / 
                                                                                <span class="Pet Pet_Variety">虎斑貓</span> / 
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
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="selectB">
                                                <div class="col-12 cardQ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-12 col-lg-8">
                                                            <p>保險起算日：</p>
                                                            <p class="note">續保寵物接續上期日期，並且無法更改日期。</p>
                                                        </div>
                                                        <div class="col-auto mt-lg-0 mt-2">
                                                            <input class="form-control limitedDate" type="date" value="" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="selectT">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-auto">
                                                        <div class="selectPet_check">
                                                            <input class="form-check-input selectPet_checkbox" type="checkbox" value="" id="selectPet_checkbox_3">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label class="selectPet_info" for="selectPet_checkbox_3">
                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-auto">
                                                                    <img class="Pet Pet_Avatar" src="images/Pet_avatar2.jpg" alt="">
                                                                </div>
                                                                <div class="col">
                                                                    <div class="row align-items-center">
                                                                        <div class="col">
                                                                            <div>
                                                                                <span class="Pet Pet_Name">小黑</span> / 
                                                                                <span class="Pet Pet_Variety">台灣土狗</span> / 
                                                                                <span class="Pet Pet_Bd">1991-08</span> / 
                                                                                <span class="Pet Pet_Gender">母</span> / 
                                                                                <span class="Pet Pet_Neutered">未絕育</span> 
                                                                            </div>
                                                                            <div>
                                                                                <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="寵物晶片號碼">9902545451658</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="selectB">
                                                <div class="col-12 cardQ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-12 col-lg-8">
                                                            <p>保險起算日：</p>
                                                            <p class="note">續保寵物接續上期日期，並且無法更改日期。</p>
                                                        </div>
                                                        <div class="col-auto mt-lg-0 mt-2">
                                                            <input class="form-control limitedDate" type="date" value="" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="disable">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <div class="selectPet_check">
                                                        <input class="form-check-input selectPet_checkbox" type="checkbox" value="" id="selectPet_checkbox_4">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="selectPet_info" for="selectPet_checkbox_4">
                                                        <div class="row g-3 align-items-center">
                                                            <div class="col-auto">
                                                                <img class="Pet Pet_Avatar" src="images/Pet_avatar3.jpg" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <div>
                                                                            <span class="Pet Pet_Name">彼得</span> / 
                                                                            <span class="Pet Pet_Variety">米克斯</span> / 
                                                                            <span class="Pet Pet_Bd">1991-08</span> / 
                                                                            <span class="Pet Pet_Gender">母</span> / 
                                                                            <span class="Pet Pet_Neutered">未絕育</span> 
                                                                        </div>
                                                                        <div>
                                                                            <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="寵物晶片號碼">9902545451658</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-xl-4 col-status">
                                                                        <span class="Pet Pet_status">該寵物尚無法續保，如有問題請洽保險公司。</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="disable">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <div class="selectPet_check">
                                                        <input class="form-check-input selectPet_checkbox" type="checkbox" value="" id="selectPet_checkbox_4">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="selectPet_info" for="selectPet_checkbox_4">
                                                        <div class="row g-3 align-items-center">
                                                            <div class="col-auto">
                                                                <img class="Pet Pet_Avatar" src="images/Pet_avatar.jpg" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <div>
                                                                            <span class="Pet Pet_Name">KIKI</span> / 
                                                                            <span class="Pet Pet_Variety">米克斯</span> / 
                                                                            <span class="Pet Pet_Bd">1991-08</span> / 
                                                                            <span class="Pet Pet_Gender">母</span> / 
                                                                            <span class="Pet Pet_Neutered">未絕育</span> 
                                                                        </div>
                                                                        <div>
                                                                            <span class="Pet Pet_ID" data-bs-toggle="tooltip" data-bs-placement="right" title="寵物晶片號碼">9902545451658</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-xl-4 col-status">
                                                                        <span class="Pet Pet_status">該寵物無法投保，如有問題請洽保險公司。</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="sidebar">
                        <h5>摘要</h5>
                        <div class="row align-items-center">
                            <div class="col colN">保單</div>
                            <div class="col colD text-end">--</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col colN">總計保費</div>
                            <div class="col colD text-end">--</div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <div id="BoxRemind">
                                    <h6>請完成下列：</h6>
                                    <ul>
                                        <li><a href="#A01">查詢寵物並選擇寵物試算</a></li>
                                    </ul>
                                </div>
                                <div class="actionbar">
                                    <a id="btn-next" class="btn btn-primary btn-lg d-block disabled" href="step2.php" tabindex="-1" role="button" aria-disabled="true">試算保費</a>
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

<!-- Modal -->
<div class="modal fade" id="ModalLoading" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLoadingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="images/loading.gif" alt="">
                <h5 class="modal-title" id="ModalLoadingLabel">查詢資料中，請稍後...</h5>
            </div>
        </div>
    </div>
</div>
<script>
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

<?php include("module/modal-upload.php"); ?><!--彈出視窗_上傳照片-->
<?php include("module/footer.php"); ?>
</body>
</html> 







 