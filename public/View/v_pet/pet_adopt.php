<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'pet',
	'title' => '寵物領養',
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
                <h5>玩家領養寵物後執行動作</h5>
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
  "interface": "pet_adopt" ,
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
                                <td>功能接口，填入功能代號 "pet_adopt"。</td>
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
    "returnMsg": "insert successs",
    "returnData": {
        "pet_id": 183,
        "pet_name": "賓士貓",
        "pet_type": 6,
        "pet_brisk": 52,
        "pet_rule": 43,
        "pet_close": 46,
        "pet_brisk_ratio": 0.52,
        "pet_rule_ratio": 0.43,
        "pet_close_ratio": 0.46,
        "adoption_pic": "STORYSTART_001_001",
        "adoption_desc": "門外並沒有任何人，只有一個紙箱，裝著棄養的寵物…",
        "leave_time": "2018/12/17 15:45:23",
        "room_type": 2,
        "knock_check": 1
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
                                    <br>40001：房間空間不足。
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
                <h5>其中returnData裡的主要是會員成功登入資訊：</h5>
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
                                <td>pet_id</td>
                                <td>integer</td>
                                <td>寵物編號(唯一值)</td>
                            </tr>
                            <tr>
                                <td>pet_name</td>
                                <td>string</td>
                                <td>寵物名稱

                                </td>
                            </tr>
                            <tr>
                                <td>pet_type</td>
                                <td>integer</td>
                                <td>寵物類型編號<br>
                                    1:馬爾濟斯<br>
                                    2:紅貴賓<br>
                                    3:雪納瑞<br>
                                    4:米格魯<br>
                                    5:米克斯<br>
                                    6:賓士貓<br>
                                    7:虎斑<br>
                                    8:三花<br>
                                    9:橘貓<br>
                                    10:異國短毛貓<br>
                                </td>
                            </tr>
                              <tr>
                                <td>pet_brisk</td>
                                <td>integer</td>
                                <td>寵物活力初始值</td>
                            </tr>
                             <tr>
                                <td>pet_rule</td>
                                <td>integer</td>
                                <td>寵物規矩初始值</td>
                            </tr>
                             <tr>
                                <td>pet_close</td>
                                <td>integer</td>
                                <td>寵物親近初始值</td>
                            </tr>
                             <tr>
                                <td>pet_brisk_ratio</td>
                                <td>double</td>
                                <td>寵物活力值比例</td>
                            </tr>
                             <tr>
                                <td>pet_rule_ratio</td>
                                <td>double</td>
                                <td>寵物規矩值比例</td>
                            </tr>
                             <tr>
                                <td>pet_close_ratio</td>
                                <td>double</td>
                                <td>寵物親近值比例</td>
                            </tr>
                            <tr>
                                <td>adoption_pic</td>
                                <td>string</td>
                                <td>領養時出現圖檔</td>
                            </tr>
                            <tr>
                                <td>adoption_desc</td>
                                <td>string</td>
                                <td>領養時出現描述</td>
                            </tr>
                            <tr>
                                <td>leave_time</td>
                                <td>string</td>
                                <td>寵物預計離開時間
                                </td>
                            </tr>
                            <tr>
                                <td>room_type</td>
                                <td>integer</td>
                                <td>2:貓房<br>
                                    3:狗房
                                </td>
                            </tr>
                            <tr>
                                <td>knock_check</td>
                                <td>integer</td>
                                <td>1:有空間可以供領養<br>
                                    0:無空間可以供領養(已滿四隻)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>最後更新日:2018/12/17</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>2. 2018/12/17 : 新增寵物各初始數值。</h4>
                <h4>1. 2018/11/15 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
