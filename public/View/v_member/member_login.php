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
	"name":"333333",
	"password":"444444",
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
                                <td>name</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>會員名稱</td>
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
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjE2N2I0N2EzNTcwYzIyYzkzNGI3YTBjMmUxZmM3MmRkZTcwOGFiYjI2ZWU5MTEwMWZjYmYwZjhiZWM4M2MxOGI0NmE1YjgwZjM1YzYyYzViIn0.eyJhdWQiOiIxIiwianRpIjoiMTY3YjQ3YTM1NzBjMjJjOTM0YjdhMGMyZTFmYzcyZGRlNzA4YWJiMjZlZTkxMTAxZmNiZjBmOGJlYzgzYzE4YjQ2YTViODBmMzVjNjJjNWIiLCJpYXQiOjE1NjQ0NjUyNDYsIm5iZiI6MTU2NDQ2NTI0NiwiZXhwIjoxNTk2MDg3NjQ2LCJzdWIiOiIzMDAwMDI2Iiwic2NvcGVzIjpbXX0.QQTcvW5jWnwBhHRrzXpiq9ZQM_x6DF0EBYk10X9cePErSigE2nmoz1tzZL8ixFE6koTDvsFzMnI2P6p33bEfVx73OQx2pJk3y2gs6y0BWMyJwT4kJjd7Us8LvYjaLo4yUopwneBejKZ8fLPlJjmqxIXKBpHjB3hmn-c5E4BoZ-wR255ujdtEoVkr_5OaHF6AZqzb25nHGWGGaDlRo8zbdW6wNFrbiVQNCzEgMLAyxewvbnT3qBodMloJYHv0dMLmipY10VPEukdXNiK1SC6ltOJb56gAvIxWWMkHA-MWi9cL7uYNL29zwrBIyl55x3m_ipAHXE6L3hrrcJWLkIV7pEMi3Lb3UwbsU6o4Z97r9LJgAJEvjhvY-HRALOrBTYGeAAoqtzRJXCAQhvxX6f6Ne65pxhG6ghGo-hcQLUqyVftagI8G7Tidv0vjXO2hoH5pMZcHiKL2sBRd5JY_8sGlRuT-Dao75bJEvid9x6pUP_WSkJuoEmgdo7s33x7WKSB7EdDXqb2O7V3QjNK9XggR-40brFWiga925Jn0kzklyMkJS8c0X3ZQwIr8Av7d-VjqoneraQSppiSYkyFabwduNjvOKSMT9AnW58MSwx0dxlI60pA4Oc4HYmld-H7RJ4Cbb-RbLW137b4JTh2LWLP4I4r3Wro0uA3xeoNRfE3mRO4",
        "token_type": "Bearer",
        "expires_at": "2019-08-06 13:40:46"
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
                <h4>最後更新日:2019/07/31</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/07/31 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
