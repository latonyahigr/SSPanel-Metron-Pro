<?php
/* Smarty version 3.1.48, created on 2023-07-04 13:32:41
  from 'D:\XProject\SSPanel\resources\views\metron\user\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64a3aef99b79d2_45134885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a066affc2052a2afed6fb90c4b320328c952c20' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\index.tpl',
      1 => 1688448756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/index/client.tpl' => 1,
    'file:include/index/sub_button.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
    'file:include/global/import_sublink.tpl' => 1,
    'file:include/index/pop.tpl' => 1,
  ),
),false)) {
function content_64a3aef99b79d2_45134885 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>用户中心 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/client/metron-icon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css"/>
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
                                    <h2 class="text-white font-weight-bold my-2 mr-5">用户中心</h2>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                                    <a href="javascript:;"
                                       data-class="<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
"
                                       class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['btn_subheader'];?>
 font-weight-bold py-3 px-6"
                                       id="checkin" onclick="index.checkin();">每日签到</a>
                                <?php } else { ?>
                                    <a href="javascript:;"
                                       class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2 disabled"
                                       disabled="disabled">已签到</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->class != -1) {?>
                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <div id="index-alert">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 col-xl-3 ">
                                        <div class="card card-custom mb-8 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash1']['bg'];?>
 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body pt-6 pl-4 pb-0">
                                                <div class="d-flex pt-4 pl-4 pr-4 pb-0">
                                                    <span class="svg-icon svg-icon-4x <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash1']['svg'];?>
">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1"
                                                             class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                      fill="#000000" fill-rule="nonzero"
                                                                      opacity="0.3"></path>
                                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                      fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="d-flex flex-column ml-3 mr-5">
                                                        <div class="font-size-h4 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['text'];?>
 mb-2">
                                                            <strong><?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                                                                    <span class="counter"><?php echo $_smarty_tpl->tpl_vars['class_left_days']->value;?>
</span>
                                                                    天<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class <= 0) {?>
                                                                    <span class="counter">已过期</span>
                                                                <?php } else { ?>未知<?php }?></strong></div>
                                                        <p class="text-dark-50">会员时长</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 pl-5 pr-3 pb-1">
                                                <p class="text-dark-50">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['user_level'], 'user_level_name', false, 'user_level_class');
$_smarty_tpl->tpl_vars['user_level_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_level_class']->value => $_smarty_tpl->tpl_vars['user_level_name']->value) {
$_smarty_tpl->tpl_vars['user_level_name']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class == $_smarty_tpl->tpl_vars['user_level_class']->value) {
echo $_smarty_tpl->tpl_vars['user_level_name']->value;
}?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    :
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                                                        <?php echo substr($_smarty_tpl->tpl_vars['user']->value->class_expire,0,10);?>
 到期
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class == 0) {?>
                                                        已过期
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class == -1) {?>
                                                        请购买套餐激活账号
                                                    <?php } else { ?>永久<?php }?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-xl-3 ">
                                        <div class="card card-custom mb-8 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash2']['bg'];?>
 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body pt-6 pl-4 pb-0">
                                                <div class="d-flex pt-4 pl-4 pr-4 pb-0">
                                                    <span class="svg-icon svg-icon-4x <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash2']['svg'];?>
">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1"
                                                             class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                                                      fill="#000000" fill-rule="nonzero"
                                                                      transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
                                                                <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                                                      fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="d-flex flex-column ml-3 mr-5">
                                                        <div class="font-size-h4 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['text'];?>
 mb-2">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTrafficGB();?>
GB</strong></div>
                                                        <p class="text-dark-50">剩余流量</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 pl-5 pr-3 pb-1">
                                                <p class="text-dark-50">已用流量：<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTrafficGB();?>
GB
                                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['advanceResetFlow'] === true) {?>
                                                        <span id="advance_reset_flow_onclick"
                                                              class="label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash2']['btn'];?>
 label-inline font-weight-lighter ml-1 mr-2 cursor_onclick"
                                                              onclick="index.advanceResetFlow('get');">提前重置</span>
                                                    <?php }?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-xl-3 ">
                                        <div class="card card-custom mb-8 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash3']['bg'];?>
 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body pt-6 pl-4 pb-0">
                                                <div class="d-flex pt-4 pl-4 pr-4 pb-0">
                                                    <span class="svg-icon svg-icon-4x <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash3']['svg'];?>
">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                                      fill="#000000" opacity="0.3"/>
                                                                <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                                      fill="#000000" fill-rule="nonzero"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="d-flex flex-column ml-3 mr-5">
                                                        <div class="font-size-h4 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['text'];?>
 mb-2">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>

                                                                / <?php if ($_smarty_tpl->tpl_vars['user']->value->node_connector == 0) {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value->node_connector;
}?></strong>
                                                        </div>
                                                        <p class="text-dark-50">在线设备</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 pl-5 pr-3 pb-1">
                                                <p class="text-dark-50">
                                                    上次使用: <?php if ($_smarty_tpl->tpl_vars['user']->value->lastSsTime() == '从未使用喵') {?>从未使用过<?php } else {
echo substr($_smarty_tpl->tpl_vars['user']->value->lastSsTime(),5);
}?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-xl-3 ">
                                        <div class="card card-custom mb-8 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash4']['bg'];?>
 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body pt-6 pl-4 pb-0">
                                                <div class="d-flex pt-4 pl-4 pr-4 pb-0">
                                                    <span class="svg-icon svg-icon-4x <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['dash4']['svg'];?>
">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5"
                                                                        r="1.5"/>
                                                                <rect fill="#000000" opacity="0.3"
                                                                      transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                                      x="3" y="3" width="18" height="7" rx="1"/>
                                                                <path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                                      fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="d-flex flex-column ml-3 mr-5">
                                                        <div class="font-size-h4 <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['index']['text'];?>
 mb-2">
                                                            <strong>¥ <?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
</strong></div>
                                                        <p class="text-dark-50">钱包余额</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 pl-5 pr-3 pb-1">
                                                <p class="text-dark-50">返利累计: ¥ <?php echo $_smarty_tpl->tpl_vars['paybacks_sum']->value;?>
</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- 客户端下载 -->
                                        <!-- <?php $_smarty_tpl->_subTemplateRender('file:include/index/client.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> -->
                                        <!-- 公告-->
                                        <div class="card card-custom bgi-no-repeat gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
"
                                             <?php if ($_smarty_tpl->tpl_vars['theme_style']->value !== 'dark') {?>style="background-position: right top; background-size: 30% auto; background-image: url(<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/svg/shapes/abstract-2.svg)" <?php }?>>
                                            <div class="card-header border-0 pt-5">
                                                <div class="card-title font-weight-bolder">
                                                    <div class="card-label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
 font-weight-bold font-size-h3">
                                                        <i class="fas fa-bullhorn icon-md <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
"></i><strong>
                                                            最新公告</strong>
                                                        <div class="font-size-sm text-muted mt-2">
                                                            更新日期：<?php echo $_smarty_tpl->tpl_vars['ann']->value->date;?>
</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-dark-50 font-weight-normal font-size-lg-h4 font-size-h5"><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <!-- 订阅地址 -->
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header border-0 pt-5">
                                                <div class="card-title font-weight-bolder">
                                                    <div class="card-label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
 font-weight-bold font-size-h3">
                                                        <i class="fa fa-magic icon-md <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
"></i><strong>
                                                            订阅地址</strong>
                                                        <div class="font-size-sm text-muted mt-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <?php $_smarty_tpl->_subTemplateRender('file:include/index/sub_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 节点流量统计 -->
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
"
                                             id="index-NodeTrafficChart-card1">
                                            <div class="card-header border-0 pt-5">
                                                <div class="card-title font-weight-bolder">
                                                    <div class="card-label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
 font-weight-bold font-size-h3">
                                                        <i class="fa fa-fill-drip icon-md <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
"></i><strong>
                                                            流量统计</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                                                                <div id="NodeTrafficChartShape" style="height: 320px;max-height: 320px">
                                                </div>

                                                <div id="NodeTrafficChart_null" class="text-center p-10"
                                                     style="display: none;">
                                                    <h3 class="display-5 text-muted">暂无记录</h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <div id="index-alert">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="animated tada mt-5 text-center" style="color:#191d21;font-size: 2rem;">👋
                                                    Hi, <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</h3>
                                                <h5 class="mb-5 mt-2 text-center"
                                                    style="color:#191d21d5">按照下面步骤开始使用吧!</h5>
                                                <div class="row mt-4">
                                                    <div class="col-12 col-lg-8 offset-lg-2">
                                                        <div class="wizard-steps">
                                                            <div class="wizard-step wizard-step-active"
                                                                 onclick="location='/user/shop'">
                                                                <div class="wizard-step-icon">
                                                                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                                                                </div>
                                                                <div class="wizard-step-label">
                                                                    前往商店购买会员订阅计划或免费试用
                                                                </div>
                                                            </div>
                                                            <div class="wizard-step wizard-step-active"
                                                                 onclick="location='/user/help'">
                                                                <div class="wizard-step-icon">
                                                                    <i class="fas fa-download" style="color: #fff;"></i>
                                                                </div>
                                                                <div class="wizard-step-label">
                                                                    下载客户端并按照教程安装
                                                                </div>
                                                            </div>
                                                            <div class="wizard-step wizard-step-success">
                                                                <div class="wizard-step-icon">
                                                                    <i class="fas fa-grin-squint" style="color: #fff;"></i>
                                                                </div>
                                                                <div class="wizard-step-label">
                                                                    开开心心看世界
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:include/global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="qrcode-sublink-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="qrcode-sublink-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"
                        id="qrcode-sublink-modal-title"><strong>扫码二维码添加订阅</strong></h4>
                </div>
                <div class="modal-body" id="qrcode-sublink-content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold"
                            data-dismiss="modal">关闭
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['metron']->value['advanceResetFlow'] === true) {?>
        <div class="modal fade" id="advanceResetFlow-modal" data-backdrop="static" tabindex="-1" role="dialog"
             aria-labelledby="advanceResetFlow-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg">
                    <div class="modal-header">
                        <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"
                            id="advanceResetFlow-modal-title"><strong>流量重置确认</strong></h4>
                    </div>
                    <div class="modal-body">
                        <label class="row col-12 col-form-label kt-font-boldest">您的套餐重置日期为：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->valid_use_loop();?>

                                00:00 </code> </label>
                        <label class="row col-12 col-form-label kt-font-boldest" id="ResetFlow_day"></label>
                        <div class="kt-divider mt-4 mb-4"><span></span><span>根据距离下次重置的日期按比例为您重置流量</span><span></span>
                        </div>
                        <label class="row col-12 col-form-label kt-font-boldest" id="ResetFlow_sub_time_day"></label>
                        <label class="row col-12 col-form-label kt-font-boldest" id="ResetFlow_add_flow_gib"></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                                id="advanceResetFlow-modal-ok" onclick="index.advanceResetFlow('set');">确定
                        </button>
                        <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold"
                                data-dismiss="modal" onclick="">取消
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="modal fade" id="userClassExpire" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="qrcode-sublink-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"
                        id="qrcode-sublink-modal-title"><strong>账号等级过期</strong></h4>
                </div>
                <div class="modal-body">
                    您套餐已过期或还未购买套餐，请先购买套餐后使用
                </div>
                <div class="modal-footer">
                    <a href="/user/shop" class="btn btn-primary">前往购买</a>
                    <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold"
                            data-dismiss="modal">关闭
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/global/import_sublink.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_pop'] === true) {?>
        <!-- 重要公告 -->
        <?php $_smarty_tpl->_subTemplateRender('file:include/index/pop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
> mt.pop('<?php echo $_smarty_tpl->tpl_vars['metron']->value['pop_time'];?>
') <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->class == 0 && $_smarty_tpl->tpl_vars['user']->value->class_expire < 1) {?>
        $('#userClassExpire').modal()
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->class > 0 && substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) > 0 && ((substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) <= 5 && substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),-2) == 'GB') || (substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),0,-2) <= 1024 && substr($_smarty_tpl->tpl_vars['user']->value->unusedTraffic(),-2) == 'MB'))) {?>
        $('#index-alert').append('\
                <div class="alert alert-custom alert-white alert-shadow fade mb-8 show <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" role="alert">\
                    <div class="alert-icon">\
                        <i class="flaticon-warning"></i>\
                    </div>\
                    <div class="alert-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">您的流量已不足 5GB, 请注意使用! </font></font></div>\
                </div>\
            ');
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->class === -1) {?>
        $('#index-alert').append('\
                <div class="alert alert-custom alert-danger alert-shadow fade mb-8 show <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" role="alert">\
                    <div class="alert-icon">\
                        <i class="flaticon-warning"></i>\
                    </div>\
                    <div class="alert-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">您的账号还未激活, 请前往商店购买套餐进行激活账号! </font></font></div>\
                </div>\
            ');
        <?php }?>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/canvasjs.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        window.onload = function () {

            CanvasJS.addColorSet("color",
                [//colorSet Array
                    "#dce6fb",
                    "#abc6ff",
                    "#6777ef",
                ]);

            var chart = new CanvasJS.Chart("NodeTrafficChartShape", {
                colorSet: "color",
                animationEnabled: true,
                title:"",

                legend:{
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                data: [{
                    type: "doughnut",
                    startAngle: 90,
                    innerRadius: 90,
                    indexLabelFontSize: 14,
                    showInLegend: true,
                    dataPoints: [
                        { y: <?php echo $_smarty_tpl->tpl_vars['user']->value->usedTrafficGB();?>
, name:"已用(GB)", legendText: "已用:<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTrafficGB();?>
GB",labelIndex:"<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTrafficGB();?>
GB"},
                        { y: <?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTrafficGB();?>
, name:"今日已用(GB)", legendText: "今日已用:<?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTrafficGB();?>
GB", labelIndex:"<?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTrafficGB();?>
GB"},
                        { y: <?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTrafficGB();?>
, name:"剩余(GB)", legendText: "剩余:<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTrafficGB();?>
GB", labelIndex: "<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTrafficGB();?>
GB"},
                    ]
                }]
            });
            chart.render();
        }
    <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
