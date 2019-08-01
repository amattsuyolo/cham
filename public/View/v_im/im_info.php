<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'im',
	'title' => 'IM回傳內容整理',
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
                <h5><strong>測試!!測試!!測試!!測試!!測試!!測試!!</strong>
                </h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
                <h5><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php" target="_blank">http://<?php echo $_SERVER['HTTP_HOST']; ?>/mylive/interface.php</a></h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>POST</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>JSON</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>{
  "token_id": "a65g==",
  "token": "OTl2amiuytrk4ZWRkNw==",
  "interface": "dynamic_like_message",
  "identifier": "2000000908",
  "action": "m",
  "dynamic_id": 16,
  "msg": "uuuuu~",
  "msg_status": 1,
  "dy_msg_who":"2000000908",
  "msg_time": "2018-03-08 13:16:53"
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
                                <td>token_id</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>將user的ID加密。</td>
                            </tr>
                             <tr>
                                <td>token</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>將user的token加密。</td>
                            </tr>
                            <tr>
                                <td>interface</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>功能接口，填入功能代號 " dynamic_like_message "。</td>
                            </tr>
                            <tr>
                                <td>identifier</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>瀏覽者ID</td>
                            </tr>
                            <tr>
                                <td>action</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>動作：<br>
                                    l：按讚或取消。<br>
                                    m：留言。<br>
                                    d：刪除留言
                                </td>
                            </tr>
                            <tr>
                                <td>dynamic_id</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>動態id</td>
                            </tr>
                            <tr>
                                <td>msg</td>
                                <td>string</td>
                                <td>action為m必填</td>
                                <td>留言內容</td>
                            </tr>
                             <tr>
                                <td>msg_status</td>
                                <td>integer</td>
                                <td>選填</td>
                                <td>留言是否公開(預設公開)<br>
                                0:隱藏。<br>
                                1:公開。</td>
                            </tr>
                             <tr>
                                <td>dy_msg_who</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>留言人的ID(刪除留言時為必填)</td>
                            </tr>
                             <tr>
                                <td>msg_time</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>留言人的留言時間(刪除留言時為必填)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明(action= l )</h4>
                <h5><pre>{
    "returnValue": 0,
    "returnMsg": "like sucessfully",
    "returnData": ""
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
                                    <br>4：動作未定義。
                                    <br>5：留言狀態未定義。
                                    <br>6：無此動態或者無此使用者。
                                    <br>7：不可以刪除別人的留言。
                                    <br>8：參數值錯誤,無此筆資料。
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
                <h4>回傳包說明(action= m )</h4>
                <h5><pre>{
    "returnValue": 0,
    "returnMsg": "like sucessfully",
    "returnData": {
        "dy_id": "71",
        "msg_time": "2018-03-12 16:33:08"
    }
}</pre></h5>
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
                                <td>dy_id</td>
                                <td>integer</td>
                                <td>動態ID</td>
                            </tr>
                            <tr>
                                <td>msg_time</td>
                                <td>string</td>
                                <td>留言時間</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <h4>最後更新日期:2018/03/12</h4>
                 <br>
                <h3>更新紀錄：</h3>
                <h4>3. 2018/03/12 : 新增留言回傳參數請求參數值,增加時間</h4>
                <h4>2. 2018/03/09 : 新增留言刪除的相關參數請求參數值,只能自己刪自己的留言</h4>
                <h4>1. 2018/02/13 : 創建文件</h4>
            </div>
        </div>
    </div>
</body>

</html>
