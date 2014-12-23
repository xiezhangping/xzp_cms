<?php /* Smarty version Smarty-3.1.20, created on 2014-12-23 02:35:44
         compiled from "E:\XAMPP\htdocs\content_manage_system\app\views\user\user.html" */ ?>
<?php /*%%SmartyHeaderCode:10985497e1941f45b0-41349801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '083be5e5a1f44cfca932861f4b2dd3008c3126d6' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\content_manage_system\\app\\views\\user\\user.html',
      1 => 1419302142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10985497e1941f45b0-41349801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5497e194326755_16346408',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497e194326755_16346408')) {function content_5497e194326755_16346408($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>内容管理系统</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app/assets/bootstrap/css/bootstrap.min.css">
    <style>
        .container-fluid {
            background: #1c2021;
        }

        .form-horizontal {
            padding-bottom: 200px;
        }
        #pict{
            padding-top:30px ;
            margin-top: 120px;
            border-top: 2px solid #8e9a9f;
        }
        .form-horizontal{
            padding-top:65px ;
        }
        .form-horizontal .control-label.btn-info{
            padding: 6px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<div class=" container-fluid">
    <div class="rows">
        <div class="col-md-12 ">
            <div class="col-md-4 col-md-offset-4" id="pict" style="text-align: center;">
                <h3>
                    <img src="app/assets/images/logo.png" alt="Logo">
                </h3>
             </div>
    </div>
    <div class="rows">
        <div class="col-md-12 ct">
        <div class="col-md-4 col-md-offset-4" >
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-xs-2 control-label btn-info "><span class="glyphicon glyphicon-user"></span></label>

                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="inputText" placeholder="用户名">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="inputPassword3" class="col-xs-2 control-label btn-info"><span class="glyphicon glyphicon-lock"></span></label>

                    <div class="col-xs-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-xs-2 control-label btn-info"><span class="glyphicon glyphicon-user"></span></label>

                    <div class="col-xs-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="请输入验证码">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-info">Login</button>
                    </div>
                </div>

            </form>

        </div>
        </div>
    </div>
</div>

<script src="app/assets/js/jquery-2.1.3.min.js"></script>
<script src="app/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
