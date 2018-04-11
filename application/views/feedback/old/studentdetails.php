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
<link rel="stylesheet" type="text/css" href="/static/studentinterview/css/detail.css"/>

<script type="text/javascript" src="/static/js/staticcommon/jQuery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("ol.menu a").eq(1).remove();
	$("ol.menu a").eq(0).after('<a class="hover" href="javascript:void(0);">学员访谈</a>');
});
</script>
<style type="text/css">
.title_font{ font-size: 16px;color:#555;font-weight: 700; }
.faq em{
line-height: 30px;
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
        	<h2>学员访谈记</h2>
            <ul>
            <?php 
                foreach($info->result() as $data) { ?>
                <li style="font-size:13px;">
                      <em class="detail_titile_bg"> </em>
              				<em style="margin-top: 5px;"></em>
              				<em style="float: right;"> <img width="208" height="255" src="http://main.kuaikuenglish.com/<?php echo $data->profile_img;?>"></img> </em>
                      <em class="common_title_bg"><?php echo $data->title; ?></em><br/>
                      <em class="title_font">学员姓名：<?php echo $data->student_name; ?> </em><br/>
                      <em>所在城市：<?php echo $data->province_name; ?></em><br/>
                      <em>学员类型：<?php echo $data->type_name; ?></em><br/>
                      <em>学习目的：<?php echo $data->purpose; ?></em><br/>
                      <em>学习课程：<?php echo $data->course_name; ?></em><br/>
                      <em>学习开始日期：<?php echo date("Y-m", strtotime($data->study_date)); ?></em><br/>
                      <em>访谈日期：<?php echo date("Y-m", strtotime($data->interview_date));  ?></em><br/>
                      <em class="common_title_bg">访谈记录</em><br/>
                </li>
                      <?php echo $data->content;
                       }
                      ?>  
            </ul>
        </div>
    </div>
</div>
<!--content:End-->
<!-- footbg:Begin -->
<div class="footbg">
  <?php include('static/elements/footer.shtml'); ?>
</div>
<!-- footbg:End -->
</body>
</html>