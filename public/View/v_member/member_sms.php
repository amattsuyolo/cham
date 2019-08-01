<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'member',
	'title' => '寄驗證信',
);
include '../publice/include/_headset.php';
?>
    <!--headset end-->
</head>

<body>
    <!--navbar-->
    <?php include '../publice/include/_navbar.php';?>
    <!--navbar end-->
    <div class="container">
        <div class="row">
            <!--sidebar-->
            <?php
include '../publice/include/_sidebar.php';
?>
            <!--sidebar end-->
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1><?php echo $define['title']; ?> API 說明</h1><hr>
                <h3>功能說明</h3>
                <h5><strong>寄送簡訊與重寄簡訊</strong></h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
                <h5>149.129.64.206/api/auth/sms</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>POST</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>JSON</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>
 {
	"user_id":  3008079,
	"phone_number":886976593928
}</pre></h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>參數</th>
                                <th>資料型態</th>
                                <th>屬性</th>
                                <th>說明</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>user_id</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>會員id</td>
                            </tr>
                            <tr>
                                <td>phone_number</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>使用者電話號碼</td>
                            </tr>
                      
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>{
    "status": 200,
    "message": "Successfully send demo sms"
}  </pre></h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>參數</th>
                                <th>資料型態</th>
                                <th>說明</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>status</td>
                                <td>integer</td>
                                <td>待定義</td>
                            </tr>
                            <tr>
                                <td>message</td>
                                <td>string</td>
                                <td>回傳處理結果或錯誤訊息。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
     
                <h4>最後更新日:2019/07/31</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/07/31 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
