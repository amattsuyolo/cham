@extends("coffeeshop.public.master")

@section("title","咖啡豆商城")

@section("content")

<!-- 背景圖-->
 <div class="parallax" style="" >

<!-- <img class="upbackground" src="img/best-italian-espresso-machine1.jpg" alt="sroll img" title=""> -->

</div>

<!-- 品牌介紹開始 -->

@include("coffeeshop.brandprinciple")

<!-- 品牌介紹結束-->

<!-- 特殊css效果 -->
  <div id="about-creater" class="demo">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="coffee_web/img/img-1.jpg" alt="">
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
					<img src="coffee_web/img/img-2.jpg" alt="">
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
					<img src="coffee_web/img/img-3.jpg" alt="">
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
@include("coffeeshop.topic")
<!-- 主題背景部分結束 -->

<!-- 商品部分 -->
@include("coffeeshop.commodity")
<!-- 商品部份結束 -->


<div style="clear:both;margin:15px 0px" ></div>

<!--回到最上方按鈕 -->
<button class="toTop-arrow" id="BackTop" ></button> 
<!--回到最上方按鈕結束-->

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

<a><img src="coffee_web/icon/gotop.png"></a>

</div>

	 <!-- 回到最上方結束 -->
@include("coffeeshop.footer")

@stop