<? include 'config.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)http://static.site.kuaikuenglish.com/newweb/feedback.html -->
<html id="ng-app"  ng-app="kuaikuenglish_com" xmlns:ng="http://angularjs.org" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="培训，双语，认证，雅思，外教，一对一">
	<title>快酷英语 一对一在线英语外教</title>
	<link rel="icon" type="image/png" href="/static/img/icon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/static/studentinterview/css/classtabfeedback.css">
	<link rel="stylesheet" type="text/css" href="/static/studentinterview/css/style.css">

	<link rel="stylesheet" type="text/css" href="http://static.site.kuaikuenglish.com/newweb/css/mapstyle.css" />
	<link rel="stylesheet" type="text/css" href="http://static.site.kuaikuenglish.com/newweb/css/popstyle.css" />
	<link href="http://register.kuaikuenglish.com/static/main_site/css/common/gototop.css" rel="stylesheet" type="text/css">
	<link href="http://register.kuaikuenglish.com/static/main_site/css/common/slidecss.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="http://static.site.kuaikuenglish.com/newweb/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://static.site.kuaikuenglish.com/newweb/js/superslide.2.1.js"></script>


	<script type="text/javascript" src="/static/download/js/gototop.js"></script>

	<script src="/static/js/angularjs/version1.4.8/angular.min.js"></script>
	<script src="/static/js/index/index_app.js"></script>

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
	//-->
	</script>

	<script type="text/javascript" src="/static/js/index/gototop.js"></script>

</head>
<body>

<div id="top"></div>
<!-- ================================ login ================================-->
<?php include_once('static/elements/login-popup.shtml'); ?>
<!-- ================================ header ================================-->
<div class="headercontainer1" >
	<div class="container" >
		<div class="headerleft"><img src="http://static.site.kuaikuenglish.com/newweb/images/icontel.gif" border="0" > 400-820-2033 <img src="http://static.site.kuaikuenglish.com/newweb/images/iconclock.gif" border="0"   style="margin-left:20px;">8:30 - 23:00</div>
		<div class="headerright"><div class="headerregbox"> <a class="theme-login" href="javascript:;">注册</a></div>  <div class="headerloginbox"><a href="https://cn.kuaikuenglish.com/k/login/" target="_blank">登录</a></div></div>
		<div class="headerright"><div class="headeraccountbox"><a href="https://cn.kuaikuenglish.com/k/login/" target="_blank"></a></div></div>
	</div>
</div>

<div class="line2container">
	<div class="container" >
			<div class="logodiv" ><a href="/"><img src="http://static.site.kuaikuenglish.com/newweb/images/logokuaikuenglish_1.png" border="0" ></a></div>
			<div class="menubox">
				<div class="submenu"><a href="/">首页</a></div>
				<div class="submenu"><a href="/static/education/index.shtml" target="_blank">课程体系</a></div>
				<div class="submenu "><a href="https://cn.kuaikuenglish.com/k/teachers/" target="_blank">外教师资</a></div>
				<div class="submenu"><a href="http://payment.kuaikuenglish.com/payment/buypoints" target="_blank">课程费用</a></div>
				<div class="submenu submenuhover"><a href="/studentinterview/lists/" target="_blank">学员体验</a></div>
				<div class="submenu"><a href="http://www.coolstudy.com.cn/" target="_blank">快酷游学</a></div>
			</div>
	</div>
</div>

<!-- ================================ Slide ================================-->
<!--div class="container100" style="background:url(http://static.site.kuaikuenglish.com/newweb/images/banner_leshi.jpg) no-repeat center; height:378px"></div--> 
<div style="background: #c2dfef;" class="fullSlide">
	<div class="bd" style="background: #c2dfef;">
		<ul>
			<li _src="url(http://static.site.kuaikuenglish.com/newweb/banner/bannermemberjerry.jpg)" style="background:#E2025E center 0 no-repeat;"><a href="#"></a></li>
			<li _src="url(http://static.site.kuaikuenglish.com/newweb/banner/bannermemberhuang.jpg)" style="background:#DED5A1 center 0 no-repeat;"><a href=" https://cn.kuaikuenglish.com/k/teachers/" target="_blank"></a></li>	
		</ul>
	</div>
	<div class="hd"><ul></ul></div>
</div><!--fullSlide end-->



<!-- ================================ title课程体系 ================================-->
<div class="sectiontitle">
	<div class="subsectionchinese" style="width:213px;">学员访谈</div>
	<div class="sectionchinese" style="width:300px;">汇集快酷学员深度访谈</div>
</div>
<div>
	<div class="classcontainer">


		<div id="con">
			<ul id="tags">
			  <li class="selectTag"><a href="javascript:void(0)">少儿英语</a> </li>
			  <li><a href ="/studentinterview/DailyConversationCourse/">日常口语 </a> </li>
			  <li><a href="/studentinterview/CallanMethod/">商务英语</a> </li>
			  <li><a href="/studentinterview/Others/">其他类别</a> </li>
			</ul>
		
			<div id="tagContent" class="ajaxdata">
					<div class="tagContent selectTag" id="tagContent0">
							<!-- Result Start -->
							<?php foreach ($results as $interview) {  ?>
							<div class="feedbackbox">
							 
								<div class="fbbox1">
									<div class="fbimg"><a href="/studentinterview/detail/<?php echo $interview->id; ?>/">
									<img src="http://main.kuaikuenglish.com/<?php echo $interview->profile_img;?>" border="0"></a></div>
									<div class="fbtxt">
									所在城市：<?php echo $interview->province_name; ?>(<?php echo $interview->type_name; ?>)<br>
									开始日期：<?php echo date("Y-m", strtotime($interview->study_date));?><br>
									学习心得：<span><b><?php echo $interview->title; ?></b>...... <a href="/studentinterview/detail/<?php echo $interview->id; ?>/">详细 &gt;&gt;</a></span>					
									</div>
		    							<?php 
		                                    $orgStudyDate  = new DateTime($interview->study_date);
		                                    $orgInterviewDate = new DateTime($interview->interview_date);
		                                    $interval = $orgStudyDate->diff($orgInterviewDate);
		    							?>
									<div class="fbdays"><span><?php echo $interval->days;?></span>&nbsp;天<br>快酷学龄</div>	
						
								</div>

								<div class="fbbox2">
									<div class="fbname"><?php echo $interview->student_name; ?></div>
									<div class="fbclass"><?php echo $interview->course_name; ?></div>
									<div class="fbdate">访谈日期：
		                                <span><?php echo date("Y-m", strtotime($interview->interview_date)); ?></span>
		                            </div>
								</div>
								
							</div>
							<?php } ?>
							<!-- Result End -->

							<!-- ================================翻页 Start================================-->
							<div class="pageaction">
								<div class="paging">
									<ul>
										<?php
						                if (strlen($links)) { ?>
						                	<li class="numbers" id="ajax_pagingsearc">
											  <span><?php echo $links; ?></span>
											</li>
						                    <?php 
						                	}
						                ?>
									</ul>
								</div>
							</div>	
						    <!-- ================================翻页 End================================-->			
				</div> <!-- tagContent0 END -->
			</div ><!-- tagContent END -->
		</div>
	</div>
</div>

<!-- ================================ footer================================-->
<div class="includefooter" >
	<div class="container">
		<div class="links" ><B>快酷英语全球布局</B>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="http://www.coolstudy.com.cn/" target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagyouxue.png"  border="0" class="linksimg">快酷游学</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="http://www.qqeng.com"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagjapan.png" border="0" class="linksimg">日本官网</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="http://www.qq-english.co.kr/index/"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagkorea.png"  border="0" class="linksimg"> 韩国官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="http://qqeng.org/"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagiran.png"  border="0" class="linksimg"> 伊朗官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="http://qqeng.ru/"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagrussia.png"  border="0" class="linksimg"> 俄罗斯官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="http://www.qqeng.com.br/"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/flagbrazil.png"  border="0" class="linksimg"> 巴西官网</a>&nbsp;&nbsp;&nbsp;&nbsp; 
		<!--a href=""><img src="http://static.site.kuaikuenglish.com/newweb/images/flagtw.png"  border="0" class="linksimg"> 台湾网站</a>&nbsp;&nbsp;&nbsp;&nbsp; -->  
		</div>

		<div class="ourlinks" >
			<div class="linkcol1" ><a href="/static/process/index.shtml"  target="_blank">报名流程</a><BR><a href="/static/process_class/index.shtml"  target="_blank">课程演示</a><BR><a href="/static/help/index.shtml" target="_blank" >常见问题</a></div>
			<div class="linkcol1" ><a href="/static/environment/index.shtml" target="_blank" >硬件要求</a><BR><a href="/static/enterprise_train/index.shtml" target="_blank">企业培训</a><BR><a href="/static/private/index.shtml" target="_blank">隐私保护</a></div>
			<div class="linkcol1" ><a href="/static/about/index.shtml" target="_blank">关于我们</a><BR><a href="/static/zhaopin/index.shtml" target="_blank">加入我们</a><BR><a href="/static/agreement/index.shtml" target="_blank">服务协议</a></div>
			<div class="linkcol1" ><a href=""><img src="http://static.site.kuaikuenglish.com/newweb/images/kuaikucode.gif"></a></div>
		</div>

		<div class="copyright" ><a href="http://www.315online.com.cn/member/315120042.html" target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/footerimg1.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.sgs.gov.cn/lz/etpsInfo.do?method=index"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/footerimg2.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.beianbeian.com/search/www.kuaikuenglish.com"  target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/footerimg3.gif" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.anquan.org/authenticate/cert/?site=www.kuaikuenglish.com&at=realname" target="_blank"><img src="http://static.site.kuaikuenglish.com/newweb/images/footerimg4.gif" border="0"></a><BR>Copyright&reg; 上海快酷网络科技有限公司 沪ICP备12010372号<BR><BR></div>

	</div>

</div>

<script type="text/javascript">
		$(".fullSlide").hover(function(){
		    $(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
		},
		function(){
		    $(this).find(".prev,.next").fadeOut()
		});
		$(".fullSlide").slide({
		    titCell: ".hd ul",
		    mainCell: ".bd ul",
		    effect: "fold",
		    autoPlay: true,
		    autoPage: true,
		    trigger: "click",
		    startFun: function(i) {
		        var curLi = jQuery(".fullSlide .bd li").eq(i);
		        if ( !! curLi.attr("_src")) {
		            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
		        }
		    }
		});
</script>
<!-- Ajax pagination function -->
<script type="text/javascript">
		$(function() {
			applyPagination();
			function applyPagination() {
				$("#ajax_pagingsearc a").click(function() {
					//scrolltop to class sectiontitle
					$(window).scrollTop($('.sectiontitle').offset().top);
					var url = $(this).attr("href");
					$.ajax({
						type: "POST",
						data: "ajax=1",
						url: url,
						success: function(msg) {
							$(".ajaxdata").html(msg);
							applyPagination();
						}
					});
					return false;
				});
			}
		});
</script>

</body>
</html>