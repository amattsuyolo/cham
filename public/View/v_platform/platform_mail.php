<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'platform',
	'title' => '平台信件',
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
                <h5>讓Qpet使用者可以收平台系統信件
                </h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
               <!--  <h5><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php" target="_blank">http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php</a></h5> -->
             <h5>http://210.58.115.3/interface_v1.php</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>POST</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>JSON</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>{
  "interface": "platform_mail" ,
  "identifier": "1" ,
  "token":"hello_qpet"
}
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
                                <td>interface</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>功能接口，填入功能代號 "platform_mail "。</td>
                            </tr>
                            <tr>
                                <td>identifier</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>使用者Id。</td>
                            </tr>
                             <tr>
                                <td>token</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>user的token。</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>{
    "returnValue": 0,
    "returnMsg": "Search successfully!!",
    "returnData": [
        {
            "mail_id": 1,
            "mail_type": 1,
            "mail_title": "好康通知",
            "mail_describe": "評價五顆心，保你脫離當單身狗",
            "item_receiving": 2,
            "mail_read": 1,
            "send_time": "2018-11-06 10:23:19",
            "mail_picture": "",
            "mail_gift": [
                {
                    "item_id": 8,
                    "item_name": "普通飼料碗",
                    "item_icon": "F006",
                    "item_num": 1
                },
                {
                    "item_id": 8,
                    "item_name": "普通飼料碗",
                    "item_icon": "F006",
                    "item_num": 1
                }
            ],
            "mail_game_coin": 10,
            "mail_cash_coin": 10
        },
        {
            "mail_id": 3,
            "mail_type": 1,
            "mail_title": "好康通知",
            "mail_describe": "評價五顆心，保你脫離當單身狗",
            "item_receiving": 0,
            "mail_read": 1,
            "send_time": "2018-11-06 10:23:19",
            "mail_picture": "",
            "mail_gift": [],
            "mail_game_coin": 0,
            "mail_cash_coin": 0
        },
        {
            "mail_id": 2,
            "mail_type": 1,
            "mail_title": "好康通知",
            "mail_describe": "評價五顆心，保你脫離當單身狗",
            "item_receiving": 0,
            "mail_read": 0,
            "send_time": "2018-11-01 10:23:19",
            "mail_picture": "",
            "mail_gift": [
                {
                    "item_id": 3,
                    "item_name": "桃太郎飯糰",
                    "item_icon": "C003",
                    "item_num": 1
                },
                {
                    "item_id": 3,
                    "item_name": "桃太郎飯糰",
                    "item_icon": "C003",
                    "item_num": 1
                }
            ],
            "mail_game_coin": 0,
            "mail_cash_coin": 0
        }
    ]
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
                                <td>returnValue</td>
                                <td>integer</td>
                                <td>請求處理結果。
                                    <br>0：表示成功。
                                    <br>1：接口參數為空值。
                                    <br>2：該功能不存在。
                                    <br>3：必要參數為空值。
                                    <br>999：此ID已被停權。
                                </td>
                            </tr>
                            <tr>
                                <td>returnMsg</td>
                                <td>string</td>
                                <td>回傳處理結果或錯誤訊息。</td>
                            </tr>
                            <tr>
                                <td>returnData</td>
                                <td>object</td>
                                <td>回傳答覆資料。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 <h5>其中returnData裡的相關資訊：</h5>
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
                                <td>mail_id</td>
                                <td>integer</td>
                                <td>信件ID</td>
                            </tr>
                            <tr>
                                <td>mail_type</td>
                                <td>integer</td>
                                <td>1:系統<br>
                                    2:明信片(故事結局卡)<br>
                                    3:廣告
                                </td>
                            </tr>
                             <tr>
                                <td>mail_title</td>
                                <td>string</td>
                                <td>郵件主旨</td>
                            </tr>
                             <tr>
                                <td>mail_describe</td>
                                <td>string</td>
                                <td>郵件內容</td>
                            </tr>
                             <tr>
                                <td>item_receiving</td>
                                <td>integer</td>
                                <td>0:無贈送<br>
                                    1:未領取<br>
                                    2:已領取<br>
                                </td>
                            </tr>
                             <tr>
                                <td>mail_read</td>
                                <td>integer</td>
                                 <td>0:未讀<br>
                                    1:已讀<br>
                                    2:刪除(不會出現)
                                </td>
                            </tr>
                             <tr>
                                <td>send_time</td>
                                <td>string</td>
                                <td>寄信時間</td>
                            </tr>
                               <tr>
                                <td>mail_picture</td>
                                <td>string</td>
                                <td>信件圖檔</td>
                            </tr>
                             <tr>
                                <td>mail_gift</td>
                                <td>陣列</td>
                                <td>贈送禮物資訊<br>
                                    item_id 道具編號 型態:integer<br>
                                    item_name 道具名稱 型態:string<br>
                                    item_icon 道具圖檔名稱 型態:string<br>
                                    item_num 數量 型態:string
                                </td>
                            </tr>
                               <tr>
                                <td>mail_game_coin</td>
                                <td>integer</td>
                                <td>信件贈送遊戲幣</td>
                            </tr>
                               <tr>
                                <td>mail_cash_coin</td>
                                <td>integer</td>
                                <td>信件贈送現金幣</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>最後更新日期:2018/11/06</h4>
                 <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2018/11/06 : 創建文件</h4>
            </div>
        </div>
    </div>
</body>

</html>
