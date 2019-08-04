<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'member',
	'title' => '登出',
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
                <h5>會員登出利用passport token機制。</h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
               <!--  <h5><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php" target="_blank">http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php</a></h5> -->
               <h5>127.0.0.1:8000/api/auth/logout</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>GET</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>header</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>
Headers:
key: Authorization
value:Bearer  eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVjNGU3ZTVkMDgxNjhiNTNlMmRkMTdhNzdkYjg1YzZlMTJjMzFjZTdlODQyZDEwMGMxNzU3NDM0NWQ3MzE1NGU5MjFmMjJiNTY2ZTkzYmI5In0.eyJhdWQiOiIxIiwianRpIjoiNWM0ZTdlNWQwODE2OGI1M2UyZGQxN2E3N2RiODVjNmUxMmMzMWNlN2U4NDJkMTAwYzE3NTc0MzQ1ZDczMTU0ZTkyMWYyMmI1NjZlOTNiYjkiLCJpYXQiOjE1NjQ0Njg1MDcsIm5iZiI6MTU2NDQ2ODUwNywiZXhwIjoxNTk2MDkwOTA3LCJzdWIiOiIzMDA4MDc5Iiwic2NvcGVzIjpbXX0.qdT-vGee_wFA3pVi8RIrjEsaiD2C3QHzriNvrZUPpE3mR6rZua8z36kJXE5vYxpU3C0VDqSNJxbkXn6SkZN1j1IwFuQvZ4IbBd7by7KLDlLbynisbms9X73-T1Qm1vEbOVzv1OLDFriZdGaymbBHQUD1FstqskWf4fWJmqsWtdb4e-j09O9SSyK1ZUAaiDtJdVGysGGKHtOKmmLj-NQ_0fMBHTjI09H-P6PjXCBpief_mr-ansrGf0hgWp5KejKQ3aahYbqYn--_rfTXFaY5rn90dHk7KVb3_iVJubRsj5_Hb6IpXJRH61B8HtqoIv6dLNt_mVJukXWHA_zC5LpdqIkGEfvQ0uqIpSarDFRZOAH5dpLmRry_7YIM8JlN-DcAJya6VSEUqBh9KOQExOw3kDq3Z7y6fQFbCy1ip-mMLtAWDw-TuwkoqMdlk0jdvM-Nc6xI0b7rsknKb_FNl4dRmxBah91CKGps7BnIVUkHyqa0gkGFIfc6wBD-SiyUznbtQsWQja3RV49S8zO0AU3xpQQOq8bEhuvcq5JoOIvL22b3NbAEpMGUcIJ9NvZW0BVh7IKyP3d2xCmyWH4q8sdetmoPZgAhvcgXPTxCsMPPpkavLsj8hXebUxAj3pgfiYBZaMEnUkA50qeYFszmmZmQQwqHUFvOrao2ilH_hzaGEXM
</pre></h5>
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
                                <td>Headers 下的Authorization</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>Bearer 與後面的token值要至少一個空格</td>
                            </tr>
            
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>
{
    "status": "",
    "message": "Successfully logged out"
}
</pre></h5>
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
            
             
                <h4>最後更新日:2019/08/04</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/08/04 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
