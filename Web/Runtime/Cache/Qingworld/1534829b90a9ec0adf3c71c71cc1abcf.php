<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Qingworld</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/Public/qingworld/css/bootstrap.min.css" /> <!-- bootstrap样式 -->
        <link rel="stylesheet" href="/Public/qingworld/css/bootstrap-responsive.min.css" /> <!-- bootstrap自适应宽度样式 -->
        <link rel="stylesheet" href="/Public/qingworld/css/matrix-style.css" /> <!-- matrix style定义属性 -->
        <link rel="stylesheet" href="/Public/qingworld/css/uniform.css" />
        <link rel="stylesheet" href="/Public/qingworld/font-awesome/css/font-awesome.css" /> <!-- css字体图片 -->
        <script src="/Public/qingworld/js/jquery.min.js"></script> <!-- jquery -->
    </head>
    <body>
        <div class="maincontent">
            <div id="content-header">
                <div id="breadcrumb">
                    <a href="#" title="Go to Home" class="tip-bottom">
                        <i class="icon-home"></i>管理首页
                    </a> 
                    <a href="#" class="current">新增用户</a> 
                </div>
            </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> 
                                <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>新增用户</h5>
                                <span class="label label-info"></span>
                            </div>                            
                            <div class="widget-content nopadding">
                                <form action="#" method="get" class="form-horizontal" id="addUser">
                                    <div class="control-group">
                                        <label class="control-label">用户名:</label>
                                        <div class="controls">
                                            <input type="text" class="span3" name="username" id="username" placeholder="用户名">
                                            <div class="boxtips"><span class="info">（用户名会作为默认的昵称）</span></div>
                                        </div>                                        
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">密码:</label>
                                        <div class="controls">
                                            <input type="password" class="span3" name="password" id="password" placeholder="密码">
                                            <div class="boxtips"><span class="info">（用户密码不能少于六位）</span></div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">确认密码:</label>
                                        <div class="controls">
                                            <input type="password" class="span3" name="password2" id="password2" placeholder="确认密码">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">用户类型:</label>
                                        <div class="controls">
                                            <select name="usertype" id="usertype" class="span2">
                                                <option>管理员</option>
                                                <option>超级版主</option>
                                                <option>版主</option>
                                                <option>普通用户</option>
                                                <option>禁止用户</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">手机号码:</label>
                                        <div class="controls">
                                            <input type="text" class="span3" name="phone" id="phone" placeholder="手机号码">
                                            <div class="boxtips"><span class="info">（用户书记号码，用于接收短信验证码等操作）</span></div>
                                        </div>                                        
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">邮箱:</label>
                                        <div class="controls">
                                            <input type="text" class="span3" name="email" id="email" placeholder="邮箱">
                                            <div class="boxtips"><span class="info">（用户邮箱，用于找回密码等安全操作）</span></div>
                                        </div>                                        
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-danger" name="submit" id="submit">确定</button>
                                        <button type="submit" class="btn btn-success" onclick="javascript:history.back(-1);return false;">返回</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>