<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:  #20B2AA ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=#>愛奇擼api文件</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="background-color:  #20B2AA">
            <ul class="nav navbar-nav navbar-left nav-g1">
                 <li><a href="../../View/v_member/member_signup.php"><i class="fa fa-users" aria-hidden="true"> 會員系統</i></a></li>
                <li><a href="../../View/v_video/classificationvideos.php"><i class="fa fa-shopping-cart" aria-hidden="true">影片資訊</i></a></li>
                <li><a href="../../View/v_room/living_room.php"><i class="fa fa-institution" aria-hidden="true"> 房間資訊</i></a></li>
                <li><a href="../../View/v_pet/pet_adopt.php"><i class="fa fa-github-alt" aria-hidden="true"> 寵物資訊</i></a></li>
                <li><a href="../../View/v_im/im_info.php"><i class="fa fa-bullhorn" aria-hidden="true"> 任務資訊</i></a></li>
          <!--      <li><a href="../../View/v_im/im_info.php"><i class="fa-rebel" aria-hidden="true"> im回傳</i></a></li> -->
                <li><a href="../../View/v_platform/platform_mail.php"><i class="fa fa-info" aria-hidden="true"> 平台資訊</i></a></li>
                <li><a href="../../View/v_moneybox/moneybox.php"><i class="fa fa-cny" aria-hidden="true"> 撲滿系統</i></a></li>
          <!--       <li><a href="../../View/v_tubegame/slot_create.php"><i class="fa fa-gamepad" aria-hidden="true"> 遊戲系統</i></a></li> -->
               <!--  <li><a href="../../View/v_shortvideo/shortvideo_search.php"><i class="fa fa-video-camera" aria-hidden="true"> 短視頻相關</i></a></li> -->
               <!--  <li><a href="../../View/v_dynamic/dynamic_like_message.php"><i class="fa fa-" aria-hidden="true"> 動態牆</i></a></li> -->

                <!-- <li><a href="function_super_user.php"><i class="fa fa-file-powerpoint-o" aria-hidden="true"> 函數庫</i></a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-left nav-g2">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"> 會員系統</i></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="index.php"><i class="fa fa-address-card-o" aria-hidden="true"> 會員資料表</i></a></li> -->
                    <!-- 2017/08/15 取消遊客及會員登入機制
                        <li><a href="guest.php"><i class="fa fa-user-secret" aria-hidden="true"> 遊客登入API</i></a></li>
                    -->
<!--                         <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"> 會員註冊API</i></a></li>
                        <li><a href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"> 會員登入API</i></a></li> -->
                        <!-- <li><a href="member_fb_signin.php"><i class="fa fa-facebook-official" aria-hidden="true"> FB登入API</i></a></li> -->
                        <li><a href="../../View/v_member/index.php"><i class="fa fa-google-plus" aria-hidden="true"> 第三方登入API</i></a></li>
                        <li><a href="../../View/v_member/member_phone_signin.php"><i class="fa fa-mobile" aria-hidden="true"> 手機登入API</i></a></li>
                        <li><a href="../../View/v_member/member_signout.php"><i class="fa fa-sign-out" aria-hidden="true"> 會員登出API</i></a></li>
                        <li><a href="../../View/v_member/member_info.php"><i class="fa fa-pencil-square-o" aria-hidden="true"> 會員資訊修改API</i></a></li>
                        <li><a href="../../View/v_member/member_inquiry.php"><i class="fa fa-search" aria-hidden="true"> 查詢會員資訊API</i></a></li>
                        <!--<li><a href="follow_list.php"><i class="fa fa-heartbeat" aria-hidden="true"> 追蹤查詢功能API</i></a></li>
                        <li><a href="follow_add.php"><i class="fa fa fa-heart" aria-hidden="true"> 追蹤新增功能API</i></a></li>
                        <li><a href="follow_del.php"><i class="fa fa-heart-o" aria-hidden="true"> 追蹤刪除功能API</i></a></li>-->
                        <li><a href="../../View/v_member/member_follow.php"><i class="fa fa-heart" aria-hidden="true"> 追蹤(2.0)</i></a></li>
                        <li><a href="../../View/v_member/contribution_rank.php"><i class="fa fa-diamond" aria-hidden="true"> 貢獻排行榜API</i></a></li>
                        <li><a href="../../View/v_member/member_about_me.php"><i class="fa fa-id-card" aria-hidden="true"> 關於我資訊API</i></a></li>
                        <li><a href="../../View/v_member/member_about_me_v2.php"><i class="fa fa-id-card" aria-hidden="true"> 關於我資訊API_v2</i></a></li>
                        <li><a href="../../View/v_member/member_phone_bind.php"><i class="fa fa-mobile" aria-hidden="true"> 會員電話綁定API</i></a></li>
                        <li><a href="../../View/v_member/member_search.php"><i class="fa fa-user-circle-o" aria-hidden="true"> 搜尋會員API</i></a></li>
                        <li><a href="../../View/v_member/member_income.php"><i class="fa fa-money" aria-hidden="true"> 會員收益換算API</i></a></li>
                        <li><a href="../../View/v_member/anchor_livetime_list.php"><i class="fa fa-id-card" aria-hidden="true"> 關於主播時間資訊API</i></a></li>
                        <li><a href="../../View/v_member/member_qualify_check.php"><i class="fa fa-check" aria-hidden="true"> 兌獎資格確認</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"> 商城系統</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_commidity/commodity_purchase.php"><i class="fa fa-tags" aria-hidden="true"> 取得商品類別API</i></a></li>
                        <li><a href="../../View/v_commidity/get_giftlist.php"><i class="fa fa-list" aria-hidden="true"> 取得商品清單API</i></a></li>
                        <li><a href="../../View/v_commidity/get_giftlist_v2.php"><i class="fa fa-soccer-ball-o" aria-hidden="true"> 禮物列表點擊事件</i></a></li>
                        <li><a href="../../View/v_commidity/send_gift.php"><i class="fa fa-gift" aria-hidden="true"> 送出商品API</i></a></li>
                        <li><a href="../../View/v_commidity/pop_subtitle.php"><i class="fa fa-commenting-o" aria-hidden="true"> 彈幕留言API</i></a></li>
                        <li><a href="../../View/v_commidity/stored_info.php"><i class="fa fa-money" aria-hidden="true"> 儲值資訊API</i></a></li>
                        <li><a href="../../View/v_commidity/stored.php"><i class="fa fa-credit-card" aria-hidden="true"> 付費儲值API</i></a></li>
                        <li><a href="../../View/v_commidity/stored_record.php"><i class="fa fa-shopping-cart" aria-hidden="true"> 查詢儲值紀錄API</i></a></li>
                        <li><a href="../../View/v_commidity/feedback_money.php"><i class="fa fa-dollar" aria-hidden="true"> 回傳個人金幣資訊</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-right" aria-hidden="true"> 直播系統</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_live/live_list.php"><i class="fa fa-list-alt" aria-hidden="true"> 現正直播清單</i></a></li>
                        <li><a href="../../View/v_live/live_home_search.php"><i class="fa fa-home" aria-hidden="true"> 主頁直播列表</i></a></li>
                        <li><a href="../../View/v_live/live_cover.php"><i class="fa fa-picture-o" aria-hidden="true"> 更換直播封面API</i></a></li>
                        <li><a href="../../View/v_live/live_type.php"><i class="fa fa-tags" aria-hidden="true"> 選擇直播類型API</i></a></li>
                        <li><a href="../../View/v_live/creat_live.php"><i class="fa fa-play-circle-o" aria-hidden="true"> 創建直播房間API</i></a></li>
                        <li><a href="../../View/v_live/close_live.php"><i class="fa fa-stop-circle-o" aria-hidden="true"> 關閉直播房間API</i></a></li>
                        <li><a href="../../View/v_live/live_notgood.php"><i class="fa fa-stop-circle-o" aria-hidden="true"> 直播房間品質不好API(未啟用)</i></a></li>
                        <li><a href="../../View/v_live/in_live_authority.php"><i class="fa fa-eye-slash" aria-hidden="true"> 檢查進房權限API</i></a></li>
                        <li><a href="../../View/v_live/in_live.php"><i class="fa fa-sign-in" aria-hidden="true"> 進入直播房間API</i></a></li>
                        <li><a href="../../View/v_live/out_live.php"><i class="fa fa-sign-out" aria-hidden="true"> 離開直播房間API</i></a></li>
                        <li><a href="../../View/v_live/chang_live_type.php"><i class="fa fa-tag" aria-hidden="true"> 修改直播類型API</i></a></li>
                        <li><a href="../../View/v_live/forbid_send_msg.php"><i class="fa fa-commenting" aria-hidden="true"> 禁止觀眾發言API</i></a></li>
                        <li><a href="../../View/v_livelive_kick.php"><i class="fa fa-sign-out" aria-hidden="true"> 踢出直播房間API</i></a></li>
                        <li><a href="../../View/v_livelive_manager.php"><i class="fa fa-shield" aria-hidden="true"> 直播管理員API</i></a></li>
                        <li><a href="../../View/v_livelive_ban.php"><i class="fa fa-ban" aria-hidden="true"> 直播黑名單API</i></a></li>
                        <li><a href="../../View/v_livelive_status.php"><i class="fa fa-chain-broken" aria-hidden="true"> 直播狀態檢查API</i></a></li>
                        <!-- <li><a href="live_vod.php"><i class="fa fa-file-video-o" aria-hidden="true"> 點播清單列表API</i></a></li> -->
                        <li><a href="../../View/v_livelive_network_info.php"><i class="fa fa-globe" aria-hidden="true"> 直播資訊回傳API</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-trophy" aria-hidden="true"> 任務系統</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_task/task.php"><i class="fa fa-list-ol" aria-hidden="true"> 任務資訊</i></a></li>
                        <li><a href="../../View/v_task/task_share.php"><i class="fa fa-share-alt" aria-hidden="true"> 分享任務API</i></a></li>
                        <li><a href="../../View/v_task/task_daily_login.php"><i class="fa fa-clock-o" aria-hidden="true"> 每日登入任務API</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info" aria-hidden="true"> 平台資訊</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_platform/platform_rank.php"><i class="fa fa-trophy" aria-hidden="true"> 平台排行榜</i></a></li>
                        <li><a href="../../View/v_platform/platform_ad_banner.php"><i class="fa fa-tasks" aria-hidden="true"> 平台廣告</i></a></li>
                        <li><a href="../../View/v_platform/platform_mail.php"><i class="fa fa-envelope" aria-hidden="true"> 平台系統信件</i></a></li>
                        <li><a href="../../View/v_platform/platform_mail_check.php"><i class="fa fa-calendar-check-o" aria-hidden="true"> 信件閱讀狀態</i></a></li>
                        <!-- <li><a href="platform_app_version.php"><i class="fa fa-cloud-download" aria-hidden="true"> 系統版本確認</i></a></li> -->
                        <li><a href="../../View/v_platform/platform_app_version_v2.php"><i class="fa fa-cloud-download" aria-hidden="true"> 系統版本確認_v2</i></a></li>
                         <li><a href="../../View/v_platform/operation_announcement.php"><i class="fa fa-bullhorn" aria-hidden="true"> 後台發送公告</i></a></li>
                        <li><a href="../../View/v_platform/platform_report.php"><i class="fa fa-exclamation-triangle" aria-hidden="true"> 檢舉功能</i></a></li>
                        <li><a href="../../View/v_platform/platform_announcement.php"><i class="fa fa-bullhorn" aria-hidden="true"> 系統公告</i></a></li>
                        <li><a href="../../View/v_platform/hotfixupload.php"><i class="fa fa-upload" aria-hidden="true"> 軟更新檔案上傳</i></a></li>
                        <li><a href="../../View/v_platform/website_stored_status.php"><i class="fa fa-thumbs-o-up" aria-hidden="true"> 官網儲值狀態</i></a></li>
                        <li><a href="../../View/v_platform/platform_reflect.php"><i class="fa fa-fax" aria-hidden="true"> 意見反饋</i></a></li>
                        <li><a href="../../View/v_platform/platform_reflect_message.php"><i class="fa fa-comments" aria-hidden="true"> 意見回饋信件回復</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gamepad" aria-hidden="true"> 遊戲系統</i></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="tube_game.php"><i class="fa fa-building" aria-hidden="true"> 遊戲開始</i></a></li>
                        <li><a href="tube_game_betting.php"><i class="fa fa-hand-lizard-o" aria-hidden="true"> 下注</i></a></li>
                        <li><a href="tube_game_feadback.php"><i class="fa fa-arrow-right" aria-hidden="true"> 回傳累計押注</i></a></li>
                        <li><a href="tube_game_closeing.php"><i class="fa fa-hand-stop-o" aria-hidden="true"> 發牌</i></a></li> -->
                        <li><a href="../../View/v_tubegame/slot_create.php"><i class="fa fa-building" aria-hidden="true"> 遊戲開始</i></a></li>
                        <li><a href="../../View/v_tubegame/slot_betting.php"><i class="fa fa-hand-lizard-o" aria-hidden="true"> 下注</i></a></li>
                        <li><a href="../../View/v_tubegame/slot_feedback.php"><i class="fa fa-arrow-right" aria-hidden="true"> 回傳累計押注</i></a></li>
                        <li><a href="../../View/v_tubegame/slot_over.php"><i class="fa fa-hand-stop-o" aria-hidden="true"> 發牌</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-video-camera" aria-hidden="true"> 短視頻相關</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_search.php"><i class="fa fa-search" aria-hidden="true"> 搜尋單一主播短視頻列表</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_action.php"><i class="fa fa-thumbs-up" aria-hidden="true"> 短視頻按讚</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_islike.php"><i class="fa fa-heart" aria-hidden="true"> 搜尋某一短視頻你有沒有讚過</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_allow.php"><i class="fa fa-check" aria-hidden="true"> 搜尋你可不可以用短視頻</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_search_all.php"><i class="fa fa-search" aria-hidden="true"> 搜尋短視頻列表</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_upload.php"><i class="fa fa-upload" aria-hidden="true"> 短視頻上傳</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_shortvideo/shortvideo_viewfile.php"><i class="fa fa-eye" aria-hidden="true"> 短視頻觀看</i></a></li>
                    </ul>

                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-video-camera" aria-hidden="true"> 動態牆</i></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/dynamic_like_message.php"><i class="fa fa-commenting" aria-hidden="true"> 動態牆點讚留言</i></a></li>
                    </ul>
                     <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/dynamic_wall.php"><i class="fa fa-list" aria-hidden="true"> 有追蹤主播的動態牆</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/dynamic_my_wall.php"><i class="fa fa-list" aria-hidden="true"> 主播的個人動態牆</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/shortvideo_dynamic_upload.php"><i class="fa fa-upload" aria-hidden="true"> 動態牆上傳</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/shortvideo_dynamic_viewfile.php"><i class="fa fa-eye" aria-hidden="true"> 動態牆觀看</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/dynamic_anchor_msg_change.php"><i class="fa fa-pencil-square-o" aria-hidden="true"> 動態牆文字修改刪除</i></a></li>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><a href="../../View/v_dynamic/dynamic_report.php"><i class="fa fa-ban" aria-hidden="true"> 動態牆檢舉</i></a></li>
                    </ul>
                </li>

                <<!-- li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-clone" aria-hidden="true"> 函數庫 </i></a>
                    <ul class="dropdown-menu">
                        <li><a href="function_super_user.php"><i class="far fa-clone" aria-hidden="true">函數-super_user</i></a></li>
                    </ul>
                     <ul class="dropdown-menu">
                        <li><a href="function_system.php"><i class="fa fa-linkedin-square" aria-hidden="true">函數-system</i></a></li>
                    </ul>


                </li -->>
            </ul>
        </div>
    </div>
</nav>
