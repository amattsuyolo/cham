<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'money_box',
	'title' => '撲滿',
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
                <h5>手機每隔一段時間向API呼叫撲滿相關數值回傳</h5>
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
 "interface": "money_box",
 "identifier": "2",
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
                                <td>功能接口，填入功能代號 "money_box"。</td>
                            </tr>
                            <tr>
                                <td>identifier</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>
                                    玩家member_id
                                </td>
                            </tr>
                            <tr>
                                <td>token</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>將user的token加密。</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>
{
    "returnValue": 0,
    "returnMsg": "Request Successfully!!",
    "returnData": {
        "special_item": 1,
        "autocollection": 6000,
        "player_game_coin": 12879,
        "half_minute_game_coin": 50,
        "hour_game_coin": 6000,
        "money_box_money": 299,
        "money_box_limit": 6000
    }
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
                                <td>returnValue</td>
                                <td>integer</td>
                                <td>請求處理結果。
                                    <br>0：表示更新同步成功。
                                    <br>1：接口參數為空值。
                                    <br>2：該功能不存在;系統驗證錯誤。
                                    <br>3：必要參數為空。
                                    <br>999：此ID已被停權或IMEI碼被加入黑名單。
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
                <h5>其中returnData裡為撲滿介面所需數值：</h5>
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
                                <td>special_item</td>
                                <td>integer</td>
                                <td>是否有自動領取撲滿錢的道具<br>
                                    0:有;1:無
                                </td>
                            </tr>
                            <tr>
                                <td>autocollection</td>
                                <td>integer</td>
                                <td>
                                    有自動領取撲滿錢道具，且撲滿累積金額超過上限值放入玩家member表的數量<br>
                                    EX:撲滿上限500，累積數量1600,則1500放入member表中,而100留在撲滿<br>
                                    1500為此欄位數值
                                </td>
                            </tr>
                            <tr>
                                <td>player_game_coin</td>
                                <td>integer</td>
                                <td>玩家遊戲幣數量<br>

                                </td>
                            </tr>
                            <tr>
                                <td>half_minute_game_coin</td>
                                <td>integer</td>
                                <td>玩家等級對應每30秒取得遊戲幣金額</td>
                            </tr>
                            <tr>
                                <td>hour_game_coin</td>
                                <td>integer</td>
                                <td>玩家等級對應每小時能獲得遊戲幣金額</td>
                            </tr>
                            <tr>
                                <td>money_box_money</td>
                                <td>integer</td>
                                <td>玩家撲滿中累積的遊戲幣數量
                                </td>
                            </tr>
                            <tr>
                                <td>money_box_limit</td>
                                <td>integer</td>
                                <td>玩家等級對應撲滿上限
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <h4>最後更新日:2018/11/27</h4>
                <br>
                <h3>更新紀錄：</h3>

                <h4>1. 2018/11/27 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
