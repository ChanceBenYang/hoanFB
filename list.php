<!doctype html>
<html>
<?php include("module/header.php"); ?>
<style>
a,a:link,a:visited{color:#00c8c8;}
table tr td.type1{color:#000;font-weight: bold;}
table tr td.type2{color:#aaa}
table tr td[data-deaf="no"]{color:#aaa;}
table tr td[data-deaf="yes"] {color:#c00;font-weight: bold;}
.form-check-input{border:2px solid #000}
.form-check-input.disabled{opacity: .2}
</style>
<body style="background: #fff">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 my-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">首頁</a></li>
                        <li class="breadcrumb-item active"><a href="#">投保管理</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">日期</th>
                            <th scope="col">訂單編號</th>
                            <th scope="col">報價 OID</th>
                            <th scope="col">RSAID</th>
                            <th scope="col">要保人</th>
                            <th scope="col">寵物名稱</th>
                            <th scope="col">晶片號碼</th>
                            <th scope="col">方案</th>
                            <th scope="col">總保費</th>
                            <th scope="col">聽障</th>
                            <th scope="col">抽樣</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 30; $i++) { ?>
                        <tr>
                            <td class="type2"><?php echo ($i+1) ?></td>
                            <td class="type2">2025/06/11 16:36</td>
                            <td><a class="fw-bold" href="edit.php">2025050900001</a></td>
                            <td>OPET2310260033</td>
                            <td>A123456789</td>
                            <td>王小明</td>
                            <td>阿旺</td>
                            <td class="type2">548124877856458584</td>
                            <td>H1</td>
                            <td class="type1">$9,999</td>
                            <td data-deaf="<?php echo ($i % 12 == 11) ? 'yes' : 'no'; ?>"><?php echo ($i % 12 == 11) ? 'yes' : 'no'; ?></td>
                            <td>
                                <?php
                                    $isTenth = ($i % 10 == 9); // 每第10筆（第10、20、30...筆）
                                    $checked = $isTenth ? '' : 'checked';
                                    $disabled = $isTenth ? '' : 'disabled';
                                ?>
                                <input class="form-check-input <?php echo $checked . ' ' . $disabled; ?>" type="checkbox" value="" id="CallCheck<?php echo $i; ?>" <?php echo $checked . ' ' . $disabled; ?>>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html> 







 