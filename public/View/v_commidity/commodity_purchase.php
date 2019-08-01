<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'comm_info',
	'title' => '購買商品',
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
                <h5>使用者於商城購買商品</h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
             <!--    <h5><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php" target="_blank">http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php</a></h5>
                <br> -->
                <h5>http://210.58.115.3/interface_v1.php</h5>
                <h4>HTTP請求包格式</h4>
                <h5>POST</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>JSON</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>
 {
 "interface": "commodity_purchase",
 "identifier": "1",
 "token":"hello_qpet",
 "item_id":"1",
 "purchase_number":"1"
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
                                <td>功能接口，填入功能代號 "commodity_purchase"。</td>
                            </tr>
                            <tr>
                                <td>identifier</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>瀏覽者ID</td>
                            </tr>
                            <tr>
                                <td>token</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>將user的token加密。</td>
                            </tr>
                            <tr>
                                <td>item_id</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>
									道具編號

                                </td>
                            </tr>
                            <tr>
                                <td>purchase_number</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>購買數量</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>{
    "returnValue": 0,
    "returnMsg": "Purchase successfully!!",
    "returnData": {
        "m_game_coin": 90,
        "item_quantity": 26
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
                                    <br>0：表示成功。
                                    <br>1：接口參數為空值。
                                    <br>2：該功能不存在;系統驗證錯誤。
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
                 <h5>其中returnData裡的是儲值資訊：</h5>
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
                                <td>m_game_coin</td>
                                <td>int</td>
                                <td>玩家該商品遊戲幣剩餘的數量</td>
                            </tr>
                            <tr>
                                <td>item_quantity</td>
                                <td>int</td>
                                <td>背包中剛
                             購買道具總量。</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h4>最後更新日期:2018/10/30</h4>
                 <br>
                <h3>更新紀錄：</h3>

                <h4>1. 2018/10/30 : 創建文件</h4>
            </div>
        </div>
    </div>
</body>

</html>
