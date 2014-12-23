<?php /* Smarty version Smarty-3.1.20, created on 2014-12-22 08:33:57
         compiled from "E:\XAMPP\htdocs\content_manage_system\app\views\admin\friendly_link.html" */ ?>
<?php /*%%SmartyHeaderCode:60245497d4639faff1-01914360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2d044ce9e74df26bdb423e1b2f799b2ecb54d82' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\content_manage_system\\app\\views\\admin\\friendly_link.html',
      1 => 1419237231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60245497d4639faff1-01914360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5497d463ac28e6_10041907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497d463ac28e6_10041907')) {function content_5497d463ac28e6_10041907($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>友情链接管理</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app/assets/bootstrap/css/bootstrap.min.css">
    <style>
        /*.container-fluid {*/
        /*background: #6d5c7d;*/
        /*}*/

        .panel-body ul {
            list-style: none;
        }

        .panel-body ul li a {
            display: block;
            padding: 6px 0;

        }
        .panel-body ul li a:hover {
            background:#3e3d40;
            color:#ede9f2;
        }

        .panel-title > a {
            display: block;
        }
        .well{
            border-bottom: 3px solid #2E363F;
        }
        /*.imformation {*/
        /*border-bottom: 3px solid #2E363F;*/
        /*}*/

        .system_imfomation {
            margin-top: 50px;
        }
        .butt{
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container-fluid">

    <!-- 顶部导航 -->
    <nav class="navbar navbar-default alert-success " role="navigation">
        <div class="container-fluid ">
            <div class="navbar-header ">
                <a class="navbar-brand" href="#">内容管理系统</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-user"></span> 尊敬的Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> 密码修改</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span> 安全退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 顶部导航 end -->

    <!-- 正文 begin -->
    <div class="rows">
        <div class="col-md-2">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                               aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-edit"></span> 内容管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="">文章列表</a></li>
                                <li><a href="">栏目管理</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-file"></span> 文件管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                               aria-expanded="false" aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-star"></span> 友情链接管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-cloud"></span> 留言管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-user"></span> 学生和课程
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-cog"></span> 系统设置
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-refresh"></span> 清除缓存
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed">
                                首页
                            </a>
                        </h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-10">
            <div class="well">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#">友情链接管理</a></li>
                </ol>
                <h2 >我的信息</h2>
                <div class="rows  ">
                    <div class="col-md-1 butt btn-lg">
                        <button type="button" class="btn btn-primary">新增</button>
                    </div>
                    <div class="col-md-1 butt btn-lg">
                        <button type="button" class="btn btn-success">排序</button>
                    </div>
                    <div class="col-md-1 butt btn-lg">
                        <button type="button" class="btn btn-danger">删除</button>
                    </div>
                </div>

                <div>
                    <div class="widget-title">
                    <span class="icon">
                        <div class="checker" id="uniform-title-checkbox"><span class=""><input type="checkbox" id="title-checkbox" name="title-checkbox" style="opacity: 0;"></span></div>
                    </span>
                        <h5>全选</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 正文 end -->
</div>

<script src="app/assets/js/jquery-2.1.3.min.js"></script>
<script src="app/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
