<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Bootstrap, from LayoutIt!</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="/Public/css/bootstrap.css" rel="stylesheet">
		<link href="/Public/css/public.css" rel="stylesheet">
		<link href="/Public/css/adipoli.css" rel="stylesheet">
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
		<div class="logo">
			<div class="maincontent">
				<a href="<?php echo U('Index/index');?>" class="logoA"><img alt="" src="/Public/img/logo.png" id="LogoImg"></a>
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
					<div class="col-xs-9">
						<!-- 图片轮播-->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="/Public/images/1.jpg" alt="">
									<div class="carousel-caption">
										<h4>坝上，无法抵御的色诱之地</h4>
										<p>本旅行画册由 粉墨是梦2013 荣誉出品!</p>
									</div>
								</div>
								<div class="item">
									<img src="/Public/images/2.jpg" alt="">
									<div class="carousel-caption">
										<h4>不止是动物! 不跟团肯尼亚十天~</h4>
										<p>本游记攻略由 西米西米张 荣誉出品!</p>
									</div>
								</div>
								<div class="item">
									<img src="/Public/images/3.jpg" alt="">
									<div class="carousel-caption">
										<h4>夜小梦和白白的北上之旅</h4>
										<p>本游记攻略由 叶梦5201314 荣誉出品!</p>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
						<div class="height20"></div>
						<!-- 去哪儿目的地 -->
						<div class="destination">
							<blockquote>
								<h3 class="line20">旅行谈 <span class="current-topic-tit">&nbsp;跟着《爸爸去哪儿》走进沙漠</span></h3>
								<p class="fontkt"><small>第三期节目中五组明星家庭转战宁夏大漠，接受沙漠生存的种种考验。快跟着他们一起，深入沙漠腹地，领会沙漠的雄浑与壮美！</small></p>
							</blockquote>
							<div class="row">
								<div class="col-xs-12">
									<div class="row row-topic">
										<div class="col-xs-4">
											<div class="img">
												<a href="" title="" target="_blank"><img src="/Public/images/travel/4.jpeg" class="img-responsive" alt="Responsive image"></a>
											</div>
											<p class="topic-item-tit">
											<a href="" title="" target="_blank" class="text-left">敦煌：给你不一样的视角</a>
											</p>
											<p class="view-replay-num">
											<i class="glyphicon glyphicon-eye-open"></i>6589
											&nbsp;&nbsp;
											<i class="glyphicon glyphicon-comment"></i>111
											</p>
										</div>
										<div class="col-xs-8">
											<div class="row">
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/5.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">探寻荒漠中的生命之歌</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/6.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">极境略影，冲浪之旅</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/7.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">极境略影，冲浪之旅</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
											</div>
										</div>
										<div class="col-xs-8">
											<div class="row">
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/5.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">探寻荒漠中的生命之歌</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/6.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">极境略影，冲浪之旅</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
												<div class="col-xs-4">
													<div class="img">
														<a href="" title="" target="_blank"><img src="/Public/images/travel/7.jpg" class="img-responsive" alt="Responsive image"></a>
													</div>
													<p class="topic-item-tit">
													<a href="" title="" target="_blank" class="text-left">极境略影，冲浪之旅</a>
													</p>
													<p class="view-replay-num">
													<i class="glyphicon glyphicon-eye-open"></i>6589
													&nbsp;&nbsp;
													<i class="glyphicon glyphicon-comment"></i>111
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- banner栏 -->
						<div class="main-banner">
							<a class="nslog nslog-show" target="_blank" href="">
							<img class="banner-pic" alt="" src="/Public/images/main-banner.png">
							</a>
						</div>
						<!-- 青年客栈 -->
						<div class="youth-hostel">
							<blockquote>
								<p><h3 class="line30">青年客栈</h3></p>
							</blockquote>
							<legend><small></small></legend>
							<div class="row hostel-list">
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/10.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/11.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/12.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/13.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/10.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/11.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/12.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
								<div class="col-xs-3 pull-left" href="#">
									<a href="" target="_blank"><img class="img-responsive" src="/Public/images/lodge/13.jpg" alt=""></a>
									<div class="apr_httext">
										<p class="topic-item-tit">
										<a href="" target="_blank" title="">北京东城区特色温馨浪漫舒适酒店式公寓</a>
										</p>
										<div class="star_page"><span>位置：崇文门商圈</span></div>
										<div class="type_pr">
											<a href="" target="_blank">豪华大床房</a>
											<span class="apr_pr">仅
											<span class="pr"><a href="" target="_blank">¥<b>137</b></a></span>
											</span>
										</div>
										<p class="type_pr">
										<del>网络价<em>¥248</em></del>
										<span class="apr_pr"><a href="" target="_blank" title="立即预订">立即预订</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- 游记攻略 -->
						<div class="travel-guide">
							<blockquote>
								<p><h3 class="line30">精彩游记攻略</h3></p>
							</blockquote>
							<ul class="breadcrumb head-topic">
								<li><font>最新优质精华</font> <span class="divider"></span></li>
								<li><font>最新发表</font> <span class="divider"></span></li>
								<li><a href="">更多></a></li>
							</ul>
							<legend><small></small></legend>
							<div id="topic">
								<div class="row article">
									<a class="col-xs-4 pull-left" href="#">
									<img class="img-responsive" src="/Public/images/travel/9.jpg" alt="">
									</a>
									<div class="col-xs-8 media-body">
										<h4><a href="" title="" target="_blank" class="text-left">
										【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h4>
										<div class="item-ft">
											<a target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											作者：<a class="notes-author"  target="_blank" href="">caprico</a>
											<a target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											回复：<a class="notes-author" target="_blank" href="">咖啡面7</a>
											<font class="notes-author">11-07 20:31</font>
											<i class="glyphicon glyphicon-comment lightyellow"></i>
											<span class="notes-view-num" title="浏览">14924</span>
											<span class="notes-view-reply-splite">/</span>
											<span class="notes-reply-num" title="回复">291</span>
										</div>
										<p class="text-left article-des">每段旅程结束，总觉得要做个形形式式的总结才算为这段旅程画个完美的句号。或许对于我来说，文字的归纳，照片的整理，可以让我收拾好心情，再度出发。这个暑假，从四川到甘肃到川北到青海，然后再回到四川，休整一天回到云南。旅程结束的这20多天里，每天都是各种睡觉，当终于意识到游记要</p>
										<div class="notes-recommend" title="推荐">
											<a href="###" >
											<i class="glyphicon glyphicon-thumbs-up lightyellow"></i>
											<span class="recommend-num">7</span>
											</a>
										</div>
									</div>
								</div>
								<div class="row article">
									<a class="col-xs-4 pull-left" href="#">
									<img class="img-responsive" src="/Public/images/travel/9.jpg" alt="">
									</a>
									<div class="col-xs-8 media-body">
										<h4><a href="" title="" target="_blank" class="text-left">
										【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h4>
										<div class="item-ft">
											<a  target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											作者：<a class="notes-author"  target="_blank" href="">caprico</a>
											<a target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											回复：<a class="notes-author" target="_blank" href="">咖啡面7</a>
											<font class="notes-author">11-07 20:31</font>
											<i class="glyphicon glyphicon-comment lightyellow"></i>
											<span class="notes-view-num" title="浏览">14924</span>
											<span class="notes-view-reply-splite">/</span>
											<span class="notes-reply-num" title="回复">291</span>
										</div>
										<p class="text-left article-des">每段旅程结束，总觉得要做个形形式式的总结才算为这段旅程画个完美的句号。或许对于我来说，文字的归纳，照片的整理，可以让我收拾好心情，再度出发。这个暑假，从四川到甘肃到川北到青海，然后再回到四川，休整一天回到云南。旅程结束的这20多天里，每天都是各种睡觉，当终于意识到游记要</p>
										<div class="notes-recommend" title="推荐">
											<a href="###" >
											<i class="glyphicon glyphicon-thumbs-up lightyellow"></i>
											<span class="recommend-num">7</span>
											</a>
										</div>
									</div>
								</div>
								<div class="row article">
									<a class="col-xs-4 pull-left" href="#">
									<img class="img-responsive" src="/Public/images/travel/9.jpg" alt="">
									</a>
									<div class="col-xs-8 media-body">
										<h4><a href="" title="" target="_blank" class="text-left">
										【囤黄金】泰国普吉岛7日游海岛热带雨林全记录</a></h4>
										<div class="item-ft">
											<a target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											作者：<a class="notes-author"  target="_blank" href="">caprico</a>
											<a target="_blank" href=""><img class="notes-avatar img-circle" alt="" src="/Public/images/author/author.jpg"></a>
											回复：<a class="notes-author" target="_blank" href="">咖啡面7</a>
											<font class="notes-author">11-07 20:31</font>
											<i class="glyphicon glyphicon-comment lightyellow"></i>
											<span class="notes-view-num" title="浏览">14924</span>
											<span class="notes-view-reply-splite">/</span>
											<span class="notes-reply-num" title="回复">291</span>
										</div>
										<p class="text-left article-des">每段旅程结束，总觉得要做个形形式式的总结才算为这段旅程画个完美的句号。或许对于我来说，文字的归纳，照片的整理，可以让我收拾好心情，再度出发。这个暑假，从四川到甘肃到川北到青海，然后再回到四川，休整一天回到云南。旅程结束的这20多天里，每天都是各种睡觉，当终于意识到游记要</p>
										<div class="notes-recommend" title="推荐">
											<a href="###" >
											<i class="glyphicon glyphicon-thumbs-up lightyellow"></i>
											<span class="recommend-num">7</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 旅游相册 -->
						<div class="travel-picture">
							<div class="ind_title">
								<h2 class="ind_title_name">旅行相册</h2>
								<a href="http://www.qyer.com/postcards/" class="ind_title_more" title="POSTCARDS" data-bn-ipg="album-discover">POSTCARDS</a><span class="ind_title_slogan">一张照片, 一个瞬间, 在这里发现一个更美好的世界。</span>
							</div>
							<div class="row ind_photolist">
								<ul>
									<li class="col-xs-3 pull-left">
										<div class="pic"><a href="" data-bn-ipg="" target="_blank"><img src="/Public/images/travel/travel1.jpg" width="186" height="124" alt=""></a></div>
										<div class="foot">
											<p class="face">
											<a href="" data-bn-ipg="" title="" target="_blank"><img src="/Public/images/author/author.jpg" class="img-circle" width="30" height="30" alt=""></a>
											</p>
											<p class="writer">
											<a href="" data-bn-ipg="album-1-3" title="" target="_blank">2013金秋欧洲行</a>
											</p>
											<p class="num">
											<i class="glyphicon glyphicon-picture" title="照片"></i><span>107</span>
											<i class="glyphicon glyphicon-eye-open" title="浏览"></i><span>27365</span>
											</p>
										</div>
									</li>
									<li class="col-xs-3 pull-left">
										<div class="pic"><a href="" data-bn-ipg="" target="_blank"><img src="/Public/images/travel/travel1.jpg" width="186" height="124" alt=""></a></div>
										<div class="foot">
											<p class="face">
											<a href="" data-bn-ipg="" title="" target="_blank"><img src="/Public/images/author/author.jpg" class="img-circle" width="30" height="30" alt=""></a>
											</p>
											<p class="writer">
											<a href="" data-bn-ipg="album-1-3" title="" target="_blank">2013金秋欧洲行</a>
											</p>
											<p class="num">
											<i class="glyphicon glyphicon-picture" title="照片"></i><span>107</span>
											<i class="glyphicon glyphicon-eye-open" title="浏览"></i><span>27365</span>
											</p>
										</div>
									</li>
									<li class="col-xs-3 pull-left">
										<div class="pic"><a href="" data-bn-ipg="" target="_blank"><img src="/Public/images/travel/travel1.jpg" width="186" height="124" alt=""></a></div>
										<div class="foot">
											<p class="face">
											<a href="" data-bn-ipg="" title="" target="_blank"><img src="/Public/images/author/author.jpg" class="img-circle" width="30" height="30" alt=""></a>
											</p>
											<p class="writer">
											<a href="" data-bn-ipg="album-1-3" title="" target="_blank">2013金秋欧洲行</a>
											</p>
											<p class="num">
											<i class="glyphicon glyphicon-picture" title="照片"></i><span>107</span>
											<i class="glyphicon glyphicon-eye-open" title="浏览"></i><span>27365</span>
											</p>
										</div>
									</li>
									<li class="col-xs-3 pull-left">
										<div class="pic"><a href="" data-bn-ipg="" target="_blank"><img src="/Public/images/travel/travel1.jpg" width="186" height="124" alt=""></a></div>
										<div class="foot">
											<p class="face">
											<a href="" data-bn-ipg="" title="" target="_blank"><img src="/Public/images/author/author.jpg" class="img-circle" width="30" height="30" alt=""></a>
											</p>
											<p class="writer">
											<a href="" data-bn-ipg="album-1-3" title="" target="_blank">2013金秋欧洲行</a>
											</p>
											<p class="num">
											<i class="glyphicon glyphicon-picture" title="照片"></i><span>107</span>
											<i class="glyphicon glyphicon-eye-open" title="浏览"></i><span>27365</span>
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- 右边部分 -->
					<div class="col-xs-3">
						<div class="row header-right-side">
							<!-- 1，目的地，游记，青年客栈汇总 -->
							<div class="col-xs-12 scene-note-total-wrap">
								<div class="scene-total pr">
									<a href="/scene/" target="_blank" class="nslog"><i class="scene-icon glyphicon glyphicon-map-marker"></i></a>
									<p>
									<span class="scene-total-num">
									<a href="" target="_blank" class="nslog">60882</a>
									</span>
									<span class="scene-total-desc">个目的地</span>
									</p>
									<p>吃住行游购尽备囊中</p>
								</div>
								<div class="scene-total pr">
									<a href="/scene/" target="_blank" class="nslog"><i class="scene-icon glyphicon glyphicon-book"></i></a>
									<p>
									<span class="scene-total-num">
									<a href="" target="_blank" class="nslog">176743</a>
									</span>
									<span class="scene-total-desc">篇游记攻略</span>
									</p>
									<p>讲述精彩旅行故事</p>
								</div>
								<div class="scene-total pr">
									<a href="/scene/" target="_blank" class="nslog"><i class="scene-icon glyphicon glyphicon-leaf"></i></a>
									<p>
									<span class="scene-total-num">
									<a href="" target="_blank" class="nslog">60882</a>
									</span>
									<span class="scene-total-desc">家青年客栈</span>
									</p>
									<p>旅途中休憩港湾</p>
								</div>
								<div class="notes-total pr">
									<div class="share-wrap text-center clearfix">
										<p>与<span class="share-num" id="J-share-lv-num">22,845,371</span>旅友分享你的大作</p>
										<div class="create-btns pull-left">
											<button type="button" class="btn btn-info">
											<i class="icon glyphicon glyphicon-map-marker"></i><span class="notes-create-btn">创建<br>活动</span>
											</button>
										</div>
										<div class="create-btns pull-right">
											<button type="button" class="btn btn-info">
											<i class="icon glyphicon glyphicon-pencil"></i><span class="notes-create-btn">发表<br>游记</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- 旅游活动 -->
							<div class="col-xs-12 col-sub-wrap">
								<header class="head-sub-nav clearfix">
									<h3 class="nav-font">轻游旅行活动</h3>
								</header>
								<a class="" data-nslog="" target="_blank" href=""><img src="/Public/images/activity.png" alt="" width="240"></a>
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