<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:55:51
  from 'D:\XProject\SSPanel\resources\views\metron\user\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64971207c30b51_76248163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc27ef6c9eb0390cc3d17f0e8353f4110b1380cb' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\shop.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/shop/Trial.tpl' => 2,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_64971207c30b51_76248163 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>套餐商店 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">套餐商店</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:;" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['btn_subheader'];?>
 font-weight-bold py-3 px-6" data-toggle="modal" data-target="#traffic_package_modal">购买流量包</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">

                                <div class="row">

                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['shop_pop_enable'] === true) {?>
                                    <div class="col-12">
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body mt-4">
                                                <?php echo $_smarty_tpl->tpl_vars['metron']->value['shop_pop_info'];?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>

                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['metron']->value['shop_activity_buy_time'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['metron']->value['shop_activity_true'] === true && strtotime($_prefixVariable1) > time()) {?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                                        <div class="card card-custom <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_head'];?>
 gutter-b card-stretch <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" style="border-bottom-right-radius: 1.5rem;border-bottom-left-radius: 1.5rem;">
                                            <div class="card-header border-0" style="min-height: 50px;">
                                            </div>
                                            <div class="card-body d-flex flex-column p-0" style="position: relative;">
                                                <div class="" style="height: 100px; min-height: 100px;">
                                                    <h3 class="display-3 text-white text-center"><strong><?php echo $_smarty_tpl->tpl_vars['metron']->value['shop_activity_name'];?>
</strong></h3>
                                                </div>
                                                <div class="card-spacer <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_bg'];?>
 card-rounded flex-grow-1 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                                    <ul class="dashboard-tabs nav nav-pills row nav-primary row-paddingless m-0 p-0" role="tablist">
                                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 ml-1 mr-1 mb-0 cursor_onclick">
                                                            <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center p-1 active" data-toggle="pill" href="#shop-activity">
                                                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">
                                                                    <span id="_t">倒计时：</span>
                                                                    <span id="_d"> </span>
                                                                    <span id="_h"> </span>
                                                                    <span id="_m"> </span>
                                                                    <span id="_s"> </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content m-0 p-0">
                                                        <div class="tab-pane active show" id="shop-activity" role="tabpanel">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['shop']->value->id !== $_smarty_tpl->tpl_vars['metron']->value['shop_activity_id']) {
continue 1;
}?>
                                                            <div class="row">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="display-3 text-primary font-weight-bolder"><small><i class="fa fa-yen-sign text-primary"></i></small> <strong><?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
</strong></div>
                                                                </div>
                                                            </div>
                                                            <?php $_smarty_tpl->_assignInScope('shopLt', $_smarty_tpl->tpl_vars['shop']->value->limitamount());?>
                                                            <?php $_smarty_tpl->_assignInScope('shopBi', $_smarty_tpl->tpl_vars['shop']->value->limitamount('bi'));?>
                                                            <?php $_smarty_tpl->_assignInScope('shopCan', $_smarty_tpl->tpl_vars['shop']->value->limitamount('can'));?>
                                                            <div class="d-flex flex-column w-100 pl-2 pt-3">
                                                                <span class="font-size-sm text-muted font-weight-bold pb-3">
                                                                    <?php if ($_smarty_tpl->tpl_vars['shopLt']->value == 0) {?>此商品无限制购买<?php } else { ?><span class="<?php if ($_smarty_tpl->tpl_vars['shopBi']->value < 5) {?>text-danger<?php } else { ?>text-primary<?php }?>"><?php if ($_smarty_tpl->tpl_vars['shopCan']->value === 0) {?>此商品已售空, 可尝试购买其它时长<?php } else { ?>此商品限购剩余 <?php echo $_smarty_tpl->tpl_vars['shopCan']->value;?>
 份<?php }
}?></span>
                                                                </span>
                                                                <div class="progress progress-md w-100">
                                                                    <div class="progress-bar progress-bar-striped <?php if ($_smarty_tpl->tpl_vars['shopBi']->value < 5) {?>bg-danger<?php } else { ?>bg-primary<?php }?>" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['shopBi']->value;?>
%;" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['shopBi']->value;?>
" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">会员等级</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['metron']->value['user_level'][$_smarty_tpl->tpl_vars['shop']->value->user_class()];?>
</div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">等级时长</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
 天</div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">添加流量</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
 GB</div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">重置周期</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php if ($_smarty_tpl->tpl_vars['shop']->value->reset() != 0) {
echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>
天重置<?php } else { ?>到期清零<?php }?></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">同时在线</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->connector();
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>
个设备<?php }?></div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">峰值速率</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>
Mbps<?php }?></div>
                                                                </div>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['shop_activity_text'] !== '') {?>
                                                            <div class="row text-center">
                                                                <div class="col pl-6 pt-4 pb-0">
                                                                    <div class="font-size-h4 font-weight-bolder <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['metron']->value['shop_activity_text'];?>
</div>
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value->content_extra(), 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                            <div class="row text-center">
                                                                <div class="col pl-6 pt-4 pb-0">
                                                                    <?php if ($_smarty_tpl->tpl_vars['service']->value[0] === 'true') {?>
                                                                    <div class="font-size-h4 font-weight-bolder <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value[1];?>
</div>
                                                                    <?php } else { ?>
                                                                    <div class="font-size-h4 font-weight-bolder text-dark-50"><del><?php echo $_smarty_tpl->tpl_vars['service']->value[1];?>
</del></div>
                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <div class="pt-8">
                                                                <?php if ($_smarty_tpl->tpl_vars['shopLt']->value != 0 && $_smarty_tpl->tpl_vars['shopCan']->value <= 0) {?>
                                                                <button class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_btn'];?>
 btn-block btn-pill" href="javascript:void(0);" type="button" onClick="shop.metronBuy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
);" id="buytext-<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
" disabled="true">此商品已达到购买上限</button>
                                                                <?php } else { ?>
                                                                <button class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_btn'];?>
 btn-block btn-pill" href="javascript:void(0);" type="button" onClick="shop.metronBuy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
);" id="buytext-<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
">购买</button>
                                                                <?php }?>
                                                            </div>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 414px; height: 419px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                    <?php echo '<script'; ?>
> var shop_activity_time = "<?php echo $_smarty_tpl->tpl_vars['metron']->value['shop_activity_buy_time'];?>
"; <?php echo '</script'; ?>
>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['shop_Experience_true'] === true && $_smarty_tpl->tpl_vars['user']->value->class === -1 && $_smarty_tpl->tpl_vars['user']->value->lastSsTime() == '从未使用喵' && $_smarty_tpl->tpl_vars['metron']->value['shop_Experience_pos'] === 'top') {?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:include/shop/Trial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php }?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['shop_plan'], 'shop_info_time_id', false, 'shop_class_name');
$_smarty_tpl->tpl_vars['shop_info_time_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_class_name']->value => $_smarty_tpl->tpl_vars['shop_info_time_id']->value) {
$_smarty_tpl->tpl_vars['shop_info_time_id']->do_else = false;
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop_info_time_id']->value, 'shop_time_id', false, 'shop_info');
$_smarty_tpl->tpl_vars['shop_time_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_info']->value => $_smarty_tpl->tpl_vars['shop_time_id']->value) {
$_smarty_tpl->tpl_vars['shop_time_id']->do_else = false;
?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                                        <div class="card card-custom <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_head'];?>
 gutter-b card-stretch <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" style="border-bottom-right-radius: 1.5rem;border-bottom-left-radius: 1.5rem;">
                                            <div class="card-header border-0" style="min-height: 50px;">
                                            </div>
                                            <div class="card-body d-flex flex-column p-0" style="position: relative;">
                                                <div class="" style="height: 100px; min-height: 100px;">
                                                    <h3 class="display-3 text-white text-center"><strong><?php echo $_smarty_tpl->tpl_vars['shop_class_name']->value;?>
</strong></h3>
                                                </div>
                                                <div class="card-spacer <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_bg'];?>
 card-rounded flex-grow-1 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">

                                                    <ul class="dashboard-tabs nav nav-pills row nav-primary row-paddingless m-0 p-0" role="tablist">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop_time_id']->value, 'shop_id', false, 'shop_time');
$_smarty_tpl->tpl_vars['shop_id']->index = -1;
$_smarty_tpl->tpl_vars['shop_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_time']->value => $_smarty_tpl->tpl_vars['shop_id']->value) {
$_smarty_tpl->tpl_vars['shop_id']->do_else = false;
$_smarty_tpl->tpl_vars['shop_id']->index++;
$__foreach_shop_id_4_saved = $_smarty_tpl->tpl_vars['shop_id'];
?>
                                                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 ml-1 mr-1 mb-0 cursor_onclick">
                                                            <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center p-1 <?php if ($_smarty_tpl->tpl_vars['shop_id']->index === 0) {?> active<?php }?>" data-toggle="pill" href="#tab-shop-<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;?>
">
                                                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center"><?php echo $_smarty_tpl->tpl_vars['shop_time']->value;?>
</span>
                                                            </a>
                                                        </li>
                                                        <?php
$_smarty_tpl->tpl_vars['shop_id'] = $__foreach_shop_id_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </ul>

                                                    <div class="tab-content m-0 p-0">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop_time_id']->value, 'shop_id', false, 'shop_time');
$_smarty_tpl->tpl_vars['shop_id']->index = -1;
$_smarty_tpl->tpl_vars['shop_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_time']->value => $_smarty_tpl->tpl_vars['shop_id']->value) {
$_smarty_tpl->tpl_vars['shop_id']->do_else = false;
$_smarty_tpl->tpl_vars['shop_id']->index++;
$__foreach_shop_id_5_saved = $_smarty_tpl->tpl_vars['shop_id'];
?>
                                                        <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['shop_id']->index === 0) {?> active show<?php }?>" id="tab-shop-<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;?>
" role="tabpanel">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['shop']->value->id !== $_smarty_tpl->tpl_vars['shop_id']->value) {
continue 1;
}?>
                                                            <div class="row">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="display-3 text-primary font-weight-bolder"><small><i class="fa fa-yen-sign text-primary"></i></small> <strong><?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
</strong></div>
                                                                </div>
                                                            </div>
                                                            <?php $_smarty_tpl->_assignInScope('shopLt', $_smarty_tpl->tpl_vars['shop']->value->limitamount());?>
                                                            <?php $_smarty_tpl->_assignInScope('shopBi', $_smarty_tpl->tpl_vars['shop']->value->limitamount('bi'));?>
                                                            <?php $_smarty_tpl->_assignInScope('shopCan', $_smarty_tpl->tpl_vars['shop']->value->limitamount('can'));?>
                                                            <div class="d-flex flex-column w-100 pl-2 pt-3">
                                                                <span class="font-size-sm text-muted font-weight-bold pb-3">
                                                                    <?php if ($_smarty_tpl->tpl_vars['shopLt']->value == 0) {?>此商品无限制购买<?php } else { ?><span class="<?php if ($_smarty_tpl->tpl_vars['shopBi']->value < 5) {?>text-danger<?php } else { ?>text-primary<?php }?>"><?php if ($_smarty_tpl->tpl_vars['shopCan']->value === 0) {?>此商品已售空, 可尝试购买其它时长<?php } else { ?>此商品限购剩余 <?php echo $_smarty_tpl->tpl_vars['shopCan']->value;?>
 份<?php }
}?></span>
                                                                </span>
                                                                <div class="progress progress-md w-100">
                                                                    <div class="progress-bar progress-bar-striped <?php if ($_smarty_tpl->tpl_vars['shopBi']->value < 5) {?>bg-danger<?php } else { ?>bg-primary<?php }?>" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['shopBi']->value;?>
%;" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['shopBi']->value;?>
" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">会员等级</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['metron']->value['user_level'][$_smarty_tpl->tpl_vars['shop']->value->user_class()];?>
</div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">等级时长</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
 天</div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">添加流量</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
 GB</div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">重置周期</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php if ($_smarty_tpl->tpl_vars['shop']->value->reset() != 0) {
echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>
天重置<?php } else { ?>到期清零<?php }?></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
">
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">同时在线</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->connector();
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>
个设备<?php }?></div>
                                                                </div>
                                                                <div class="col pl-6 pt-6 pb-0">
                                                                    <div class="font-size-sm text-muted font-weight-bold">峰值速率</div>
                                                                    <div class="font-size-h4 font-weight-bolder"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>
Mbps<?php }?></div>
                                                                </div>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['shop_info']->value !== '') {?>
                                                            <div class="row text-center">
                                                                <div class="col pl-6 pt-4 pb-0">
                                                                    <div class="font-size-h4 font-weight-bolder <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['shop_info']->value;?>
</div>
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value->content_extra(), 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                            <div class="row text-center">
                                                                <div class="col pl-6 pt-4 pb-0">
                                                                    <?php if ($_smarty_tpl->tpl_vars['service']->value[0] === 'true') {?>
                                                                    <div class="font-size-h4 font-weight-bolder <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_text'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value[1];?>
</div>
                                                                    <?php } else { ?>
                                                                    <div class="font-size-h4 font-weight-bolder text-dark-50"><del><?php echo $_smarty_tpl->tpl_vars['service']->value[1];?>
</del></div>
                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <div class="pt-8">
                                                                <?php if ($_smarty_tpl->tpl_vars['shopLt']->value != 0 && $_smarty_tpl->tpl_vars['shopCan']->value <= 0) {?>
                                                                <button class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_btn'];?>
 btn-block btn-pill" href="javascript:void(0);" type="button" onClick="shop.metronBuy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
);" id="buytext-<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
" disabled="true">此商品已达到购买上限</button>
                                                                <?php } else { ?>
                                                                <button class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shop']['card_btn'];?>
 btn-block btn-pill" href="javascript:void(0);" type="button" onClick="shop.metronBuy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
);" id="buytext-<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
">购买</button>
                                                                <?php }?>
                                                            </div>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                        <?php
$_smarty_tpl->tpl_vars['shop_id'] = $__foreach_shop_id_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                </div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 414px; height: 419px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['shop_Experience_true'] === true && $_smarty_tpl->tpl_vars['user']->value->class === -1 && $_smarty_tpl->tpl_vars['user']->value->lastSsTime() == '从未使用喵' && $_smarty_tpl->tpl_vars['metron']->value['shop_Experience_pos'] === 'bottom') {?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:include/shop/Trial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>

                                </div>

                            </div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:include/global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- modal -->
<div class="modal fade" id="buy_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
" id="exampleModalLongTitle"><strong>订单确认</strong></h4>
            </div>
            <div class="modal-body">
                <label class="row col-12 col-form-label kt-font-boldest" id="shop_name">商品名称：</label>
                <label class="row col-12 col-form-label kt-font-boldest" id="shop_credit" style="display: none">优惠额度：</label>
                <label class="row col-12 col-form-label kt-font-boldest" id="shop_total">套餐金额：</label>
                <label class="row col-12 col-form-label kt-font-boldest" id="shop_stneed">还需支付：</label>
                <label class="row col-12 col-form-label kt-font-boldest kt-padding-b-0" id="autor"><span class="kt-padding-t-5">到期时自动续费：</span>
                <span class="kt-switch kt-switch--sm kt-switch--icon">
                    <label class="kt-padding-0">
                        <input type="checkbox" name="autorenew" id="autorenew">
                        <span></span>
                    </label>
                </span>
                </label>
                <div class="form-group row form-group-marginless" style="display: none" id="shop_payment">
                    <label class="col-lg-12 col-form-label kt-font-boldest">支付方式：</label>
                    <div class="col-lg-12">
                        <ul class="dashboard-tabs nav nav-pills row row-paddingless m-0 p-0" role="tablist" id="pay_the">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['payment_system'] == 'metronpay') {?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_alipay'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_alipay'] != '') {?>
                                <li class="nav-alipay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center active" data-toggle="pill" data-name="pay_alipay">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-alipay icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">支付宝</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_alipay_2'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_alipay_2'] != '') {?>
                                <li class="nav-alipay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_alipay_2">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-alipay icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">支付宝</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_alipay_3'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_alipay_3'] != '') {?>
                                <li class="nav-alipay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_alipay_3">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-alipay icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">支付宝</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_wxpay'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_wxpay'] != '') {?>
                                <li class="nav-wxpay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_wxpay">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-weixin icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">微信支付</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_wxpay_2'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_wxpay_2'] != '') {?>
                                <li class="nav-wxpay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_wxpay_2">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-weixin icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">微信支付</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_wxpay_3'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_wxpay_3'] != '') {?>
                                <li class="nav-wxpay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_wxpay_3">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-weixin icon-2x"></i>
                                    </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">微信支付</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_qqpay'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_qqpay'] != '') {?>
                            <li class="nav-qqpay nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center <?php if (($_smarty_tpl->tpl_vars['metron']->value['pay_alipay'] == 'none' || $_smarty_tpl->tpl_vars['metron']->value['pay_alipay'] == '') && ($_smarty_tpl->tpl_vars['metron']->value['pay_wxpay'] == 'none' || $_smarty_tpl->tpl_vars['metron']->value['pay_wxpay'] == '')) {?>active<?php }?>" data-toggle="pill" data-name="pay_qqpay">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-qq icon-2x"></i>
                                    </span>
                                    <span class="nav-text font-size-lg py-2 font-weight-bold text-center">QQ钱包</span>
                                </a>
                            </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['pay_crypto'] != 'none' && $_smarty_tpl->tpl_vars['metron']->value['pay_crypto'] != '') {?>
                            <li class="nav-crypto nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" data-name="pay_crypto">
                                    <span class="nav-icon py-2 w-auto">
                                        <i class="fab fa-bitcoin icon-2x"></i>
                                    </span>
                                    <span class="nav-text font-size-lg py-2 font-weight-bold text-center">数字货币</span>
                                </a>
                            </li>
                            <?php }?>
                        <?php }?>
                        </ul>
                    </div>
                </div>

                <div class="pt-3" style="display: none" id="input_coupon_code">
                    <div class="input-group input-group-lg input-group-solid" >
                        <input type="text" class="form-control" value="" name="shop_code" placeholder="请输入优惠码" id="coupon"/>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" onclick="shop.couponre('<?php echo $_smarty_tpl->tpl_vars['config']->value['payment_system'];?>
');">确定</button>
                            <button class="btn btn-primary" type="button" onclick="shop.coupon('clear');">取消使用</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="use_coupon_code" onclick="shop.coupon();">使用优惠码</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="order_input" onclick="shop.buyok('<?php echo $_smarty_tpl->tpl_vars['config']->value['payment_system'];?>
');">确定购买</button>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold" data-dismiss="modal" onclick="shop.coupon('clear');">取消</button>
            </div>
        </div>
    </div>
</div>
<!-- 在线充值支付 -->
<div class="modal fade" id="metronpay-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
" id="metronpay-title"><strong>支付确认</strong></h5>
            </div>
            <div class="modal-body kt-padding-t-30">
                <p class="align-center pt-3" id="metronpay-modal-body-url" style="display: none;">点击打开新页面进行支付, 如果长时间未到账请联系客服</p>
                <p id="metronpay-modal-body-qrcode" style="display: none;"></p>
            </div>
            <div class="modal-footer">
                <a id="to-pay" href="##" class="btn btn-primary">前往支付</a>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 流量包 -->
<div class="modal fade" id="traffic_package_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong>购买临时流量叠加包</strong></h4>
            </div>
            <div class="modal-body">
                <code>流量叠加包在您套餐流量重置时会一起清零，请酌情购买</code>
                <div class="pb-3"></div>
                <ul class="dashboard-tabs nav nav-pills row nav-primary row-paddingless m-0 p-0" role="tablist" id="traffic-package">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'traffic_shop');
$_smarty_tpl->tpl_vars['traffic_shop']->index = -1;
$_smarty_tpl->tpl_vars['traffic_shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['traffic_shop']->value) {
$_smarty_tpl->tpl_vars['traffic_shop']->do_else = false;
$_smarty_tpl->tpl_vars['traffic_shop']->index++;
$__foreach_traffic_shop_8_saved = $_smarty_tpl->tpl_vars['traffic_shop'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['traffic_shop']->value->traffic_package() != 0) {?>
                    <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                        <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center <?php if ($_smarty_tpl->tpl_vars['traffic_shop']->index == 1) {?>active<?php }?>" data-toggle="pill" data-name="<?php echo $_smarty_tpl->tpl_vars['traffic_shop']->value->id;?>
">
                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center">¥ <?php echo $_smarty_tpl->tpl_vars['traffic_shop']->value->price;?>
</span>
                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center"><?php echo $_smarty_tpl->tpl_vars['traffic_shop']->value->name;?>
</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['traffic_shop'] = $__foreach_traffic_shop_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary buyTrafficPackage" type="button" onclick="shop.buy_traffic();">购买</button>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>

    </body>
</html>
<?php }
}
