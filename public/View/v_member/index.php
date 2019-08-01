<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'member',
	'title' => '第三方登入',
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
  "interface": "member_signin" ,
  "identifier": "20" ,
  "token_id":"hello_qpet",
  "signin_type":"1",
  "name": "測試people" ,
  "imei": "352651060735101" ,
  "system": "1" ,
  "ip": "159.125.321.25" ,
  "l_system_version":"3.5.6",
  "l_app_version":"2.5.4"
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
                                <td>功能接口，填入功能代號 " member_signin "。</td>
                            </tr>
                            <tr>
                                <td>identifier</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>FB登入回傳ID<br>
                                    Google登入回傳ID<br>
                                    若為遊客重複登入，則其ID為該玩家會員編號。<br>
                                    若為遊客初次登入，傳任意字串(string)例如QPET。
                                </td>
                            </tr>
                            <tr>
                                <td>token_id</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>遊客重複登入，其值為m_token</td>
                            </tr>
                            <tr>
                                <td>signin_type</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>
                                	1 : 遊客
                                	<br>2 : FB
                                	<br>3 : Google
                                </td>
                            </tr>

                            <tr>
                                <td>name</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>玩家暱稱
                                <br>若傳值為空則預設格式:萌寵飼主_21
                                <br>其中21為玩家m_id
                                </td>
                            </tr>
                              <tr>
                                <td>imei</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>手機IMEI碼
                               <br>android：上傳手機的imei碼。
                               <br>IOS：上傳手機產生的唯一識別碼。</td>
                            </tr>
                            <tr>
                                <td>system</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>手機系統
                                <br>1 : IOS
                                <br>2 : Android
                                </td>
                            </tr>
                            <tr>
                                <td>ip</td>
                                <td>string</td>
                                <td>選填</td>
                                <td>使用者裝置網路IP</td>
                            </tr>
                            <tr>
                                <td>l_system_version</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>手機的版本號</td>
                            </tr>

                             <tr>
                                <td>l_app_version</td>
                                <td>string</td>
                                <td>必填</td>
                                <td>APP的版本號</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>  <!--     "level_up": false, -->
                <h5><pre>{
    "returnValue": 0,
    "returnMsg": "Singup and singin success!!",
    "returnData": {
        "identifier": "21",
        "nickName": "萌寵飼主_21",
        "level": 1,
        "exp": 15,
        "next_exp": 50,
        "game_coin": 0,
        "cash_coin": 0,
        "today_first_login": true,
        "every_day_login": "1",
        "token": "6ZGVqeURJSkxQMQ==",
        "mail_read": "0"
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
                                <td>returnValue</td>
                                <td>integer</td>
                                <td>請求處理結果。
                                    <br>0：表示登入成功。
                                    <br>1：接口參數為空值。
                                    <br>2：系統驗證錯誤。
                                    <br>3：必要參數為空。
                                    <br>5：登入方式錯誤。
                                    <br>100：GOIN系統正在維修當中。
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
                <h4><strong>token規則:(步驟三尚未啟用)</strong></h4>
                 <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>順序</th>
                                <th>對象</th>
                                <th>說明</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>步驟零</td>
                                <td>對所有帳號都適用</td>
                                <td>傳入值如下列identifier可任選<br>
                                    "identifier": "20" ,<br>
                                    "token_id":"hello_qpet",<br>
                                    "signin_type":"1",

                                </td>
                            </tr>
                            <tr>
                                <td>步驟一</td>
                                <td>API_SERVER存token入SQL</td>
                                <td>從數字1到9找出隨機數字放到對應矩陣1取出對應英文字母將其設為<strong>首位字母</strong>,
                            <br>再從亂數字符表中隨意取出10個字元，最後TOKEN值為首位字母加上隨機
                            <br>取出的10個字元，並存入資料庫member表中。
                                </td>
                            </tr>
                             <tr>
                                <td>步驟二</td>
                                <td>API_SERVER回傳token給手機端</td>
                                <td>上階段<strong>首位字母</strong>放回對應矩陣1取回字母對應數字(key),再將後10個字元做
                            <br>base64_encode當作轉換過token值於登入或執行重要功能時回傳。
                                </td>
                            </tr>
                             <tr>
                                <td>步驟三</td>
                                  <td>手機端傳入token給API_SERVER</td>
                                <td>手機端將<strong>首位數字</strong>利用對應矩陣2轉換成<strong>新字元</strong>，首位數字後部分做base64_decode<br>
                                    ,最後將字串QPET放入字串前方做相連。
                               </td>
                                </td>
                            </tr>
                             <tr>
                                <td>步驟四</td>
                                  <td>API_SERVER判斷</td>
                                <td>
                                    API就傳入identifier從SQL取出對應token，並將手機端傳入token移除前方字串QPET，<br>並將<strong>首位字元</strong>透過對應矩陣3轉換，與資料庫取值比對是否相同。
                               </td>
                                </td>
                            </tr>

                                  </tbody>
                    </table>
                </div>
                  <h4><strong>範例:</strong></h4>
                <h5><pre>
    步驟一:      t(首位)   dejyDIJLP1(十位亂數)
    步驟二:      6(首位)   ZGVqeURJSkxQMQ==(加密亂數)
    步驟三:QPET  w(首位)   dejyDIJLP1(解密亂數)
    步驟四:      t(首位)   dejyDIJLP1(解密亂數)
</pre>
 <h4><strong>對應矩陣:</strong></h4>
<h5><pre>
    對應矩陣1:
    $first_number_correspond = array(
        1 => "n",
        2 => "a",
        3 => "p",
        4 => "w",
        5 => "r",
        6 => "t",
        7 => "y",
        8 => "s",
        9 => "e",
    );
    對應矩陣2:
    $second_number_correspond= array(
        9 => "n",
        8 => "a",
        7 => "p",
        6 => "w",
        5 => "r",
        4 => "t",
        3 => "y",
        2 => "s",
        1 => "e",
    );
    對應矩陣3:
    $third_number_correspond= array(
        "e" => "n",
        "s" => "a",
        "y" => "p",
        "t" => "w",
        "r" => "r",
        "w" => "t",
        "p" => "y",
        "a" => "s",
        "n" => "e",
    );
</pre>

                <h4>最後更新日:2018/10/31</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2018/10/31 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
