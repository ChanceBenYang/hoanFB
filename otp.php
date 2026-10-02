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
            <div class="otp">
                <div class="row justify-content-center align-items-center">
                    <div class="col-11 col-md-8 col-lg-7 text-center">
                        <h1 class="mb-3">網路投保契約身份認證作業</h1>
                        <p>已將驗證碼發送至您的<br/>手機 <span>096121****</span> 與電子信箱 <span>su****218@gmail.com</span>。<br/>此驗證碼 5 分鐘內輸入有效。</p>
                        <p class="note">※ 若持續錯誤或無法取得驗證碼，請洽 <a href="tel:0800-066-020">0800-066-020</a></p>
                        <div>
                            <h6 class="mb-2">請輸入驗證碼</h6> 
                            <div class="row g-2 mb-2 justify-content-center">
                                <div class="col-6">
                                    <input type="tel" maxlength="6" class="form-control form-control-lg">
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sendotp btn-outline-primary btn-lg" disabled="disabled"><!--不可發送 disabled="disabled"；可發送移除-->
                                        <div class="unavailable"><span>85s</span> 後發送驗證碼</div>
                                        <div class="available"><i class="far fa-paper-plane"></i> 重新發送驗證碼</div>
                                    </button>
                                </div>
                            </div>
                            <div class="timer_status"> <!--超過300s addclassname="timer_status_expired"-->
                                <div class="timer">剩餘 <span id="">04:25</span></div>
                                <div class="expired"><i class="fas fa-times" aria-hidden="true"></i> 驗證碼已逾期，請點擊重新寄送</div>
                            </div>
                            <div>
                                <a type="button" class="btn-otp btn btn-primary btn-lg" href="step5.php">
                                    確認送出
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
<?php include("module/footer.php"); ?>
</body>
</html> 
 