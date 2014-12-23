<?php /* Smarty version Smarty-3.1.20, created on 2014-12-13 13:53:00
         compiled from "/Users/aaron/Development/php/wl_mvc_cms/app/views/index/show.html" */ ?>
<?php /*%%SmartyHeaderCode:184829711548bd0ca5fa0f7-16792758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0a47e35c89bb049395d9e4dd63ae22207853d7' => 
    array (
      0 => '/Users/aaron/Development/php/wl_mvc_cms/app/views/index/show.html',
      1 => 1418449977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184829711548bd0ca5fa0f7-16792758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_548bd0ca65e674_60431995',
  'variables' => 
  array (
    'assets' => 0,
    'article' => 0,
    'comm' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548bd0ca65e674_60431995')) {function content_548bd0ca65e674_60431995($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
            <div class="blog-desc">武汉长乐教育PHP培训</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="">日志首页</a></li>
                <li><a href="">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="article-top">
                <div class="prev-article"><a href="#">上一篇博文</a></div>
                <div class="next-article"><a href="#">上一篇博文</a></div>
            </div>
            <div class="textbox-title">
                <h4>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/Images/icon_ctb.gif" width="11" height="11" border="0"  align="absmiddle">
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                </h4>
                <div class="textbox-label">
                    [<span style="color:gray;font-weight:normal"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
 发表在 <a href="#">新闻</span>  ]
                </div>
            </div>
            <div class="textbox-content">
                <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

            </div>

            <div class="textbox-bottom"> <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/cm_t_ArtRank2.gif" width="12" height="12" border="0"  align=""> <a href="#reply">我有话要说</a></div>
            <div class="textbox-urls" align="right"></div>
            <div class="no-comment-box"> [ 管理：<a href="__URL__/edit/id/{$vo.id}" target="_blank">编辑日志</a> <a href="#">删除日志</a> ]</div>
            <div id="comments">

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <div class="commentbox">
                    <a ></a> <div class="commentbox-title" > <a><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a> 发表的评论 <span style="color:gray">[ 2014-9-11 15:20:20 ]</span>
                    <a href="javascript:delComment({$comment.id})">删除评论</a></div>
                    <div class="commentbox-content"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
                </div>
                <?php } ?>


            </div>
            <a name="reply"></a>
            <div id="comment">
                <div id="result" class="result none"></div>
                <form method="post" id="form1" >
                    <table cellpadding=3 cellspacing=3 width="450px">
                        <tr>
                            <td class="tRight tTop"></td>
                            <td class="tLeft">用户名：<input type="text" namE="author" class="text"></td>
                        </tr>
                        <tr>
                            <td class="tRight tTop"></td>
                            <td class="tLeft"><html:editor type="ubb"  id="editor" width="450px" height="185px" name="content"></html:editor></td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td class="center">
                                <input type="hidden" name="ajax" value="1">
                                <input type="hidden" name="module" value="Blog">
                                <textarea cols="70" rows="6"></textarea>
                                <br />
                                <div class="fLeft hMargin">
                                    <input type="submit" value="发表评论" class="submit small">
                                </div>
                            </TD>
                        </tr>
                    </TABLE>
                </form>
            </div>
        </div>

    </div>
    <div id="sidebar" class="sidebar">
        <div id="innerSidebar">
            <div id="panelSearch" class="panel">
                <div id="panelStats" class="panel">
                    <h5>统计数据</h5>
                    <div class="panel-content">
                        日志总数：<span style="color:#CC9933">12</span><br />
                        阅读总数：<span style="color:#6699FF">30</span><br />
                        评论总数：<span style="color:#FF9900">50</span><br />
                    </div>
                </div>
                <h5 >日志分类 </h5>
                <div class="panel-content">
                    <ul id="category">
                        <li>
                            <div class="fLeft" >
                                <input TYPE="text" id="categoryName" class="text" NAME="name">
                            </div>
                            <input TYPE="button" value="增 加" class="submit hMargin small">
                            <br style="clear:both;float:auto"/>
                        </li>
                        <volist name="category" id="vo">
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
                                <a href="#">新闻</a>
                                <span>(33)</span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/del.gif" style="cursor:pointer" width="20" height="20" border="0" alt="" >
                            </li>
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
                                <a href="#">娱乐</a>
                                <span>(33)</span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/del.gif" style="cursor:pointer" width="20" height="20" border="0" alt="" >
                            </li>
                        </volist>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新日志</h5>
                <div class="panel-content">
                    <ul>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/icon_ctb.gif" width="11" height="11" border="0" alt="" align="absmiddle"/>
                            <a href="#" title="学PHP真有趣">学PHP真有趣</a>
                            <sup style="color:silver;font-size:12px">
                                [<span style="color:#3366CC">20<!-- 阅读数 --></span> |<span style="color:#FF6600"> 15<!-- 评论数 --></span>]
                            </sup>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新评论</h5>
                <div class="panel-content">
                    <ul>
                        <volist id="vo" name="lastComments">
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/Comment.gif" width="9" height="9" border="0" alt="" align="absmiddle">
                                <a href="#"> <span style="color:#3366CC">Aaron</span></a>：
                                <a href="#" title="">您的博文写得好好呢！</a>
                        </volist>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html><?php }} ?>
