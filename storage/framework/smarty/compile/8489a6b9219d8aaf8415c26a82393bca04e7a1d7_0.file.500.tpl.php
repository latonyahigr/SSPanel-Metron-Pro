<?php
/* Smarty version 3.1.48, created on 2023-06-25 00:03:20
  from 'D:\XProject\SSPanel\resources\views\metron\500.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649713c81d89a4_64939770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8489a6b9219d8aaf8415c26a82393bca04e7a1d7' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\500.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649713c81d89a4_64939770 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8"/>
        <title>发生错误 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/fonts.css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/pages/error/error-6.css?v=7.0.3" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="/favicon.ico"/>
</head>
    <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >
        <div class="d-flex flex-column flex-root">
            <div class="error error-6 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/error/bg6.jpg);">
                <div class="d-flex flex-column flex-row-fluid text-center">
                    <h1 class="error-title font-weight-boldest text-white mb-12" style="margin-top: 12rem;">500 错误</h1>
                    <p class="display-4 font-weight-bold text-white">
                        服务器似乎崩溃了~<br/>
                        如果一直出现此错误<br/>
                        可尝试发送工单联系客服
                    </p>
                    <div>
                        <a href="/user" class="btn btn-light">返回主页</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
}
