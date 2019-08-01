<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Hello, world!</title>
    <!--响应式框架-->
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />

<!--图标调用-->
<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/music.js"></script>
	  <style>
		/* 下面不知道有啥用 */
		div.box div div div a.option_line {
    cursor: pointer;
    display: block;
    font-weight: normal;
    min-height: 30px;
    padding: 0px 10px 0px 20px;
    text-align: justify;
    width: 100%;
}
/*特殊照片效果*/

.demo{padding: 2em 0;}
:root{
	--color_1: #fff;
	--main-color: #1dd1a1;
}
.box{
	font-family: 'Niramit', sans-serif;
	text-align: center;
	position: relative;
	overflow: hidden;
}
.box:before,
.box:after,
.box-content:before,
.box-content:after{
	content: '';
	background: linear-gradient(transparent,rgba(0,0,0,0.9));
	height: 100%;
	width: 25%;
	transform: translateY(-100%);
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	transition: all 0.3s;
}
.box:hover:before,
.box:hover:after,
.box:hover .box-content:before,
.box:hover .box-content:after{
	transform: translateY(0);
}
.box:after{ left: 25%; }
.box .box-content:before{ left: 50%; }
.box .box-content:after{ left: 75%; }
.box:hover:before{ transition-delay: 0.225s; }
.box:hover:after{ transition-delay: 0.075s; }
.box:hover .box-content:before{ transition-delay: 0.15s; }
.box:hover .box-content:after{ transition-delay: 0s; }
.box img{
	width: 100%;
	height: auto;
	transition: all 0.3s ease 0s;
}
.box:hover img{ filter: grayscale(100%); }
.box .box-content{
	width: 100%;
	height: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	transition: all 0.2s;
}
.content{
	width: 100%;
	padding: 7px 0;
	opacity: 0;
	position: absolute;
	left: 0;
	bottom: -30px;
	z-index: 2;
	transition: all 0.3s ease 0.1s;
}
.box:hover .content{
	opacity: 1;
	bottom: 5px;
}
.box .title{
	color:#fff;
	font-size: 25px;
	font-weight: 500;
	letter-spacing: 1px;
	text-transform: uppercase;
	margin: 0;
}
.box .post{
	color: var(--main-color);
	font-size: 16px;
	font-style: italic;
	text-transform: capitalize;
	letter-spacing: 1px;
	margin-bottom: 10px;
	display: block;
}
.box .icon{
	padding: 0;
	margin: 0;
	list-style: none;
	transform: translateX(-50%);
	position: absolute;
	top: 15px;
	right: -10px;
	z-index: 2;
	transition: all 0.5s ease 0.3s;
}
.box .icon li{
	opacity: 0;
	transform: scale(0) rotate(360deg);
	transition: all 400ms;
}
.box:hover .icon li{
	opacity: 1;
	transform: scale(1) rotate(0);
}
.box .icon li a{
	color: var(--color_1);
	background-color: var(--main-color);
	font-size: 20px;
	line-height: 40px;
	height: 40px;
	width: 40px;
	margin-bottom: 10px;
	border-radius: 50%;
	display: block;
	position: relative;
	transition: all 0.3s;
}
.box .icon li a:hover{
	text-decoration: none;
	color: var(--main-color);
	background-color: var(--color_1);
	border-radius: 0 20px 0 20px;
}
@media only screen and (max-width:990px){
	.box{ margin-bottom: 30px; }
}
@media only screen and (max-width:479px){
	.box .title{ font-size: 20px; }
}
@media (min-width: 1200px){
.container {
    max-width: 1200px !important;
}
}

/*特殊照片效果結束*/


    .parallax {
			width:100%;
  /* The image used */
  background-image: url("img/best-italian-espresso-machine1.jpg");

  /* Set a specific height */
  min-height: 718px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    .upbackground{
            width:100%;
            height:auto;
            /* margin-left: 1%;
            margin-right: 1%; */
            margin-top: 58px;
            opacity: 0.9;
  /* position: fixed;  */
    }
    .navbar{
            position:fixed;
            z-index:2;
            width:100%;
            /* padding:上 右 下 左; */
            padding:5px 0px 5px 5px;
            font-size:29px;
            /* padding-top:5px;
            padding-right:0px;
            padding-bottom:5px;
            padding-left:5px;
           */
        
    }

    /* 回到最上方css */
 
    /* 回到最上方css結束 */
    </style>
  </head>
  <body>


<!-- preloader -->
          <div class="preloader">
    <img src="img/preloader.gif" alt="preloader" class="preloader__item">
  </div>

<script>
window.addEventListener("load",function(){

    document.querySelector(".preloader").style.display="none";
})

</script>

  <!-- end preloader -->
      <!-- nav 最上方欄位-->
			<?php
include "nav.php";
?>
      <!-- nav end  最上方選擇欄結束-->
    <!-- 背景圖-->
    <div class="parallax" style="" >

    <!-- <img class="upbackground" src="img/best-italian-espresso-machine1.jpg" alt="sroll img" title=""> -->


    </div>

		    <!-- 品牌介紹開始 -->
				<?php
include "brandprinciple.php";
?>
  <!-- 品牌介紹結束-->
    <!-- 特殊css效果 -->
    <div id="about-creater" class="demo">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-1.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web developer</span>
							<h3 class="title">Steve Thomas</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-2.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web designer</span>
							<h3 class="title">Kristina</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-3.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web designer</span>
							<h3 class="title">Williamson</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- 特殊css效果結束 -->
    


<!-- 主題背景部分 -->
<?php
include "topic.php";
?>
<!-- 主題背景部分結束 -->
<!-- 商品部分 -->
<div style="padding-top:0px;margin:0px 0px;text-align:center;width:100%;background-color:#25272a !important" >
<?php
include "commodity.php";
?>
</div>
<!-- 商品部份結束 -->

<div style="clear:both;margin:15px 0px" ></div>
<!--回到最上方按鈕 -->
<button class="toTop-arrow" id="BackTop" ></button> 
<!--回到最上方按鈕結束-->
<script>
    // 回到最上方代碼

</script>
<!--  底部 all right &  contact us -->

<?php  include 'footer.php'; ?>
<!-- 暫時文字結束 -->
   <!--回到最上方  -->
		<style>
	@media only screen and (min-width: 1367px){
  .gotop {
		display:block !important;
    position: fixed;
    bottom: 3%;
    right: 3%;
		cursor: pointer; 
		opacity:0.4;
  }
	.gotop:hover {
  opacity: 0.9;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
	}
		</style>
<script>

	function myFunction(){
		 var speed = 200; //滑动的速度
      $('body,html').animate({ scrollTop: 0 }, speed);
	}

		</script>
	 <div class="gotop" onclick="myFunction()" style="display:none" >

<a><img src="icon/gotop.png"></a>

</div>

	 <!-- 回到最上方結束 -->
   

</body>
</html>