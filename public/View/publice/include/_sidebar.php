<?php
$sidebar_list = array(
	'member' => array(
		// '會員資料表' => array('index', 'fa fa-address-card-o'),
		/* 2017/08/15 取消遊客及會員登入機制
			                        '遊客登入'     => array('guest','fa fa-user-secret') ,
		*/
		// '會員註冊'     => array('signup','fa fa-user-plus') ,
		// '會員登入'     => array('signin','fa fa-sign-in') ,
		// 'FB登入' => array('member_fb_signin', 'fa fa-facebook-official'),
		'會員註冊' => array('../../View/v_member/member_signup', 'fa fa-plug'),
		'會員登入' => array('../../View/v_member/member_login', 'fa fa-rocket'),
		'簡訊' => array('../../View/v_member/member_sms', 'fa fa-mobile'),
		'email' => array('../../View/v_member/member_email', 'fa fa-envelope'),
		'驗證碼確認' => array('../../View/v_member/member_codecheck', 'fa fa-plug'),
		'登出' => array('../../View/v_member/member_logout', 'fa fa-rocket'),
		'會員資訊' => array('../../View/v_member/member_info', 'fa fa-mobile'),

	),
	'videos' => array(
		// '清單' => array('../../View/v_commidity/index', 'fa fa-list-alt'),
		'類別影片資訊' => array('../../View/v_video/classificationvideos', 'fa fa-list-alt'),

	),
	'comm_info' => array(
		// '清單' => array('../../View/v_commidity/index', 'fa fa-list-alt'),
		'購買商品' => array('../../View/v_commidity/commodity_purchase', 'fa fa-list-alt'),
		'道具(商品)資訊' => array('../../View/v_commidity/commodity_item', 'fa fa-align-center'),

	),

	'task' => array(
		'任務資訊' => array('../../View/v_task/task', 'fa fa-list-ol'),
		'分享任務' => array('../../View/v_task/task_share', 'fa fa-share-alt'),
		'每日登入任務' => array('../../View/v_task/task_daily_login', 'fa fa-clock-o'),
	),
	'platform' => array(
		'平台信件' => array('../../View/v_platform/platform_mail', 'fa fa-envelope'),
		'信件閱讀狀態' => array('../../View/v_platform/platform_mail_check', 'fa fa-calendar-check-o'),
	),
	'living_room' => array(
		'客廳資訊' => array('../../View/v_room/living_room', 'fa fa-ra'),
		'寵物房資訊' => array('../../View/v_room/pet_room', 'fa fa-envelope'),

	),
	'pet' => array(
		'寵物領養' => array('../../View/v_pet/pet_adopt', 'fa fa-ra'),
		'寵物結局' => array('../../View/v_pet/pet_ending', 'fa fa-apple'),
	),
	'money_box' => array(
		'撲滿' => array('../../View/v_moneybox/moneybox', 'fa fa-apple'),
		'撲滿領取' => array('../../View/v_moneybox/moneybox_collect', 'fa fa-arrow-circle-o-down'),
	),

	'dynamic' => array(
		'動態牆點讚留言' => array('../../View/v_dynamic/dynamic_like_message', 'fa fa-commenting'),
		'有追蹤主播的動態牆' => array('../../View/v_dynamic/dynamic_wall', 'fa fa-list'),
		'主播的個人動態牆' => array('../../View/v_dynamic/dynamic_my_wall', 'fa fa-list'),
		'動態牆上傳' => array('../../View/v_shortvideo/shortvideo_dynamic_upload', 'fa fa-upload'),
		'動態牆觀看' => array('../../View/v_shortvideo/shortvideo_dynamic_viewfile', 'fa fa-eye'),
		'動態牆文字修改刪除' => array('../../View/v_dynamic/dynamic_anchor_msg_change', 'fa fa-pencil-square-o'),
		'動態牆檢舉' => array('../../View/v_dynamic/dynamic_report', 'fa fa-ban'),
	),

	'im' => array(
		'IM回傳內容整理' => array('../../View/v_im/im_info', 'fa fa-commenting'),
	),

	// 'function' => array(
	// 	'函數-super_user' => array('function_super_user', 'fa fa-linkedin-square'),
	// 	'函數-system' => array('function_system', 'fa fa-linkedin-square'),
	// ),

);
?>
    <div class="col-sm-3 col-md-2 sidebar" style="background-color:#20B2AA">
        <ul class="nav nav-sidebar">
            <?php
foreach ($sidebar_list as $group => $variable) {
	if ($group == $define['group']) {
		foreach ($variable as $label => $val) {
			if ($label == $define['title']) {
				echo '<li class="active"><a href="' . $val[0] . '.php"><i class="' . $val[1] . '" aria-hidden="true"> ' . $label . '</i><span class="sr-only">(current)</span></a></li>';
			} else {
				echo '<li><a href="' . $val[0] . '.php"><i class="' . $val[1] . '" aria-hidden="true"> ' . $label . '</i></a></li>';
			}
		}
	}
}
?>
        </ul>
    </div>
