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
        <script src="/Public/qingworld/js/jquery.dataTables.min.js"></script>  <!-- jQuery 的表格插件 -->
        <script src="/Public/qingworld/js/jquery.uniform.js"></script>  <!-- uniform jquery 表单美化 -->
        <script src="/Public/qingworld/js/select2.min.js"></script> <!-- 下拉美化插件 -->
        <script src="/Public/qingworld/js/matrix.tables.js"></script> <!-- matrix 表格js效果 -->
    </head>
    <body>
        <div class="maincontent">
            <div id="content-header">
                <div id="breadcrumb">
                    <a href="#" title="Go to Home" class="tip-bottom">
                        <i class="icon-home"></i>管理首页
                    </a> 
                    <a href="#" class="current">用户管理</a> 
                </div>
            </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>用户列表</h5>
                                <div class="userSearch pull-right">
                                    <form class="navbar-form">
                                        <input type="text" class="span8" placeholder="请输入用户名">
                                        <button type="submit" class="btn">搜索</button>
                                    </form>
                                </div>
                                <span class="label label-info"></span>
                            </div>                            
                            <div class="widget-content" id="userslist">
                                <p>
                                    <a href="<?php echo U('User/add');?>"><button class="btn btn-info">新增</button></a>
                                    <button class="btn btn-info">启用</button>
                                    <button class="btn btn-info">禁用</button>
                                    <button class="btn btn-info">删除</button>
                                </p>
                                <table class="table table-bordered table-striped with-check">
                                    <thead>
                                        <tr>
                                            <th width="5%"><div class="checker" id="uniform-title-table-checkbox"><span class="checked"><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" style="opacity: 0;"></span></div></th>
                                            <th width="10%">用户名</th>
                                            <th width="8%">积分</th>
                                            <th width="8%">发帖数</th>
                                            <th width="10%">用户组</th>
                                            <th width="16%">注册时间</th>
                                            <th width="16%">最后登录</th>
                                            <th width="8%">用户状态</th>
                                            <th width="">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($userlist)): foreach($userlist as $key=>$vo): ?><tr>
                                            <td><div class="checker" id="uniform-<?php echo ($key+1); ?>"><span class="checked"><input type="checkbox" style="opacity: 0;"></span></div></td>
                                            <td><?php echo ($vo["username"]); ?></td>
                                            <td><?php echo ($vo["credits"]); ?></td>
                                            <td><?php echo ($vo["posts"]); ?></td>
                                            <td><?php echo ($vo["groupid"]); ?></td>
                                            <td><?php echo ($vo["regdate"]); ?></td>
                                            <td><?php echo ($vo["lastvisit"]); ?></td>
                                            <td><?php echo ($vo["ustate"]); ?></td>
                                            <td></td>
                                        </tr><?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                                <div class="pages">
                                    <div class="pagination pagination-centered">
                                        <ul>
                                            <li class="disabled"><a href="javascript:void(0);">«</a></li>
                                            <li class="active"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">6</a></li>
                                            <li><a href="javascript:void(0);">7</a></li>
                                            <li><a href="javascript:void(0);">8</a></li>
                                            <li><a href="javascript:void(0);">9</a></li>
                                            <li><a href="javascript:void(0);">10</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>