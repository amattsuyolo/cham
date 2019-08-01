<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'pet',
	'title' => '寵物結局',
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
                <h5>寵物到達所預計停留時間後，送離或死亡回傳相關結局資訊判斷，並同時更改玩家寵物狀態為離開</h5>
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
  "interface": "pet_ending" ,
  "identifier": "22" ,
  "token":"hello_qpet",
  "pet_id":107,
  "brisk":45,
  "rule":77,
  "close":28
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
                              <tr>
                                <td>pet_id</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>寵物id(唯一值)。</td>
                            </tr>
                              <tr>
                                <td>brisk</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>寵物活力值。</td>
                            </tr>
                              <tr>
                                <td>rule</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>寵物規矩值。</td>
                            </tr>
                              <tr>
                                <td>close</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>寵物的親近值。</td>
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
        "ending_id": "4",
        "ending_pic": "STORYEND_001_002",
        "ending_disc": "數個月後，<name>並沒有幸福的過日子，牠流落街頭，變成流浪動物，<name>到底幾個月前發生了什麼?"
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
                                <td>ending_id</td>
                                <td>integer</td>
                                <td>結局對應id</td>
                            </tr>
                            <tr>
                                <td>ending_pic</td>
                                <td>string</td>
                                <td>結局圖檔
                                </td>
                            </tr>
                            <tr>
                                <td>ending_disc</td>
                                <td>string</td>
                                <td>結局描述
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
