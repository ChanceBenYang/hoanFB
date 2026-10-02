<!doctype html>
<html>
<?php include("module/header.php"); ?>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="200" tabindex="0">
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
                <div class="col col-step active">
                    <div class="stepN">FINISH</div>
                    <div></div>
                    <div class="stepT">送件完成</div>
                </div>
            </div>
        </div>
        <div class="mainForm">
            <div class="finish">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 col-lg-7 text-center">
                        <h1 class="mb-3">保單已送件</h1>
                        <table class="table table-status my-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">訂單編號</th>
                                    <th scope="col">狀態</th>
                                    <th scope="col">信用卡狀態</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>2025050900001</td>
                                    <td><span class="statusOK">要保傳送成功</span></td>
                                    <td><span class="statusOK">信用卡授權成功</span></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>2025050900002</td>
                                    <td><span class="statusOK">要保傳送成功</span></td>
                                    <td><span class="statusERROR">顯示錯誤訊息</span></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>2025050900003</td>
                                    <td><span class="statusERROR">要保人證件號碼錯誤</span></td>
                                    <td><span class="statusERROR">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center">
                            感謝您！<span>保單審核約需3-5工作天</span>，並會抽樣進行投保意願電訪。<br/>請使用 LINE 加入好友後登入，更快更即時掌控保單資訊。
                        </p>
                        <a class="btn btn-lg btn-line flex-fill" href="https://lin.ee/It5mGfJ"><svg width="24px" height="24px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 14.4979C30 8.15792 23.7199 3 15.9999 3C8.28094 3 2 8.15792 2 14.4979C2 20.1817 6.98063 24.9417 13.7084 25.8418C14.1644 25.9412 14.7849 26.146 14.9419 26.5404C15.0831 26.8986 15.0342 27.4598 14.987 27.8216C14.987 27.8216 14.8227 28.8214 14.7873 29.0343C14.7264 29.3926 14.5061 30.4353 15.9999 29.7981C17.4942 29.1609 24.0626 24.9935 26.9998 21.572C29.0287 19.3204 30 17.0353 30 14.4979Z" fill="#ffffff"></path>
                        <path d="M13.1553 11.4244H12.1733C12.0228 11.4244 11.9004 11.5478 11.9004 11.6995V17.866C11.9004 18.0179 12.0228 18.1411 12.1733 18.1411H13.1553C13.3059 18.1411 13.428 18.0179 13.428 17.866V11.6995C13.428 11.5478 13.3059 11.4244 13.1553 11.4244Z" fill="#2CCF54"></path>
                        <path d="M19.9147 11.4244H18.9327C18.7821 11.4244 18.66 11.5478 18.66 11.6995V15.3631L15.8645 11.5467C15.8128 11.4683 15.729 11.4295 15.6375 11.4244H14.6558C14.5052 11.4244 14.3828 11.5478 14.3828 11.6995V17.866C14.3828 18.0179 14.5052 18.1411 14.6558 18.1411H15.6375C15.7883 18.1411 15.9104 18.0179 15.9104 17.866V14.2035L18.7094 18.0247C18.7597 18.0967 18.845 18.1411 18.9327 18.1411H19.9147C20.0655 18.1411 20.1874 18.0179 20.1874 17.866V11.6995C20.1874 11.5478 20.0655 11.4244 19.9147 11.4244Z" fill="#2CCF54"></path>
                        <path d="M10.7884 16.5969H8.12013V11.6998C8.12013 11.5476 7.99802 11.4241 7.84773 11.4241H6.86545C6.71489 11.4241 6.59277 11.5476 6.59277 11.6998V17.8652C6.59277 18.0149 6.71435 18.1411 6.86518 18.1411H10.7884C10.9389 18.1411 11.0605 18.0174 11.0605 17.8652V16.8725C11.0605 16.7203 10.9389 16.5969 10.7884 16.5969Z" fill="#2CCF54"></path>
                        <path d="M25.3372 12.9683C25.4878 12.9683 25.6094 12.8452 25.6094 12.6927V11.7C25.6094 11.5478 25.4878 11.4241 25.3372 11.4241H21.4143C21.2636 11.4241 21.1416 11.5501 21.1416 11.6998V17.8655C21.1416 18.0147 21.2633 18.1411 21.4137 18.1411H25.3372C25.4878 18.1411 25.6094 18.0174 25.6094 17.8655V16.8725C25.6094 16.7206 25.4878 16.5969 25.3372 16.5969H22.6692V15.5546H25.3372C25.4878 15.5546 25.6094 15.4311 25.6094 15.2789V14.2863C25.6094 14.1341 25.4878 14.0104 25.3372 14.0104H22.6692V12.9683H25.3372Z" fill="#2CCF54"></path>
                        </svg> 加入 LINE ID</a>
                        <a class="btn btn-lg btn-primary" href="https://midev.hoan.com.tw/HoanB2CWeb/member">
                            <span>保單（送件）查詢</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    
<?php include("module/footer.php"); ?>
</body>
</html> 
 