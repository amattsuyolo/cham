<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <!--headset-->
    <?php
$define = array(
	'group' => 'videos',
	'title' => '類別影片資訊',
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
                <h5><strong>回傳特定類別下影片資訊</strong></h5>
                <br>
                <h3>連結說明</h3>
                <h4>連結ＵＲＬ</h4>
                <h5>149.129.64.206/api/video/9/5</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>GET</h5>
                <br>
                <h4>HTTP請求包格式</h4>
                <h5>URL</h5>
                <br>
                <h4>請求包範例</h4>
                <h5><pre>
"HTTP HOST"/api/video/{tagid}/{page?}
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
                                <td>tagid</td>
                                <td>integer</td>
                                <td>必填</td>
                                <td>tag資料表中的id</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>integer</td>
                                <td>選填</td>
                                <td>預設為第一頁</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <h4>回傳包說明</h4>
                <h5><pre>{
    "status": 200,
    "message": "ok",
    "data": {
        "num": 6,
        "page": "5",
        "videos": [
            {
                "id": 2005168,
                "title": "女按摩师趁着工作强奸上门的女上班族客户 04",
                "cover": "https://idiyiqiyimm.com/2005168/2005168.jpg"
            },
            {
                "id": 2005169,
                "title": "女按摩师趁着工作强奸上门的女上班族客户 05",
                "cover": "https://idiyiqiyimm.com/2005169/2005169.jpg"
            },
            {
                "id": 2005170,
                "title": "女按摩师趁着工作强奸上门的女上班族客户 06",
                "cover": "https://idiyiqiyimm.com/2005170/2005170.jpg"
            },
            {
                "id": 2005171,
                "title": "女护理师下药病人 病人们突然发情便得好骚 01",
                "cover": "https://idiyiqiyimm.com/2005171/2005171.jpg"
            },
            {
                "id": 2005172,
                "title": "女护理师下药病人 病人们突然发情便得好骚 02",
                "cover": "https://idiyiqiyimm.com/2005172/2005172.jpg"
            },
            {
                "id": 2005173,
                "title": "女护理师下药病人 病人们突然发情便得好骚 03",
                "cover": "https://idiyiqiyimm.com/2005173/2005173.jpg"
            },
            {
                "id": 2005174,
                "title": "女护理师下药病人 病人们突然发情便得好骚 04",
                "cover": "https://idiyiqiyimm.com/2005174/2005174.jpg"
            },
            {
                "id": 2005175,
                "title": "女护理师下药病人 病人们突然发情便得好骚 05",
                "cover": "https://idiyiqiyimm.com/2005175/2005175.jpg"
            },
            {
                "id": 2005176,
                "title": "女护理师下药病人 病人们突然发情便得好骚 06",
                "cover": "https://idiyiqiyimm.com/2005176/2005176.jpg"
            },
            {
                "id": 2005177,
                "title": "女护理师下药病人 病人们突然发情便得好骚 07",
                "cover": "https://idiyiqiyimm.com/2005177/2005177.jpg"
            },
            {
                "id": 2005186,
                "title": "趁闺蜜喝醉迷奸 他还以为是男友再干她呢 01",
                "cover": "https://idiyiqiyimm.com/2005186/2005186.jpg"
            },
            {
                "id": 2005187,
                "title": "趁闺蜜喝醉迷奸 他还以为是男友再干她呢 02",
                "cover": "https://idiyiqiyimm.com/2005187/2005187.jpg"
            },
            {
                "id": 2005188,
                "title": "趁闺蜜喝醉迷奸 他还以为是男友再干她呢 03",
                "cover": "https://idiyiqiyimm.com/2005188/2005188.jpg"
            },
            {
                "id": 2005189,
                "title": "趁闺蜜喝醉迷奸 他还以为是男友再干她呢 04",
                "cover": "https://idiyiqiyimm.com/2005189/2005189.jpg"
            },
            {
                "id": 2005190,
                "title": "趁闺蜜喝醉迷奸 他还以为是男友再干她呢 05",
                "cover": "https://idiyiqiyimm.com/2005190/2005190.jpg"
            },
            {
                "id": 2005191,
                "title": "我女友看个病就被女护士诱拐做爱 01",
                "cover": "https://idiyiqiyimm.com/2005191/2005191.jpg"
            },
            {
                "id": 2005192,
                "title": "我女友看个病就被女护士诱拐做爱 02",
                "cover": "https://idiyiqiyimm.com/2005192/2005192.jpg"
            },
            {
                "id": 2005193,
                "title": "我女友看个病就被女护士诱拐做爱 03",
                "cover": "https://idiyiqiyimm.com/2005193/2005193.jpg"
            },
            {
                "id": 2005194,
                "title": "我女友看个病就被女护士诱拐做爱 04",
                "cover": "https://idiyiqiyimm.com/2005194/2005194.jpg"
            },
            {
                "id": 2005195,
                "title": "我女友看个病就被女护士诱拐做爱 05",
                "cover": "https://idiyiqiyimm.com/2005195/2005195.jpg"
            }
        ]
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
                                <td>回傳答覆資料。</td>
                            </tr>
                        </tbody>
                    </table>
</div>
                <h5>其中data裡的主要是影片相關資訊：</h5>
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
                                <td>num</td>
                                <td>integer</td>
                                <td>分頁總數</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>integer</td>
                                <td>現在頁數</td>
                            </tr>
                            <tr>
                                <td>videos</td>
                                <td>object</td>
                                <td>id:影片id<br>
                                    title:影片標題<br>
                                    cover:影片封面圖
                            </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <h4>最後更新日:2019/07/31</h4>
                <br>
                <h3>更新紀錄：</h3>
                <h4>1. 2019/07/31 : 建立文件。</h4>
            </div>
        </div>
    </div>
</body>

</html>
