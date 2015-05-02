<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Bootstrap, from LayoutIt!</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="/Public/img/favicon.png">
		<link href="/Public/css/bootstrap.css" rel="stylesheet">
		<link href="/Public/css/public.css" rel="stylesheet">
		<link href="/Public/css/activity.css" rel="stylesheet">	
		<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/Public/js/activity.js"></script>
	</head>
	<body>		
	<!-- 头部 -->
	<div id="header">
		<div class="top clearfix">
	<div class="maincontent">
		<ul class="right">
			<li><a href="" rel="nofollow" class="">登录</a> </li>
			<li><a href="" rel="nofollow" class="">免费注册</a></li>
			<li><a href="" rel="nofollow" class="mb_app_link">轻游移动应用</a></li>
		</ul>
	</div>
</div>			
		<div class="navbar navbar-default">
	<nav class="container" role="navigation">
		<div class="navbar-header">							
			<a class="nav-logo" href="<?php echo U('Index/index');?>"><img alt="" src="/Public/img/nav-logo.png"></a>
		</div>
		<div class="collapse navbar-collapse" id="navmeun">
			<ul class="nav navbar-nav" data-module="<?php echo MODULE_NAME;?>">
				<li class="active"><a href="<?php echo U('Index/index');?>" data-module="Index">首页</a></li>
				<li><a href="#" data-module="">目的地</a></li>
				<li><a href="#" data-module="">攻略</a></li>
				<li><a href="<?php echo U('Notes/index');?>" data-module="Notes">游记</a></li>
				<li><a href="<?php echo U('Activity/index');?>" data-module="Activity">活动计划</a></li>
				<li><a href="#">青年客栈</a></li>
			</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="目的地|游记攻略">
				</div>
				<button type="submit" class="btn btn-default">搜索</button>
			</form>
		</div>
	</nav>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var module = $('#navmeun>ul').attr('data-module');
		$('#navmeun>ul>li>a').each(function(i,el){
			if($(el).attr('data-module') == module){
				$(el).parent().addClass('active');
			}else{
				$(el).parent().removeClass('active');
			}
		});
	});
</script>
	</div>
	<!--  内容  -->
	<div class="container">
		<!-- 主体内容 -->
		<div class="row main">
			<div class="col-xs-12 current-topic">
				<div class="row">
					<!-- 左边部分 -->
					<div class="col-xs-9">
						<div class="activitylist">
							<div class="listhead">
								<ul class="nav nav-tabs">
									<li class="first disabled"><a href="#">深圳</a></li>
									<li><a href="#">本周活动(<span class="hby_thisw">145</span>)</a></li>
									<li><a href="#">下周活动(<span class="hby_thisw">145</span>)</a></li>
									<li><a href="#">本月活动(<span class="hby_thisw">145</span>)</a></li>
								</ul>
								<div class="alllist">
									<a href="#">全部>></a>
								</div>
							</div>
							<div class="listcontent">
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 西双版纳</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 云南 丽江 大理 西双版纳 泸沽湖</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 西双版纳</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 云南 丽江 大理 西双版纳 泸沽湖</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 西双版纳</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 云南 丽江 大理 西双版纳 泸沽湖</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 西双版纳</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 云南 丽江 大理 西双版纳 泸沽湖</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 西双版纳</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
								<div class="row activity">
									<a class="col-xs-1 pull-left img-author" href="#">
										<img class="img-responsive" src="/Public/images/author/author0.jpg" alt="">
									</a>
									<div class="col-xs-10">
										<h5><a href="" title="" target="_blank" class="text-left">【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h5>
										<div class="activity-title">												
											<span>发起人：<a class="notes-author" target="_blank" href="">caprico</a></span>	
											<span>目的地：昆明 云南 丽江 大理 西双版纳 泸沽湖</span>
											<span>确认人数：1/8</span>
											<span>出发日期：2014-1-28</span>
											<span>共10天</span>
										</div>
									</div>
								</div>
							</div>
							<div class="pages">
								<ul class="pagination pagination-sm">
									<li class="disabled"><a href="#">首页</a></li>
									<li><a href="#">上一页</a></li>
									<li class="active"><span>1<span class="sr-only">(current)</span></span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">下一页</a></li>
									<li><a href="#">尾页</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- 右边部分 -->
					<div class="col-xs-3">
						<div class="row header-right-side">
							<!-- 查找，求活动 -->
							<div class="col-xs-12 activity-form">
								<ul class="nav nav-tabs" id="activitytab">
									<li class="active"><a href="#search" data-toggle="tab">找活动</a></li>
									<li><a href="#ask" data-toggle="tab">求捡</a></li>
								</ul>									
								<div class="tab-content">
									<!-- 查找 -->
									<div class="tab-pane active" id="search">
										<div class="input-group search-form">
											<input type="text" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
											</span>
										</div>											
									</div>
									<!-- 求活动 -->
									<div class="tab-pane" id="ask">
										<form class="form-horizontal ask-form" role="form">
											<div class="form-group">
												<span for="destination" class="col-xs-3 control-label">我想去</span>
												<div class="col-xs-9">
													<input type="email" class="form-control" id="destination" placeholder="目的地">
												</div>
											</div>
											<div class="form-group">
												<span for="freetime" class="col-xs-3 control-label">空闲时间</span>
												<div class="col-xs-9">
													<input type="email" class="form-control" id="freetime" placeholder="时间">
												</div>
											</div>
											<div class="form-group">
												<span for="lentime" class="col-xs-3 control-label">时间长度</span>
												<div class="col-xs-9">
													<input type="email" class="form-control" id="lentime" placeholder="天数">
												</div>
											</div>
											<div class="form-group">
												<span for="notemsg" class="col-xs-3 control-label">我想说</span>
												<div class="col-xs-9">
													<textarea class="form-control" id="notemsg" rows="3"></textarea>
												</div>
											</div>

											<div class="form-group">
												<div class="col-xs-offset-3 col-xs-10">
													<button type="submit" class="btn yellowbtn">确认发布</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- 活动约伴 -->
							<div class="col-xs-12 bigbutton">
        						<a href="/event/event/add" class="button-large">活动约伴</a>
							</div>
							<!-- 热门会员，活动 -->
							<div class="col-xs-12 col-sub-wrap">
								<div class="daren clearfix">
									<header class="head-sub-nav clearfix">
										<h3 class="nav-font"><span>达人堂</span><em>爱旅行，更爱分享</em></h3>
									</header>
									<div class="daren-list-wrap">
										<ul class="daren-list">
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="usercard"> <a target="_blank" class="avatar nslog" data-nslog="" title="" href=""> <img src="/Public/images/author/author.jpg" class="img-circle" width="50" height="50" alt="zjyff7的头像"> </a> </li>
											<li class="daren-list-more"> <a href="" target="_blank" class="nslog" data-nslog=""> <em>418位达人</em> <i class="glyphicon glyphicon-play"></i></a> </li>
										</ul>
									</div>
								</div>
								<section class="rank-top">
									<header>
										<div class="rank-title" id="J-rank-top">
											<span id="J_up" class="tab bl">旅行活动排行</span>
											<span class="tab-splite">|</span>
											<span id="J_top" class=" tab br active">旅友总排行</span>
										</div>
									</header>
									<div class="rank-main clearfix" id="J_rank-main">
										<ul class="rank-fast" id="J_up_rank" style="display: ;">
											<li class="odd">
												<span class="all-score pull-right"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;973</span>
												<span class="rank-index pull-left index0"></span>
												<a href="" target="_blank" class="rank-nickname fl nslog" data-nslog=""><img width="20" height="20" class="img-circle" alt="life枪炮玫瑰的头像" src="/Public/images/author/author.jpg"></a>
												<a class="" data-usercard="" target="_blank" href="" data-nslog="">life枪炮玫瑰</a>
											</li>
											<li class="">
												<span class="all-score pull-right"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;186</span>
												<span class="rank-index pull-left index1"></span>
												<a href="" target="_blank" class="rank-nickname fl nslog" data-nslog=""><img width="20" height="20" class="img-circle"  alt="Gian芝安的头像" src="/Public/images/author/author.jpg"></a>
												<a class="" data-usercard="" target="_blank" href="" data-nslog="">Gian芝安</a>
											</li>
											<li class="odd">
												<span class="all-score pull-right"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;973</span>
												<span class="rank-index pull-left index2"></span>
												<a href="" target="_blank" class="rank-nickname fl nslog" data-nslog=""><img width="20" height="20" class="img-circle" alt="life枪炮玫瑰的头像" src="/Public/images/author/author.jpg"></a>
												<a class="" data-usercard="" target="_blank" href="" data-nslog="">life枪炮玫瑰</a>
											</li>
											<li class="">
												<span class="all-score pull-right"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;186</span>
												<span class="rank-index pull-left index3"></span>
												<a href="" target="_blank" class="rank-nickname fl nslog" data-nslog=""><img width="20" height="20" class="img-circle"  alt="Gian芝安的头像" src="/Public/images/author/author.jpg"></a>
												<a class="" data-usercard="" target="_blank" href="" data-nslog="">Gian芝安</a>
											</li>
											<li class="odd">
												<span class="all-score pull-right"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;973</span>
												<span class="rank-index pull-left index4"></span>
												<a href="" target="_blank" class="rank-nickname fl nslog" data-nslog=""><img width="20" height="20" class="img-circle" alt="life枪炮玫瑰的头像" src="/Public/images/author/author.jpg"></a>
												<a class="" data-usercard="" target="_blank" href="" data-nslog="">life枪炮玫瑰</a>
											</li>
										</ul>
									</div>
								</section>
								<section class="on-progress">
									<header class="head-sub-nav clearfix"> <h3 class="nav-font">旅友新鲜事</h3> </header>
									<div id="J-home-progeress" class="home-progress">
										<ul class="progress-list" id="J_progress_1">
											<li><a href="" target="_blank" class="progress-user nslog" data-nslog="">秋水∮小...</a>等5人想去<p><a href="" data-nslog="" target="_blank" class="progress-place nslog">焦作影视城</a></p></li>
											<li><a href="" target="_blank" class="progress-user nslog" data-nslog="">管院悲催...</a>等17人想去<p><a href="" data-nslog="" target="_blank" class="progress-place nslog">内乡县衙</a></p></li>
											<li><a href="" target="_blank" class="progress-user nslog" data-nslog="">管院悲催...</a>等17人想去<p><a href="" data-nslog="" target="_blank" class="progress-place nslog">内乡县衙</a></p></li>
										</ul>
									</div>
								</section>
								<section class="notice">
									<header>
										<div class="head-sub-nav">
											<h3 class="nav-font">公告</h3>
											<span class="pull-right">
											<a class="nslog" data-nslog="" href="" target="_blank">更多</a>
											<i class="glyphicon glyphicon-chevron-right"></i>
											</span>
										</div>
									</header>
									<ul class="notice-list">
										<li><span class="gray-point"></span><a class="nslog" data-nslog="{&quot;pid&quot;:308,&quot;page&quot;:&quot;index&quot;,&quot;cmd&quot;:&quot;click&quot;,&quot;pos&quot;:&quot;notes-title-click&quot;}" href="http://hi.baidu.com/lvyoutianshi/item/0b3075e6493e763a5b7cfbb5" target="_blank">【旅行画册】最新版评审标准 </a></li>
										<li><span class="gray-point"></span><a class="nslog" data-nslog="{&quot;pid&quot;:308,&quot;page&quot;:&quot;index&quot;,&quot;cmd&quot;:&quot;click&quot;,&quot;pos&quot;:&quot;notes-title-click&quot;}" href="http://hi.baidu.com/lvyoutianshi/item/0f81458e3abb65fee496e0c9" target="_blank">【热力遨游】获奖公告</a></li>
										<li><span class="gray-point"></span><a class="nslog" data-nslog="{&quot;pid&quot;:308,&quot;page&quot;:&quot;index&quot;,&quot;cmd&quot;:&quot;click&quot;,&quot;pos&quot;:&quot;notes-title-click&quot;}" href="http://hi.baidu.com/lvyoutianshi/item/72e4fe512cc73e514eff202b" target="_blank">【点屏成金】获奖公告</a></li>
										<li><span class="gray-point"></span><a class="nslog" data-nslog="{&quot;pid&quot;:308,&quot;page&quot;:&quot;index&quot;,&quot;cmd&quot;:&quot;click&quot;,&quot;pos&quot;:&quot;notes-title-click&quot;}" href="http://lvyou.baidu.com/notes/f0b96be98d1fe234c70fce58" target="_blank">校园达人第二期公开招募</a></li>
										<li><span class="gray-point"></span><a class="nslog" data-nslog="{&quot;pid&quot;:308,&quot;page&quot;:&quot;index&quot;,&quot;cmd&quot;:&quot;click&quot;,&quot;pos&quot;:&quot;notes-title-click&quot;}" href="http://hi.baidu.com/lvyoutianshi/item/2d6e508942ed32cbd1f8cdba" target="_blank">【我们出发吧】获奖公告</a></li>
									</ul>
								</section>
							</div>
							<!-- 微博频道 -->
							<div class="col-xs-12 col-sub-wrap">
								<div class="follow-lvyou-btn nslog-area" data-nslog="">
									<iframe width="63" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=63&amp;height=24&amp;uid=2039610063&amp;style=1&amp;btn=light&amp;dpc=1"></iframe>
								</div>
								<a class="goto-lvyou-weibo nslog" data-nslog="" href="" target="_blank" title="">轻游官方微博</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 底部 -->
	﻿<div class="site-footer">
	<div class="home-site-footer">
		<div id="footer" class="container">
			<ul class="nav about clearfix">
				<li>
					<dl>
						<dt>关于我们</dt>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-about-1">轻游简介</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-about-2">联系我们</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-about-3">合作伙伴</a></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>青年客栈联盟</dt>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-join-1">客栈入驻</a></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>网站条款</dt>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-1">会员条款</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-2">社区指南</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-3">版权声明</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-clause-4">免责声明</a></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>帮助中心</dt>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-help-1">新手上路</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-help-2">使用帮助</a></dd>
						<dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="foot-help-3">建议和投诉</a></dd>
						<dd><a href="" target="_blank" data-bn-ipg="foot-help-4">网站地图</a></dd>
					</dl>
				</li>
				<li class="last">
					<dl>
						<dt>爱上旅游</dt>
						<dd>
						<a target="_blank" class="avatar nslog" data-nslog="" title="" href="">
						<img src="/Public/images/qunaer0.jpg" class="img-thumbnail" width="60" height="30" alt="zjyff7的头像">
						</a>
						<a target="_blank" class="avatar nslog" data-nslog="" title="" href="">
						<img src="/Public/images/qunaer0.jpg" class="img-thumbnail" width="60" height="30" alt="zjyff7的头像">
						</a>
						<a target="_blank" class="avatar nslog" data-nslog="" title="" href="">
						<img src="/Public/images/qunaer0.jpg" class="img-thumbnail" width="60" height="30" alt="zjyff7的头像">
						</a>
						<a target="_blank" class="avatar nslog" data-nslog="" title="" href="">
						<img src="/Public/images/qunaer0.jpg" class="img-thumbnail" width="60" height="30" alt="zjyff7的头像">
						</a>
						<a target="_blank" class="avatar nslog" data-nslog="" title="" href="">
						<img src="/Public/images/qunaer0.jpg" class="img-thumbnail" width="60" height="30" alt="zjyff7的头像">
						</a>
						</dd>
					</dl>
				</li>
			</ul>
			<p class="copyright clearfix"> ©2013 Baidu <a target="_blank" href="http://qingworld.boss.com/" class="agreement">轻游（简单游览世界）</a> <a target="_blank" href="/help/uagreement">轻游网站用户协议</a> <a target="_blank" href="/help/contact"  class="nslog">联系我们</a> </p>
		</div>
	</div>
</div>
	</body>
</html>