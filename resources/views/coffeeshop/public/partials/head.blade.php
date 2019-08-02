<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--响应式框架-->
  <link rel="stylesheet" type="text/css" href="coffee_web/css/bootstrap-grid.min.css" />

<!--图标调用-->
<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="js/music.js"></script> -->
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
  background-image: url("coffee_web/img/best-italian-espresso-machine1.jpg");

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