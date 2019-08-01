<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'member',
	'title' => '使用者資訊',
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
                <h5>玩家登入與回傳值說明</h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
                <!-- <h5><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php" target="_blank">http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php</a></h5> -->
                <h5>127.0.0.1:8000/api/auth/user</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>GET</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>HEADER</h5>
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
                <h4>回傳包說明</h4>  <!--     "level_up": false, -->
                <h5><pre>{
    "status": 200,
    "message": "",
    "data": {
        "id": 3000026,
        "name": "333333",
        "email": "444444@gmail.com",
        "activate": 1,
        "birthday": "18-25",
        "is_vip": "2028-09-20 00:00:00",
        "ruby_coin": 500,
        "country": "台灣",
        "province": "台灣",
        "city": "基隆",
        "recommend": "6B1k7TqWYAOJ",
        "mobilePhone": "097777189",
        "loginCount": 1,
        "loginDate": "2019-06-04 14:49:22",
        "checkPunchIn": 0,
        "gender": 1,
        "verify": "eai3",
        "facebook_login": "",
        "google_login": "",
        "created_at": "2019-04-22 17:51:18",
        "update_at": "2019-07-30 13:35:36",
        "avatar": "avatar.png",
        "avatar_url": "http://localhost/storage/avatars/3000026/avatar.png"
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
                                <td>回傳USER TABLE中的資料。</td>
                            </tr>
                        </tbody>
                    </table>
</div>
                <h5>其中data裡的主要是會員表中的欄位資訊<span style="color:orange;font-weight:bold;" >請自行參考資料表更改下列欄位</span></h5>
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
                                <td>identifier</td>
                                <td>string</td>
                                <td>會員ID</td>
                            </tr>
                            <tr>
                                <td>nickName</td>
                                <td>string</td>
                                <td>暱稱</td>
                            </tr>
                            <tr>
                                <td>level</td>
                                <td>integer</td>
                                <td>會員等級</td>
                            </tr>
                            <tr>
                                <td>level_up</td>
                                <td>boolean</td>
                                <td>是否升等
                                <br>true:升等
                                <br>false:維持原等級
                                </td>
                            </tr>
                            <tr>
                                <td>exp</td>
                                <td>integer</td>
                                <td>經驗值</td>
                            </tr>
                             <tr>
                                <td>next_exp</td>
                                <td>integer</td>
                                <td>升下一等所需累積經驗值</td>
                            </tr>
                            <tr>
                                <td>game_coin</td>
                                <td>integer</td>
                                <td>遊戲幣總數</td>
                            </tr>

                            <tr>
                                <td>cash_coin</td>
                                <td>integer</td>
                                <td>現金幣總數</td>
                            </tr>
                            <tr>
                                <td>today_first_login</td>
                                <td>boolean</td>
                                <td>
                                    今天第一次登入
                                <br>true:是
                                <br>false:否
                                </td>
                            </tr>
                            <tr>
                                <td>every_day_login</td>
                                <td>integer</td>
                                <td>累積登入天數(最多七天)</td>
                            </tr>
                            <tr>
                                <td>token</td>
                                <td>string</td>
                                <td>會員權杖</td>
                            </tr>
                            <tr>
                                <td>mail_read</td>
                                <td>integer</td>
                                <td>信件訊息 0:沒有新消息 1:有新消息</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
             

                <h4>最後更新日:2019/07/31</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/07/31 : 建立文件(未完成)。</h4>
            </div>
        </div>
    </div>
</body>

</html>
