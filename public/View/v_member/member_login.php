<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'member',
	'title' => '登入',
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
                <h5><strong>會員登入流程</strong></h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
                <h5>127.0.0.1:8000/api/auth/login</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>POST</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>JSON</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>{
    "email":"mattsuyolo@gmail.com",
	"password":"123456",
	"remember_me":true
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
                                <td>email</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>會員信箱(可換成會員名稱)</td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>會員密碼</td>
                            </tr>
                            <tr>
                                <td>remember_me</td>
                                <td>boolean</td>
                                <td>必填</td>
                                <td>是否記住我</td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>{
    "status": "200",
    "message": "login success",
    "data": {
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2N2UzNzI4ODdkY2Y5NTAxZTQ1NWU0NmJmZDA3ZTI2OWU4MDY4ZjY5Y2I3YWZhZjE0MzY5ZjE3NjhhNmU5NWY0OTY3OTUxZTQ3ZWIwYTY1In0.eyJhdWQiOiIxIiwianRpIjoiYzY3ZTM3Mjg4N2RjZjk1MDFlNDU1ZTQ2YmZkMDdlMjY5ZTgwNjhmNjljYjdhZmFmMTQzNjlmMTc2OGE2ZTk1ZjQ5Njc5NTFlNDdlYjBhNjUiLCJpYXQiOjE1NjQ4ODYwNDcsIm5iZiI6MTU2NDg4NjA0NywiZXhwIjoxNTk2NTA4NDQ3LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.oKzt4lbb-AP1T_c44tR65lSWl3gZh4u7TIOyCUaNggHykHV9mHjAPXUXwik1ERRTvbuGbKETQ8UjOljRirBtR175TnNKO28jCa6gyfNb0aNrbenC5d86aPf0AdmEVvQnNDTlXETJlyycNh7GhCNoU8Z59UPHDhsf5b6V8Gm4tWbpXyX120Ms1mWIDIkk872FYmwcVTrOgpuw3xeUQuxQz69x2hD34lu4br-VdCjN3jjgw71tVuAkuDhGjG0KwUMdAiaSlsctnGgZptAMrQTYVYCRVfYqJk-1GsybBMjPKe1ReVCvR8D2hpyagfahi6e495qOlc6B-z0U2FUKRAtYVWxSY6ZOrzVxyzY0fcZIzOD_vwamJ-_uV6enVM7i85ikKO2DPU3fdjsQXmqFqW35Trx-XXsxTG3wuSzMdO8QDfZVCE6PRDzVqk57qLCo1JKCHyccpps-9-rLi4sOTFwU5pz0FaykIkcoxywmJiQPuYKSW4zr7aX_L2QTH0RN-n1uAB_-ZySZoU5IXsmqTI5sjmIVn2KXLJUdAz-kNpUlQw2KNrqfYjkr-3Bea9eEHMXDdxJY5nNiOzdxL-hONNMLRdV8_yzXMEfcJPvXbprkbKigi0uDWh09R1Sojq1_ntr-UVmLJDH1TSZsjWN08wd_YapPRk5KgzVDOoaQl_xNGr4",
        "token_type": "Bearer",
        "expires_at": "2019-08-11 10:34:07"
    }
}</pre></h5>
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
                            <tr>
                                <td>data</td>
                                <td>object</td>
                                <td>回傳答覆資料。</td>
                            </tr>
                        </tbody>
                    </table>
</div>
                <h5>其中data裡的主要是會員成功登入資訊：</h5>
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
                                <td>access_token</td>
                                <td>string</td>
                                <td>會員token</td>
                            </tr>
                            <tr>
                                <td>token_type</td>
                                <td>string</td>
                                <td>token型態</td>
                            </tr>
                            <tr>
                                <td>expires_at</td>
                                <td>datetime</td>
                                <td>到期時間</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <h4>最後更新日:2019/08/04</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/08/04 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
