<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'living_room',
	'title' => '客廳資訊',
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
                <h5>玩家進入客廳後的相關數值回傳</h5>
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
  "interface": "living_room" ,
  "identifier": "22" ,
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
                                <td>功能接口，填入功能代號 "living_room"。</td>
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
        "game_coin": 50,
        "cash_coin": 100,
        "reward_coin": 180,
        "level": 3,
        "total_exp": 300,
        "exp_proportion": 0.2,
        "knock_check": 0,
        "mail_check": 1
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
                <h5>其中returnData裡的主要是會員相關資訊：</h5>
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
                                <td>game_coin</td>
                                <td>integer</td>
                                <td>遊戲幣數量</td>
                            </tr>
                            <tr>
                                <td>cash_coin</td>
                                <td>integer</td>
                                <td>現金幣數量
                                </td>
                            </tr>
                            <tr>
                                <td>reward_coin</td>
                                 <td>integer</td>
                                <td>回饋幣數量</td>
                            </tr>
                            <tr>
                                <td>level</td>
                                <td>integer</td>
                                <td>玩家等級</td>
                            </tr>
                            <tr>
                                <td>total_exp</td>
                                <td>integer</td>
                                <td>總經驗值</td>
                            </tr>
                            <tr>
                                <td>exp_proportion</td>
                                <td>double</td>
                                <td>經驗條比例(四捨五入到小數第一位)
                                </td>
                            </tr>
                             <tr>
                                <td>knock_check</td>
                                <td>integer</td>
                                <td>1:有空間可以供領養<br>
                                    0:無空間可以供領養(已滿四隻)
                                </td>
                            </tr>
                             <tr>
                                <td>mail_check</td>
                                <td>integer</td>
                                <td>1:有未讀信件<br>
                                    0:無未讀信件
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <h4>最後更新日:2018/12/10</h4>
                <br>
                <h3>更新紀錄：</h3>

                <h4>1. 2018/12/10 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
