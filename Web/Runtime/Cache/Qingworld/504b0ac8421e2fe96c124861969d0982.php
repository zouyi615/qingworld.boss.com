<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Qingworld</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/Public/qingworld/css/bootstrap.min.css" /> <!-- bootstrap样式 -->
<link rel="stylesheet" href="/Public/qingworld/css/bootstrap-responsive.min.css" /> <!-- bootstrap自适应宽度样式 -->
<link rel="stylesheet" href="/Public/qingworld/css/matrix-style.css" /> <!-- matrix style定义属性 -->
<link rel="stylesheet" href="/Public/qingworld/css/matrix-media.css" /> <!-- matrix media定义属性 -->
<link rel="stylesheet" href="/Public/qingworld/font-awesome/css/font-awesome.css" /> <!-- css字体图片 -->
</head>
<body>
<!--头部logo-->
<div id="header">
    <h1><a href="">Qingwrold</a></h1>
</div>
<!--头部logo end --> 
<!--header菜单部分-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav" style="width: auto; margin: 0px;">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
                <i class="icon icon-user"></i>
                <span class="text">欢迎，admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i>&nbsp;我的账户</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i>&nbsp;修改密码</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-key"></i>&nbsp;退出登录</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages">
            <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
                <i class="icon icon-envelope"></i>
                <span class="text">消息</span>
                <span class="label label-important">5</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">管理员设置</span></a></li>
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here...">
    <button type="submit" class="tip-bottom" data-original-title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--header菜单部分 end-->
<!--左边导航菜单-->
<div id="sidebar">
    <a href="" class="visible-phone"><i class="icon icon-home"></i>管理首页</a>
    <ul style="display: block;">
        <li class="active">
            <a target="_self" href="<?php echo U('Index/index');?>"><i class="icon icon-home"></i> <span>管理首页</span></a>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-user"></i> <span>用户管理</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">用户管理</a></li>                
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">发送通知</a></li>                
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">禁止用户列表</a></li>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">资料审核</a></li>                
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">用户组</a></li>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">在线用户</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-eye-open"></i> <span>界面设置</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">导航设置</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">编辑器设置</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-pencil"></i> <span>轻游内容</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">内容审核</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">词语过滤</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">用户反馈</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">主题管理</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">内容批量删除</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">日志管理</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">回收站</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-inbox"></i> <span>轻游版块</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">版块管理</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">主题分类管理</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-tint"></i> <span>轻游活动</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">站点公告</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">广告管理</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">站点帮助</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">友情链接</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);"><i class="icon icon-leaf"></i> <span>轻游站长</span></a>
            <ul>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">站点信息</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">后台管理团队</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">数据库备份与还原</a></li>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">用户注册配置</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">用户权限控制</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">时间设置</a></li>
                <li><a target="mainFrame" href="<?php echo U('User/index');?>">上传设置</a></li>
                <li><a target="mainFrame" href="javascript:void(0);">地区设置</a></li>
            </ul>
        </li>
        <!-- <li><a target="mainFrame" href=""><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li> -->
        <li class="content"> <span>Monthly Bandwidth Transfer</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
            </div>
            <span class="percent">77%</span>
            <div class="stat">21419.94 / 14000 MB</div>
        </li>
        <li class="content"> <span>Disk Space Usage</span>
            <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
            </div>
            <span class="percent">87%</span>
            <div class="stat">604.44 / 4000 MB</div>
        </li>
    </ul>
</div>
<!--左边导航菜单 end-->

<!--主题内容部分-->
<div id="content">
<iframe src="<?php echo U('index/main');?>" id="mainFrame" name="mainFrame" width="100%" cellpadding="0" cellspacing="0" frameborder="0" scrolling="no"></iframe>
</div>
<!--主题内容部分 end-->

<!--footer部分-->
<div class="row-fluid">
	<div id="footer" class="span12"> 2014 © Qingworld. Design to you by <a href="">Qingworld.com</a> </div>
</div>
<!--footer部分 end-->
<script src="/Public/qingworld/js/jquery.min.js"></script> <!-- jquery -->
<script src="/Public/qingworld/js/bootstrap.min.js"></script>  <!-- bootstrap js -->
<script src="/Public/qingworld/js/matrix.js"></script> 
<script type="text/javascript">

</script>
</body>
</html>