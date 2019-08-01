<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'comm_info',
	'title' => '道具(商品)資訊',
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
                <h5>使用者查看所有道具資訊</h5>
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
 "interface": "commodity_item",
 "identifier": "1",
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
                                <td>功能接口，填入功能代號 "commodity_item"。</td>
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
            "item_id": 5000001,
            "item_icon": "A001",
            "item_name": "空氣清新劑",
            "item_describe": 0,
            "item_type": 2,
            "item_coin_type": 1,
            "item_price": 10,
            "item_money": 100,
            "item_room": 0,
            "item_exp": 15,
            "item_brisk": 14,
            "item_rule": 7,
            "item_close": 6,
            "item_hunger": 6,
            "item_thirsty": 6,
            "item_stamina": 5,
            "item_clean": 5,
            "item_target": 3
        },
        {
            "item_id": 5000002,
            "item_icon": "B002",
            "item_name": "高級空氣清新劑",
            "item_describe": 0,
            "item_type": 2,
            "item_coin_type": 1,
            "item_price": 15,
            "item_money": 100,
            "item_room": 0,
            "item_exp": 15,
            "item_brisk": 14,
            "item_rule": 7,
            "item_close": 6,
            "item_hunger": 6,
            "item_thirsty": 6,
            "item_stamina": 5,
            "item_clean": 5,
            "item_target": 3
        },
        {
            "item_id": 7000001,
            "item_icon": "C003",
            "item_name": "桃太郎飯糰",
            "item_describe": 0,
            "item_type": 2,
            "item_coin_type": 2,
            "item_price": 15,
            "item_money": 100,
            "item_room": 0,
            "item_exp": 55,
            "item_brisk": 30,
            "item_rule": 7,
            "item_close": 6,
            "item_hunger": 6,
            "item_thirsty": 6,
            "item_stamina": 5,
            "item_clean": 5,
            "item_target": 2
        }
        ]
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
                                <td>item_id</td>
                                <td>int</td>
                                <td>道具編號</td>
                            </tr>
                            <tr>
                                <td>item_icon</td>
                                <td>string</td>
                                <td>道具圖檔名稱
                             </td>
                            </tr>
                              <tr>
                                <td>item_name</td>
                                <td>string</td>
                                <td>道具名稱</td>
                            </tr>
                            <tr>
                                <td>item_describe</td>
                                <td>string</td>
                                <td>道具說明</td>
                            </tr>
                              <tr>
                                <td>item_type</td>
                                <td>int</td>
                                <td>道具的類型 1=消耗品, 2=飼料</td>
                            </tr>
                            <tr>
                                <td>item_coin_type</td>
                                <td>int</td>
                                <td>道具幣別1=遊戲幣, 2=現金幣</td>
                            </tr>
                              <tr>
                                <td>item_price</td>
                                <td>int</td>
                                <td>道具價格</td>
                            </tr>
                            <tr>
                                <td>item_money</td>
                                <td>int</td>
                                <td>使用後效果，遊戲幣</td>
                            </tr>
                              <tr>
                                <td>item_room</td>
                                <td>int</td>
                                <td>使用房間，1客廳，2貓房，4後院(狗)，8叢林，16沼澤，32水生   </td>
                            </tr>
                            <tr>
                                <td>item_exp</td>
                                <td>int</td>
                                <td>使用後效果，經驗值</td>
                            </tr>
                              <tr>
                                <td>item_brisk</td>
                                <td>int</td>
                                <td>使用後效果寵物的活潑數值</td>
                            </tr>
                            <tr>
                                <td>item_rule</td>
                                <td>int</td>
                                <td>使用後效果 寵物的規矩數值</td>
                            </tr>
                              <tr>
                                <td>item_close</td>
                                <td>int</td>
                                <td>使用後效果 寵物的親密數值</td>
                            </tr>
                            <tr>
                                <td>item_hunger</td>
                                <td>int</td>
                                <td>使用後效果 寵物的飢餓數值</td>
                            </tr>
                              <tr>
                                <td>item_thirsty</td>
                                <td>int</td>
                                <td>使用後效果 寵物的口渴數值</td>
                            </tr>
                            <tr>
                                <td>item_stamina</td>
                                <td>int</td>
                                <td>使用後效果 寵物的體力數值</td>
                            </tr>
                              <tr>
                                <td>item_clean</td>
                                <td>int</td>
                                <td>使用後效果 寵物的清潔數值</td>
                            </tr>
                            <tr>
                                <td>item_target</td>
                                <td>int</td>
                                <td>1=玩家本身, 2=單一寵物, 3=所有寵物</td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <h4>最後更新日期:2018/11/23</h4>
                 <br>
                <h3>更新紀錄：</h3>

                <h4>1. 2018/11/23 : 創建文件</h4>
            </div>
        </div>
    </div>
</body>

</html>
