<? include 'config.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="keywords" content="报名流程 快酷英语 全球网络英语培训领跑者 外教网络一对一 网上学英语 在线英语口语 英语口语培训 英语口语陪练" />
<meta name="description" content="报名流程 快酷英语 全球网络英语培训领跑者 外教网络一对一 网上学英语 在线英语口语 英语口语培训 英语口语陪练" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />   
<link rel="icon" type="image/png" href="/static/img/icon/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/static/css/staticcommon/base.css"/>
<script type="text/javascript" src="/static/js/staticcommon/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("ol.menu a").eq(1).remove();
	$("ol.menu a").eq(0).after('<a class="hover" href="javascript:void(0);">学员访谈</a>');
});
</script>


<style type="text/css">
<!--
ul,li{ list-style-type:none;}
#con{ width:864px; height:750px; margin:10px auto; position:relative; border:1px #1ea4be solid; background-color:#FFFFFF;
overflow:hidden;}
#con ul{ position:absolute; margin:10px; top:0; left:0; padding:0;}
#con ul li{ width:845px;  border-bottom:1px #333333 dotted; padding:20px 0; overflow: hidden}
#con ul li a{ float:left; padding:2px;text-decoration: none;}
#con ul li img{border:1px grey solid;}
#con ul li p{ margin-left:68px;line-height:1.5;  padding:10px;}
.clear{clear:both;height:0px;}
#con ul li .font_titile{color:#3B5998 ;font-size:16px;font-weight: 700;text-decoration:none;}
#con ul li .font_titile:hover{text-decoration: underline;cursor: pointer;}
.span_100{width: 100px;display: block;float:left;text-align: left;margin-right: 9px;}
.span_110{width: 110px;display: block;float:left;text-align: left;margin-right: 9px; }
.span_120{width: 120px;display: block;float:left;text-align: left;margin-right: 9px; }
.span_140{width: 140px;display: block;float:left;text-align: left;margin-right: 9px;}
.span_150{width: 150px;display: block;float:left; padding:2px;}
.span_160{width: 160px;display: block;float:left; padding:2px;}
.span_170{width: 170px;display: block;float:left; padding:2px;}
.div_img{float: left;width: 50px;height:50px;}
.div_content_fl{float: left;width: 600px;height:50px; margin-left: 20px;}
.div_content_fl .c_title{width: 600px;display: block;height: 25px;float: left;}
.div_content_fl .c_detail{width:800px;height:25px;float: left;color:#333;margin-top: 7px;}
 -->
 .top_title{
background: url('/static/studentinterview/img/interview.png') no-repeat;
width: 864px;
height: 38px;
display: block;
}
 </style>

<title>学员访谈-快酷英语 全球网络英语培训领跑者 外教网络一对一 网上学英语 在线英语口语 英语口语培训 英语口语陪练</title>
</head>
<body>
<!--header:Begin-->
<div class="head">
  <?php include('static/elements/header.shtml'); ?>
</div>
<!--header:End-->
<!--top:Begin-->
<div class="top">
   <?php include('static/elements/top.shtml'); ?>
</div>
<!--top:End-->
<!--content:Begin-->
<div class="main">

    <div class="section">
    
    	<div class="faq">
        	<h2>学员访谈</h2>
            <ul>
                <li style="font-size:13px;">
                <em class="top_title"> </em>

                </li>
            </ul>
            <div id="con">
				  <ul>
				       <?php
			                foreach ($interview_list->result() as $interview) {
			                    ?>
			                    <li>
							       <div class="div_img"><a target="_black" href="/studentinterview/detail/<?php echo $interview->id; ?>/">
							       <img border="0" width="58" height="58" src="http://main.kuaikuenglish.com/<?php echo $interview->profile_img;?>" /></a></div>
							       <div class="div_content_fl">
							       <div class="c_title"><a target="_black" href="/studentinterview/detail/<?php echo $interview->id; ?>/" class="font_titile">
							       <?php echo $interview->title; ?></a></div>
							       <div class="c_detail"><span class="span_100">姓名:<?php echo $interview->student_name; ?></span>
							       <span class="span_120">所在城市：<?php echo $interview->province_name; ?></span>
							       <span class="span_110">学员类型：<?php echo $interview->type_name; ?></span>
							       <span class="span_160"> 学习目的：<?php echo $interview->purpose; ?></span>
							       <span class="span_140">学习课程：<?php echo $interview->course_name; ?></span>
							       <span class="span_120">访谈日期：<?php $orgInterviewDate = $interview->interview_date; echo date("Y-m", strtotime($orgInterviewDate)); ?></span></div>
							       </div>
							    </li>
			                    <?php
			                		}
						    ?>
				  </ul>
 
            </div>
            
            <div class="paging">
				<ul class="CFix">
				<?php
                if (strlen($pagination_data)) { ?>
                	<li class="numbers center floatL">
					  <span><?php echo $pagination_data; ?></span>
					</li>
                    <?php 
                	}
                ?>
				</ul>
			</div>
  
 
        </div>
    </div>
</div>
<!--content:End-->
<!-- footbg:Begin -->
<div class="footbg">
  <?php include('static/elements/footer.shtml'); ?>
</div>
<!-- footbg:End -->

<link rel="stylesheet" type="text/css" href="/static/css/teachers/index.css" />
</body>
</html>