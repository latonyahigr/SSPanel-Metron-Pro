<?php
/* Smarty version 3.1.48, created on 2023-06-25 13:52:35
  from 'D:\XProject\SSPanel\resources\views\metron\user\help\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497d623c87750_88062860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de226458281773a4efb8d6cf9e92c3ec91a55d1c' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\help\\head.tpl',
      1 => 1687672352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
  ),
),false)) {
function content_6497d623c87750_88062860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>下载和教程 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/client/metron-icon.css" rel="stylesheet" type="text/css" />
        <style>
            .os-card {
                border: none;
                border-radius: 3px !important;
                cursor: pointer;
                color: #ffffff;
                padding: 40px;
                position: relative;
                overflow: hidden;
            }
            .os-card span{
                font-size: 120px;
            }

            .os-card h4{
                font-size: 32px;
                line-height: 1;
                color: #fff;
            }
            .os-card .card-description{
                margin-top: 5px;
                font-size: 16px;
            }
            .Windows-card{
                background-image: linear-gradient(to bottom, #0178d7, #2FA1E6) !important;
                box-shadow: 0 2px 6px #2FA1E6ad;
            }
            .card-icon{
                position: absolute;
                right: -30px;
                top: -15px;
                color: #8c98f3
            }
            .Windows-card span {
                color: #2FA1E6;
            }
            .Android-card {
                background-image: linear-gradient(to bottom, #6AB344, #98DC47) !important;
                box-shadow: 0 2px 6px #98DC47ad;
            }
            .Android-card span {
                color: #98DC47;
                font-size: 90px;
            }
            .iOS-card {
                background-image: linear-gradient(to bottom, black, #363636) !important;
                box-shadow: 0 2px 6px #36363683;
            }
            .iOS-card span {
                color: #363636;
            }
            .Mac-card {
                background-image: linear-gradient(to top, #b2b6bc, #848484) !important;
                box-shadow: 0 2px 6px #b2b6bc83;
            }
            .Mac-card span {
                color: #b2b6bc;
                font-size: 90px;
            }
            .Linux-card {
                background-image: linear-gradient(to bottom, #ffa425, #fdbe67) !important;
                box-shadow: 0 2px 6px #ffb349ad;
            }
            .Linux-card span {
                color: #fdbe67;
            }
        </style>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <?php $_smarty_tpl->_subTemplateRender('file:include/global/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-2">
                                    <div class="d-flex flex-column">
                                        <h2 class="text-white font-weight-bold my-2 mr-5">下载和教程</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">

<?php }
}
