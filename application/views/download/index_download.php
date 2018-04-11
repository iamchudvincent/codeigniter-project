<?php header("Access-Control-Allow-Origin: *");  ?>

<html id="ng-app"  ng-app="kuaikuenglish_com" xmlns:ng="http://angularjs.org" >
<head>
<title>在线英语学习-快酷英语-儿童英语-成人英语-外教一对一-网上学英语-在线英语口语-全球网络英语培训领跑者</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="儿童英语,成人英语,外教一对一,凯伦方法,网上学英语,在线英语口语,在线英语学习,零基础英语,快酷英语" />
	<meta name="description" content="快酷英语有700多名在职外教,是上海快酷网络科技有限公司为想提高英语口语的人提供在线英语学习培训的专业机构,提供儿童英语,成人英语,外教一对一的在线英语口语培训服务,是全球网络英语培训领跑者.所开展的凯伦方法让零基础英语的人网上学英语也不再困难!快酷热线:400-820-2033." /> 
	<link rel="icon" type="image/png" href="/static/img/icon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/static/css/index/style.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/index/mapstyle.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/index/popstyle.css" />
	<link href="/static/css/index/gototop.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="../img/icon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/static/download/css/style.css" />
	<link href="/static/download/css/gototop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/static/download/css/downloadleftcss.css" />
		
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/static/js/index/gototop.js"></script>

	<script src="/static/js/angularjs/components/jquery-2.1.1/jquery.min.js"></script>
	<script src="/static/js/angularjs/version1.4.8/angular.min.js"></script>
	<script src="/static/js/index/index_app.js"></script>

	<link rel="stylesheet" type="text/css" href="/static/css/jqueryconfirm/jquery-confirm.min.css" />
	<script type="text/javascript" src="/static/js/jqueryconfirm/jquery-confirm.min.js"></script>

	<script>
	/*弹出窗口显示样式*/
	
	$(document).ready(function($){
	
		$('.theme-login').click(function(){
			$('.theme-popover-mask').show();
			$('.theme-popover-mask').height($(document).height());
			$('.theme-popover').slideDown(200);
		})
		$('.theme-poptit .close').click(function(){
			$('.theme-popover-mask').hide();
			$('.theme-popover').slideUp(200); 
		})
	
	}); 

	</script>
	
	<script type="text/javascript" src="/static/js/index/gototop.js"></script>
	</head>

	<BODY>


<div id="top"></div>
<!-- ================================ login ================================-->
<?php include_once('static/elements/login-popup.shtml'); ?>

<script type="text/javascript">
	
	$(function() {
		$.fn.toTop = function(options) {
			var defaults = {			
				showHeight:150,
				speed : 1000
			};
			var options = $.extend(defaults,options);
			$("body").prepend("<div id='totop'><img src=img/storenav.gif border=0><b><font color='#525252'  style='padding-top:5px; display:block'>经典系列教材</font></b><a href='#atoz' >零基础课程</a><a href='#wecan' >WE CAN!</a><a href='#Basic'>QQE-Basic</a><a href='#daily' style='border-bottom:1px solid #d7d7d7;'>日常会话</a><b><font color='#525252' style='padding-top:5px; display:block'>特色专项课程</font></b><a href='#topic'>主题对话</a><a href='#travel'>旅游英语</a><a href='#callan' >凯伦英语</a><a href='#business'>商务职场</a><a href='#newseng'>新闻英语</a><a href='#speech'>发音训练</a><a href='#group'  style='border-bottom:1px solid #d7d7d7;'>口语小班</a><a href='#speech'><b><font color='#525252' style='padding-top:5px; display:block'>考试专项课程</font></b></a><a href='#yasi'>雅思口语</a><a href='#tuofu'>托福口语</a><a href='#tuoye'>托业考试</a><a href=# target=_blank><img src=img/store2.jpg border=0></a></div>");
			var $toTop = $(this);
			var $top = $("#totop");
			var $ta = $("#totop a");
			$toTop.scroll(function(){
				var scrolltop=$(this).scrollTop();		
				if(scrolltop>=400){				
					$top.fadeIn();
				}
				else{
					$top.fadeOut();
				}
			});	
			$ta.hover(function(){ 		
				$(this).addClass("cur");	
			},function(){			
				$(this).removeClass("cur");		
			});	
			//$top.click(function(){
			//	$("html,body").animate({scrollTop: 0},options.speed);
			//	return false;
			//});
		}
	});
	
	$(function (){
		$(window).toTop({
			showHeight : 100,//设置滚动高度时显示
			speed : 300 //返回顶部的速度以毫秒为单位
		});
	});
	
</script>
		
	
<!-- ================================ header ================================-->
<div class="headercontainer1" >
	<div class="container" >
		<div class="headerleft"><img src="img/icontel.gif" border="0" > 400-820-2033 <img src="img/iconclock.gif" border="0"   style="margin-left:20px;">8:30 - 23:00</div>
		<div class="headerright"><div class="headerregbox"> <a class="theme-login" href="javascript:;">注册</a></div>  <div class="headerloginbox"><a href="https://cn.kuaikuenglish.com/k/login/" target="_blank">登录</a></div></div>
		<!--div class="headerright"><div class="headeraccountbox"><a href="https://cn.kuaikuenglish.com/k/login/" target="_blank">注册账户：Leo@kuaikuenglish.com</a></div></div-->
	</div>
</div>
	
	<div class="line2container">
		<div class="container" >
				<div class="logodiv" ><a href="http://www.kuaikuenglish.com/"><img src="img/logokuaikuenglish_1.png" border="0" ></a></div>
				<div class="menubox">
					<div class="submenu"><a href="/">首页</a></div>
					<div class="submenu submenuhover"><a href="" target="_blank">课程体系</a></div>
					<div class="submenu"><a href="/static/pages/about_teacher.shtml" target="_blank">外教师资</a></div>
					<div class="submenu"><a href="http://payment.kuaikuenglish.com/payment/buypoints" target="_blank">课程费用</a></div>
					<div class="submenu"><a href="/studentinterview/lists/" target="_blank">学员体验</a></div>
					<div class="submenu"><a href="http://www.coolstudy.com.cn/" target="_blank">快酷游学</a></div>
				</div>
		</div>
	</div>
	
	<!-- ================================ Video ================================-->
	<div class="container100" style="background:#1daee0 url(img/banner_download.jpg) no-repeat center; height:378px">
		
			
	
		<div class="clear"></div>
	</div> 
	
	
	
	
	
	<!-- ================================ title ================================-->
	<div class="whitecontainer2">
	
	<div class="sectiontitle"><a name="atoz"></a>
		<div class="subsectionchinese" style="width:263px;">幼少儿零基础字母课程</div>
		<div class="sectionchinese" style="width:300px;">开启英文学习之旅的第一步</div>
	</div>
	
	<!-- ================================Atoz  ================================-->
	<div class="bookcontainer" >
	
		<div class="subbook3box"  style="height:255px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">幼少儿</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href="../pages/about_kids_lesson.shtml" target="_blank"><img src="img/bookatoz.jpg" border="0" style="padding-top:5px;"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/01_AB.pdf">1</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/02_CD.pdf">2</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/03_EF.pdf">3</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/04_GH.pdf">4</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/05_Review1.pdf">5</a></div>
			</div>
		</div>
		<div class="subbook3box"  style="height:255px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">幼少儿</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href="../pages/about_kids_lesson.shtml" target="_blank"><img src="img/bookatoz.jpg" border="0" style="padding-top:5px;"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/06_IJ.pdf">6</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/07_KL.pdf">7</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/08_MN.pdf">8</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/09_OP.pdf">9</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/10_Review2.pdf">10</a></div>
			</div>
		</div>
		<div class="subbook3box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">幼少儿</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href="../pages/about_kids_lesson.shtml" target="_blank"><img src="img/bookatoz.jpg" border="0" style="padding-top:5px;"></a></div>
			<div class="booknum" style="width:190px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/11_QR.pdf">11</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/12_ST.pdf">12</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/13_UV.pdf">13</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/14_WX.pdf">14</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/15_YZ.pdf">15</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.kuaikuenglish.com/textbook/kids_english/16_Review3.pdf">16</a></div>
			</div>
		</div>
	
	
	
		
	
		
	<div class="clear"></div>
	</div>
	
	</div>
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle"><a name="wecan"></a>
		<div class="subsectionchinese" style="width:213px;"> We Can!少儿英语</div>
		<div class="sectionchinese" style="width:300px;">原版进口  最适合亚洲孩子的外语教材</div>
	</div>
	
	<!-- ================================ book  We Can!少儿英语 ================================-->
	<div class="bookcontainer" >
		<div class="subbook7box"  style="height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">s 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecans.pdf"><img src="img/bookkidss.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecans.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook7box" style="height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">1 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan1.pdf"><img src="img/bookkids1.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan1.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook7box" style="height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">2 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan2.pdf"><img src="img/bookkids2.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan2.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook7box" style="height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">3 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan3.pdf"><img src="img/bookkids3.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan3.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook7box" style="height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">4 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan4.pdf"><img src="img/bookkids4.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan4.pdf">样张</a></div>
			</div>
			
		</div>
		<div class="subbook7box"  style=" height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">5 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan5.pdf"><img src="img/bookkids5.png" border="0"></a></div>
			<div class="booknumdemo" >
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan5.pdf">样张</a></div>
			</div>
		</div>
		
	
		<div class="subbook7box"  style=" border-right: 0px; height:240px;">
			<div class="booklevel"  style="width:98px"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:33%;">6 级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg6" style="width:98px;"><a id="download-link" target="_blank" href="download/wecan6.pdf"><img src="img/bookkids6.png" border="0"></a></div>
			<div class="booknumdemo"  style="margin-bottom:20px;">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/wecan6.pdf">样张</a></div>
			</div>
		</div>
	<div class="clear"></div>
	</div>
	<!--div class="gotostore"><a href="">如需购买请点击<font color="#1caada">“快酷书店”</font></a></div-->
	
	</div>
	
	<!-- ================================ title ================================-->
	<div class="sectiontitle"><a name="Basic"></a>
		<div class="subsectionchinese" style="width:213px;">QQE-Basic</div>
		<div class="sectionchinese" style="width:300px;">快酷英语自主研发  通用型口语教材</div>
	</div>
	
	<!-- ================================ book QQE ================================-->
	<div class="bookcontainer">
		<div class="subbook7box" style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">1 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookqqe1.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1015/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1015/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1015/3.pdf">C</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">2 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookqqe2.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1016/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1016/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1016/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1016/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1016/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">3 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookqqe3.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1017/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1017/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1017/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1017/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1017/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">4 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookqqe4.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1018/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1018/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1018/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1018/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1018/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">5 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookqqe5.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1019/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1019/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1019/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1019/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1019/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">6 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">7 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
	<div class="clear"></div>
	</div>
	
	
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle"><a name="daily"></a>
		<div class="subsectionchinese" style="width:213px;">日常英语会话</div>
		<div class="sectionchinese" style="width:300px;">进阶版口语教材   紧扣日常生活主题</div>
	</div>
	
	<!-- ================================ book 日常英语会话 ================================-->
	<div class="bookcontainer">
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">1 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">2 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">3 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookdaily3.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1007/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1007/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1007/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1007/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1007/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">4 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookdaily4.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1008/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1008/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1008/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1008/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1008/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">5 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookdaily5.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1009/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1009/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1009/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1009/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1009/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">6 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box" style=" border-right: 0px; height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">7 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
	<div class="clear"></div>
	</div>
	
	</div>
	
	<!-- ================================ title ================================-->
	<div class="whitecontainer2">
	
	<div class="sectiontitle"><a name="topic"></a>
		<div class="subsectionchinese" style="width:213px;">主题对话英语  </div>
		<div class="sectionchinese" style="width:300px;">发散型主题对话    培养观点表达能力</div>
	</div>
	
	<!-- ================================ book 主题对话英语   ================================-->
	<div class="bookcontainer" >
		<div class="subbook5box"style="height:275px">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">中级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktopic1.png" border="0"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1010/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1010/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1010/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1010/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1010/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook5box" style="height:275px">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">高级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktopic2.png" border="0"></a></div>
			<div class="booknum"  style="width:100px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1011/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1011/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1011/3.pdf">C</a></div>
			</div>
			
		</div>
		<div class="subbook5box"  style="height:275px">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">宿雾篇</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktopic3.png" border="0"></a></div>
			<div class="booknum" style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/5.pdf">E</a></div>
				
			</div>
			<div class="booknum"  style="width:150px;"  >
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/6.pdf">F</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/7.pdf">G</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/8.pdf">H</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/9.pdf">I</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1013/10.pdf">J</a></div>
				
			</div>
		</div>
		<div class="subbook5box" >
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">俚语篇</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktopic4.png" border="0"></a></div>
			
				<div class="booknum"  style="width:150px; ">
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/1.pdf">A</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/2.pdf">B</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/3.pdf">C</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/4.pdf">D</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/5.pdf">E</a></div>
					
				</div>
				<div class="booknum"  style="width:150px; margin-bottom:20px;"  >
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/6.pdf">F</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/7.pdf">G</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/8.pdf">H</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/9.pdf">I</a></div>
					<div class="pinkbox" ><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1014/10.pdf">J</a></div>
					
				</div>
			
		</div>
		<div class="subbook5box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">讨论篇</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktopic5.png" border="0"></a></div>
			
				<div class="booknum"  style="width:120px; ">
					<div class="pinkbox"><a id="download-link" target="_blank" href="download/AHEALTH.pdf">A</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="download/BTECHNOLOGY.pdf">B</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="download/CENTERTAINMENT.pdf">C</a></div>
					<div class="pinkbox"><a id="download-link" target="_blank" href="download/DENVIRONMENT.pdf">D</a></div>
				</div>
				
			
		</div>
		
	<div class="clear"></div>
	</div>
	
	</div>
	
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle"><a name="travel"></a>
		<div class="subsectionchinese" style="width:213px;">旅游英语 </div>
		<div class="sectionchinese" style="width:300px;">衣食住行买买买   出国旅游无压力</div>
	</div>
	
	<!-- ================================ book 旅游英语  ================================-->
	<div class="bookcontainer" >
		<div class="subbook3box"  style="height:275px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">6天精华版</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktravel1.png" border="0"></a></div>
			<div class="booknum"  style="width:30px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1020cn/1.pdf">A</a></div>
			</div>
		</div>
		<div class="subbook3box"  style="height:275px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">标准课程</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktravel2.png" border="0"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/5.pdf">E</a></div>
			</div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/6.pdf">F</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/7.pdf">G</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/8.pdf">H</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/9.pdf">I</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1021cn/10.pdf">J</a></div>
			</div>
		</div>
		<div class="subbook3box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">30天加强课</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/booktravel3.png" border="0"></a></div>
			<div class="booknum" style="width:240px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/5.pdf">E</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/6.pdf">F</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/7.pdf">G</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/8.pdf">H</a></div>
			</div>
			<div class="booknum"  style="width:213px; margin-bottom:20px; "  >
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/9.pdf">I</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/10.pdf">J</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/11.pdf">K</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/12.pdf">L</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/13.pdf">M</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/14.pdf">N</a></div>
				<div class="pinkbox"><a  id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1022/15.pdf">O</a></div>
			</div>
		</div>
		
		
	<div class="clear"></div>
	</div>
	
	</div>
	
	
	<!-- ================================ title ================================-->
	<div class="whitecontainer2">
	
	<div class="sectiontitle"><a name="callan"></a>
		<div class="subsectionchinese" style="width:213px;"> 凯伦英语</div>
		<div class="sectionchinese" style="width:300px;"> 凯伦方法教材   四倍速学英语的秘密</div>
	</div>
	
	<!-- ================================ book  凯伦英语 ================================-->
	<div class="bookcontainer">
		<div class="subbook6box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">1 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan1.pdf"><img src="img/bookcallan1.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan1.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">2 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan2.pdf"><img src="img/bookcallan2.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan2.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">3 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan3.pdf"><img src="img/bookcallan3.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan3.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">4 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan4.pdf"><img src="img/bookcallan4.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan4.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">5 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan5.pdf"><img src="img/bookcallan5.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan5.pdf">样张</a></div>
			</div>
			
		</div>
		<div class="subbook6box"  style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">6 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan6.pdf"><img src="img/bookcallan6.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan6.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box" style="height:240px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">7 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan7.pdf"><img src="img/bookcallan7.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan7.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box" style="height:240px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">8 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan8.pdf"><img src="img/bookcallan8.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan8.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box" style="height:240px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">9 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan9.pdf"><img src="img/bookcallan9.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan9.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box" style="height:240px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">10 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan10.pdf"><img src="img/bookcallan10.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan10.pdf">样张</a></div>
			</div>
		</div>
		<div class="subbook6box" style="height:240px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">11 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan11.pdf"><img src="img/bookcallan11.png" border="0"></a></div>
			<div class="booknumdemo">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan11.pdf">样张</a></div>
			</div>
			
		</div>
		<div class="subbook6box"  style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">12 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg6"><a id="download-link" target="_blank" href="download/callan12.pdf"><img src="img/bookcallan12.png" border="0"></a></div>
			<div class="booknumdemo" style="margin-bottom:20px;">
				<div class="pinkboxdemo"><a id="download-link" target="_blank" href="download/callan12.pdf">样张</a></div>
			</div>
		</div>
	
		
	<div class="clear"></div>
	</div>
	<!--div class="gotostore"><a href="">如需购买请点击<font color="#1caada">“快酷书店”</font></a></div-->
	
	</div>
	
	
	
	
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle"><a name="business"></a>
		<div class="subsectionchinese" style="width:213px;">  商务职场英语 </div>
		<div class="sectionchinese" style="width:300px;">职场必备   商务场景主题训练</div>
	</div>
	
	<!-- ================================ book   商务职场英语  ================================-->
	<div class="bookcontainer">
		<!--div class="subbook7box" style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">1 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">2 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div>
		<div class="subbook7box"  style="height:268px;">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">3 级</div><div class="bookline" style="width:30%;"></div></div>
		<div class="bookimg"><a href=""><img src="img/bookblank.png" border="0"></a></div>
			<div class="booknum">
				
			</div>
		</div-->
		<div class="subbook5box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">4 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookbusiness4.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1023/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1023/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1023/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1023/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1023/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook5box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">5 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookbusiness5.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1024/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1024/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1024/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1024/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1024/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook5box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">6 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookbusiness6.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1025/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1025/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1025/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1025/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1025/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook5box">
			<div class="booklevel"><div class="bookline" style="width:30%;"></div><div class="booklevelname" style="width:30%;">7 级</div><div class="bookline" style="width:30%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookbusiness7.png" border="0"></a></div>
			<div class="booknum">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1026/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1026/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1026/3.pdf">C</a></div>
			</div>
			<div class="booknum2">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1026/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1026/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook5box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:20%;"></div><div class="booklevelname" style="width:50%;">环球商务</div><div class="bookline" style="width:20%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookbusiness8.png" border="0"></a></div>
			<div class="booknum">
				<div class="gotostore2" style="text-align:center"> *该类课程教材由老师在课前发放</div>
			</div>
			
		</div>
	<div class="clear"></div>
	</div>
	</div>
	
	<!-- ================================ title ================================-->
	<div class="whitecontainer2"><a name="newseng"></a>
	
	<div class="sectiontitle">
		<div class="subsectionchinese" style="width:213px;">新闻英语</div>
		<div class="sectionchinese" style="width:300px;">News Alert 听懂世界的声音</div>
	</div>
	
	<!-- ================================ book News Alert  ================================-->
	<div class="bookcontainer"  >
		<div class="subbook3box">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">上册</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/bookeng1.png" border="0"></div>
			
		</div>
		<div class="subbook3box" style="height:201px">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">中册</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/bookeng2.png" border="0"></div>
			
			
		</div>
		<div class="subbook3box" style=" border-right: 0px; margin-bottom:20px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">下册</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/bookeng3.png" border="0"></div>
			
		</div>
		
		
	<div class="clear"></div>
	</div>
	<div class="gotostore" style="text-align:center"> *该类课程教材由老师在课前发放</div>
	
	</div>
	
	
	
	
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle"><a name="speech"></a>
		<div class="subsectionchinese" style="width:213px;">发音训练 </div>
		<div class="sectionchinese" style="width:300px;">发音技巧训练   告别中式发音</div>
	</div>
	
	<!-- ================================ book 发音训练  ================================-->
	<div class="bookcontainer" >
		<div class="subbook3box"  style="height:241px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">入门</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookspeech1.png" border="0"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1030/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1030/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1030/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1030/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1030/5.pdf">E</a></div>
			</div>
		</div>
		<div class="subbook3box"  style="height:241px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">中级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookspeech2.png" border="0"></a></div>
			<div class="booknum"  style="width:150px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1031/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1031/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1031/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1031/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1031/5.pdf">E</a></div>
			</div>
			
		</div>
		<div class="subbook3box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">高级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookspeech3.png" border="0"></a></div>
			<div class="booknum"  style="width:150px;margin-bottom:20px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1032/1.pdf">A</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1032/2.pdf">B</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1032/3.pdf">C</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1032/4.pdf">D</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1032/5.pdf">E</a></div>
			</div>
		</div>
		
		
	<div class="clear"></div>
	</div>
	
	</div>
	
	<!-- ================================ title ================================-->
	<div class="whitecontainer2">
	
	<div class="sectiontitle"><a name="group"></a>
		<div class="subsectionchinese" style="width:213px;"> 口语小班课   </div>
		<div class="sectionchinese" style="width:300px;">4人小班 简单话题切入 引导深入讨论 </div>
	</div>
	
	<!-- ================================ book  口语小班课    ================================-->
	<div class="bookcontainer" >
		<div class="subbook3box"  style="height:312px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">入门</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookgroup1.png" border="0"></a></div>
			<div class="booknum"  style="width:300px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B1.pdf">1</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B2.pdf">2</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B3.pdf">3</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B4.pdf">4</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B5.pdf">5</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B6.pdf">6</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B7.pdf">7</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B8.pdf">8</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B9.pdf">9</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B10.pdf">10</a></div>
			</div>
			<div class="booknum"  style="width:300px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B11.pdf">11</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B12.pdf">12</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B13.pdf">13</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B14.pdf">14</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B15.pdf">15</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B16.pdf">16</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B17.pdf">17</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B18.pdf">18</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B19.pdf">19</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B20.pdf">20</a></div>
			</div>
			<div class="booknum"  style="width:90px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B21.pdf">21</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B22.pdf">22</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1053/B23.pdf">23</a></div>
				
			</div>
		</div>
		<div class="subbook3box">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">中级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookgroup2.png" border="0"></a></div>
			<div class="booknum"  style="width:300px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I1.pdf">1</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I2.pdf">2</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I3.pdf">3</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I4.pdf">4</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I5.pdf">5</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I6.pdf">6</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I7.pdf">7</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I8.pdf">8</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I9.pdf">9</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I10.pdf">10</a></div>
			</div>
			<div class="booknum"  style="width:300px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I11.pdf">11</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I12.pdf">12</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I13.pdf">13</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I14.pdf">14</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I15.pdf">15</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I16.pdf">16</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I17.pdf">17</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I18.pdf">18</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I19.pdf">19</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I20.pdf">20</a></div>
			</div>
			<div class="booknum"  style="width:150px;margin-bottom:20px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I21.pdf">21</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I22.pdf">22</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I23.pdf">23</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I24.pdf">24</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1054/I25.pdf">25</a></div>
				
			</div>
		</div>
		<div class="subbook3box" style=" border-right: 0px;">
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">高级</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><a href=""><img src="img/bookgroup3.png" border="0"></a></div>
			<div class="booknum"  style="width:190px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A1.pdf">1</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A2.pdf">2</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A3.pdf">3</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A4.pdf">4</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A5.pdf">5</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A6.pdf">6</a></div>
				
			</div>
			<div class="booknum"  style="width:190px; ">
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A7.pdf">7</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A8.pdf">8</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A9.pdf">9</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A10.pdf">10</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A11.pdf">11</a></div>
				<div class="pinkbox"><a id="download-link" target="_blank" href="http://www.qqeng.com/textbooks/pdf/1055/A12.pdf">12</a></div>
				
			</div>
		</div>
		
		
	<div class="clear"></div>
	</div>
	
	</div>
	
	
	<!-- ================================ title ================================-->
	<div class="gerycontainer2">
	
	<div class="sectiontitle">
		<div class="subsectionchinese" style="width:213px;">考试专项 </div>
		<div class="sectionchinese" style="width:300px;">出国考试  职业能力考试 自编教材</div>
	</div>
	
	<!-- ================================ book 考试专项  ================================-->
	<div class="bookcontainer" >
		<div class="subbook3box"><a name="yasi"></a>
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">雅思口语</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/bookielts.png" border="0"></div>
			
		</div>
		<div class="subbook3box" style="height:201px"><a name="tuofu"></a>
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">托福口语</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/booktoefl.png" border="0"></div>
			
			
		</div>
		<div class="subbook3box" style=" border-right: 0px; margin-bottom:20px;"><a name="tuoye"></a>
			<div class="booklevel"><div class="bookline" style="width:33%;"></div><div class="booklevelname" style="width:30%;">托业考试</div><div class="bookline" style="width:33%;"></div></div>
			<div class="bookimg"><img src="img/booktoeic.png" border="0"></div>
			
		</div>
		
		
	<div class="clear"></div>
	</div>
	<div class="gotostore" style="text-align:center"> *该类课程教材由老师在课前发放</div>
	
	</div>
	
	
	<!-- ================================ footer================================-->
	<div class="includefooter" >
		<div class="container">
			<div class="links" ><B>快酷英语全球布局</B>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.coolstudy.com.cn/" target="_blank"><img src="img/flagyouxue.png"  border="0" class="linksimg">快酷游学</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.qqeng.com"  target="_blank"><img src="img/flagjapan.png" border="0" class="linksimg">日本官网</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://www.qq-english.co.kr/index/"  target="_blank"><img src="img/flagkorea.png"  border="0" class="linksimg"> 韩国官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
			<a href="http://qqeng.org/"  target="_blank"><img src="img/flagiran.png"  border="0" class="linksimg"> 伊朗官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
			<a href="http://qqeng.ru/"  target="_blank"><img src="img/flagrussia.png"  border="0" class="linksimg"> 俄罗斯官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
			<a href="http://www.qqeng.com.br/"  target="_blank"><img src="img/flagbrazil.png"  border="0" class="linksimg"> 巴西官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
			<!--a href=""><img src="img/flagtw.png"  border="0" class="linksimg"> 台湾网站</a>&nbsp;&nbsp;&nbsp;&nbsp; -->  
			</div>
	
			<div class="ourlinks" >
				<div class="linkcol1" >
				<a href="http://www.phstudy.com/?p=1504"  target="_blank">创始人说</a><BR>
				<a href="../process_class/index.shtml"  target="_blank">课程演示</a><BR>
				<a href="../help/index.shtml" target="_blank" >常见问题</a></div>
				<div class="linkcol1" >
				<a href="../environment/index.shtml" target="_blank" >硬件要求</a><BR>
				<a href="../enterprise_train/index.shtml" target="_blank">企业培训</a><BR>
				<a href="../private/index.shtml" target="_blank">隐私保护</a></div>
				<div class="linkcol1" ><a href="../about/index.shtml" target="_blank">关于我们</a><BR>
				<a href="../zhaopin/index.shtml" target="_blank">加入我们</a><BR>
				<a href="../agreement/index.shtml" target="_blank">服务协议</a></div>
				<div class="linkcol1" ><a href=""><img src="img/kuaikucode.gif"></a></div>
			</div>
	
			<div class="copyright" ><a href="http://www.315online.com.cn/member/315120042.html" target="_blank"><img src="img/footerimg1.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.sgs.gov.cn/lz/etpsInfo.do?method=index"  target="_blank"><img src="img/footerimg2.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.beianbeian.com/search/www.kuaikuenglish.com"  target="_blank"><img src="img/footerimg3.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.anquan.org/authenticate/cert/?site=www.kuaikuenglish.com&at=realname" target="_blank"><img src="img/footerimg4.gif" border="0"></a><BR>Copyright&reg; 上海快酷网络科技有限公司 沪ICP备12010372号<BR><BR></div>
	
		</div>
	
	</div>
	
	<script>
		
		$( document ).ready(function() {
			//After page loaded, a#download-link href will be hidden
			$('a#download-link').each(function() {
				$(this).data('href', $(this).attr('href')).removeAttr('href');
			});
		});
		
		$("a#download-link").click(function(e){
				e.preventDefault();
				var student_username_cookie = document.cookie.indexOf('student_username');
				if(student_username_cookie  > -1 ){
					//Get the URL from data attribute and redirect.
					var href = $(this).data("href");
					window.open(href);
				} else {
					$.confirm({
						theme: 'modern',
						type: 'blue',
						closeIcon: true,
						title: '<strong>要下載，請登錄。</strong>',
						useBootstrap: false,
						boxWidth: '23%',
						draggable: false,
						backgroundDismiss: true,
						content: '' +
						'<form action="" class="formName">' +
						'<div id="account" name="account" class="form-group" style="font-family:Arial,Helvetica,sans-serif;">' +
						'用户名 &nbsp;'+
						'<input style="font-size:15px;padding:5px;border: solid 1px #dcdcdc;transition: box-shadow 0.3s, border 0.3s;" type="text" size="24" placeholder="邮箱" class="name form-control" required /><br/><br/>' +
						'密码 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+
						'<input style="font-size:15px;padding:5px;border: solid 1px #dcdcdc;transition: box-shadow 0.3s, border 0.3s;" id="password" name="password" type="password" size="24" placeholder="登录密码" class="password form-control" required />' +
						'</div>' +
						'</form>',
						buttons: {
							formSubmit: {
								text: '登录',						
								action: function () {
									var username = this.$content.find('.name').val();
									var pwd = this.$content.find('.password').val();
									var regex = new RegExp ("^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$");
									checkemail = regex.test(username);
									
									if(!username) {
										$.alert({
											title: '<span style="color:DeepSkyBlue;"><strong>Attention!</strong></span>',
											content: '<span style="font-family:Arial,Helvetica,sans-serif;"><strong>用户名是必填项。</strong></span>',
											theme: 'modern',
											type: 'blue',
											useBootstrap: false,
											draggable: false,
											boxWidth: '15%'											
										});
										return false;
									} else if(!pwd) {
										$.alert({
											title: '<span style="color:DeepSkyBlue;"><strong>Attention!</strong></span>',
											content: '<span style="font-family:Arial,Helvetica,sans-serif;"><strong>密码是必需的。</strong></span>',
											theme: 'modern',
											type: 'blue',
											useBootstrap: false,
											draggable: false,
											boxWidth: '15%'
										});
										return false;
									} else {
											$.ajax({
											url:"/register/loginapi/login.php",
											type: 'POST',
											dataType: 'json',
											data: {account:username,password:pwd},
											success: function(res) {
												var logincheck = res.is_success;
												console.log("Result: "+logincheck);
												if(logincheck != 1){
													$.alert({
														title: '<span style="color:darkred"><u>ERROR!</u></span>',
														content: '<span style="font-family:Arial,Helvetica,sans-serif;"><strong>登录失败，用户名,密码错误或登录用户名不存在。</strong></span>',
														theme: 'modern',
														useBootstrap: false,
														draggable: true,
														boxWidth: '27%'
													});
												} else {
													setCookie("student_username", username, 1068);
													$.alert({
														title: '<span style="color:green;"><u>SUCCESS!</u></span>',
														content: '<span style="font-family:Arial,Helvetica,sans-serif;"><strong>现在允许下载。</strong></span>',
														theme: 'modern',
														useBootstrap: false,
														draggable: true,
														boxWidth: '10%'
													});
													
												}
												
											},
											error : function(httpReq,status,exception){
												$.alert({
														title: '<span style="color:darkred"><u>ERROR! Try again.</u></span>',
														content: '<span style="font-family:Arial,Helvetica,sans-serif;"><strong>登录失败，用户名,密码错误或登录用户名不存在。</strong></span>',
														theme: 'modern',
														useBootstrap: false,
														draggable: true,
														boxWidth: '27%'
													});
												console.log(status+" "+exception);
											}											
										});																			
									}									
								}
							}/*,
							cancel: function () {
								//close
							},*/
						},
						onContentReady: function () {
							// bind to events
							var jc = this;
							this.$content.find('form').on('submit', function (e) {
								// if the user submits the form by pressing enter in the field.
								e.preventDefault();
								jc.$$formSubmit.trigger('click'); // reference the button and click it
							});
						}
					});
				}		
		});
	</script>

	<script type="text/javascript">
		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}		
	</script>

	</body>
	</html>