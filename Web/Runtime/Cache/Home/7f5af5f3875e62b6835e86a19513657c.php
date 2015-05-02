<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Bootstrap, from LayoutIt!</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="/Public/css/bootstrap.css" rel="stylesheet">
		<link href="/Public/css/public.css" rel="stylesheet">
		<link href="/Public/css/notes.css" rel="stylesheet">
		<!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet"> -->
		<link rel="shortcut icon" href="/Public/img/favicon.png">
		<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/Public/js/jquery.adipoli.min.js"></script>		
		<script type="text/javascript" src="/Public/js/index.js"></script>
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
				<div class="notes-head">					
					<div class="notes-words">
						<img id="notes-quote" src="/Public/img/notes_quote.jpg" alt="Du行天使" title="旅行，是你能买到的唯一一件使你更富有的东西。">
					</div>
					<div class="write-notes-btn">
						<a class="new-note-low" href="#" id="J_notes-create-new">发表游记攻略</a>
					</div>
				</div>
				<div class="notes-content">
					<div class="row notes-view clearfix" id="notes-view">
						<div id="notes-loading" class="notes-loading" style="display: none;"><p>正在努力加载中，请稍候 ^_^</p></div>
						<div class="recommendation col-xs-3">
							<div class="recommendation-main clearfix">
								<span class="recommendation-title">版主力荐</span>
								<div class="notes-categories">
									<ul>
										<li><a id="latest-notes" class="notes-active" href="###">热门</a></li>
										<li><a id="praise-notes" class="" href="###">优质精华</a></li>
										<li><a id="guide-notes" class="" href="###">最新发表</a></li>
									</ul>
								</div>
								<div class="hot-destinations">
									<span class="hot-destinations-title">热门目的地</span>
									<div class="notes-cms clearfix">
										<ul class="notes-cms-group clearfix nslog-area" id="J_notes-cms-china" data-nslog="">
											<li><a class="scene-choose scene-choosen" data-sname="厦门" href="###">厦门</a></li>
											<li><a class="scene-choose" data-sname="三亚" href="###">三亚</a></li>
											<li><a class="scene-choose" data-sname="北京" href="###">北京</a></li>
											<li><a class="scene-choose" data-sname="香港" href="###">香港</a></li>
											<li><a class="scene-choose" data-sname="澳门" href="###">澳门</a></li>
											<li><a class="scene-choose" data-sname="丽江" href="###">丽江</a></li>
											<li><a class="scene-choose" data-sname="凤凰" href="###">凤凰</a></li>
											<li><a class="scene-choose" data-sname="青岛" href="###">青岛</a></li>
										</ul>
										<ul class="notes-cms-group clearfix nslog-area" id="J_notes-cms-foreign" data-nslog="">
											<li><a class="scene-choose" data-sname="普吉岛" href="###">普吉岛</a></li>
											<li><a class="scene-choose" data-sname="瑞士" href="###">瑞士</a></li>
											<li><a class="scene-choose" data-sname="韩国" href="###">韩国</a></li>
											<li><a class="scene-choose" data-sname="美国" href="###">美国</a></li>
											<li><a class="scene-choose" data-sname="埃及" href="###">埃及</a></li>
											<li><a class="scene-choose" data-sname="马尔代夫" href="###">马尔代夫</a></li>
											<li><a class="scene-choose" data-sname="澳大利亚" href="###">澳大利亚</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-container col-xs-3">
							<div class="item"></div>
							<div class="item"></div>
						</div>
						<div class="col-container col-xs-3">
							<div class="item"></div>
							<div class="item"></div>
						</div>
						<div class="col-container col-xs-3">
							<div class="item"></div>
							<div class="item"></div>
						</div>
						<div class="col-container col-xs-3">
							<div class="item"></div>
							<div class="item"></div>
						</div>
						<div id="loading-block" class="loading-block" style="display: none;"><p>正在努力加载中，请稍候 ^_^</p></div>
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