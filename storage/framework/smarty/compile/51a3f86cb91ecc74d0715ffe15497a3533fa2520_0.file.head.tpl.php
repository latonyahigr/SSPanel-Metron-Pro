<?php
/* Smarty version 3.1.48, created on 2023-07-02 19:32:53
  from 'D:\XProject\SSPanel\resources\views\metron\include\global\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64a160657b4cc3_75953094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a3f86cb91ecc74d0715ffe15497a3533fa2520' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\global\\head.tpl',
      1 => 1688284934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a160657b4cc3_75953094 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="UTF-8" />
<meta name="renderer" content="webkit" />
<meta name="description" content="Updates and statistics" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no,email=no" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/fonts.css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
<?php if ($_smarty_tpl->tpl_vars['theme_style']->value === 'dark') {?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/dark/plugins.dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/dark/giatun.dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/dark/style.dark.css" rel="stylesheet" type="text/css" />
<?php } else { ?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/white/plugins.white.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/white/giatun.white.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/style/white/style.white.css" rel="stylesheet" type="text/css" />
<?php }?>
<style>
.header-logo-mobile{
    display: inline-block;
    width: 100%;
    text-align: center;
    height: 60px;
    line-height: 60px;
    display:none;
}
.header-logo-mobile a{
    display: inline-block;
    width: 100%;
    text-align: center;
    height: 60px;
    line-height: 60px;
    color:#000;
}
.header-logo-mobile a h2{
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 700;
    color: #000;
}
.menu-nav{
    padding-top:0 !important
}
.menu-nav li.menu-header{
    padding: 3px 15px;
    color: #a1a8ae;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    font-weight: 600;
    display: none;
}
.menu-link{
    position: relative;
    display: flex;
    align-items: center !important;
    height: 50px;
    padding: 0 20px;
    width: 100%;
    letter-spacing: .3px;
    color: #78828a;
    text-decoration: none;
}
.menu-text{
    margin-top: 3px;
    font-size: 14px;
}
.menu-text strong{
    font-weight: unset;
}
.menu-link i{
   display:none;
    width: 28px;
    margin-right: 20px;
    text-align: center;
    font-size: 13px;
}
.header-menu .menu-nav > .menu-item .menu-link .menu-icon{
   display:none
}
@media screen and (max-width:600px){
  .menu-link i{
    display:inline-block;
  }
  .header-menu .menu-nav > .menu-item .menu-link .menu-icon{
   display: flex
  }
  .header-logo-mobile{
    display:block
  }
    .menu-nav li.menu-header{
        display: block;
    }
}

</style>
<link href="/favicon.ico" rel="shortcut icon" />
</head>
<body id="kt_body" <?php if ($_smarty_tpl->tpl_vars['theme_style']->value !== 'dark') {?>style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['metron']->value['user_background_top'];?>
)"<?php }?> class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
<div id="kt_header_mobile" class="header-mobile">
    <!--开始::手机端Logo
    <a href="/user">
        <img alt="Logo" src="logo-letter-1.png" class="logo-default max-h-30px" />
    </a>-->
        <h1 class="logo-default title-3d">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
        </h1>
    <div class="d-flex align-items-center">
        <div class="dropdown" style="align-items: center">
            <ul class="navbar-nav navbar-right">

                <li class="dropdown" style="align-items: center">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user text-white" aria-expanded="false">
                        <img alt="image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
" class="rounded-circle mr-1" width="30">

                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/user/setting/safe" class="dropdown-item has-icon">
                            <i class="fas fa-user mr-4" style="color: #000000"></i> 我的账号
                        </a>
                        <a href="/user/code" class="dropdown-item has-icon">
                            <i class="fas fa-wallet mr-4" style="color: #000000"></i> 我的钱包
                        </a>
                        <a href="/user/setting/invite" class="dropdown-item has-icon">
                            <i class="fas fa-laugh-squint mr-4" style="color: #000000"></i> 邀请注册
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/user/logout" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt mr-4" style="color: #000000"></i> 退出登录
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

        <!--结束::手机端Logo-->

</div>
<?php }
}
