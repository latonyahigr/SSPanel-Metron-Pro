<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:46:03
  from '/www/wwwroot/SSPanel/resources/views/metron/user/node.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929caba13085_54449288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffe19a8128ecf2f0e6e754d7df5e73b45455ba33' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/user/node.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_64929caba13085_54449288 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>节点列表 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
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
                                    <h2 class="text-white font-weight-bold my-2 mr-5">节点列表</h2>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <?php if ($_smarty_tpl->tpl_vars['metron']->value['nodes_filter'] === true) {?>
                                    <a href="javascript:;"
                                       class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['btn_subheader'];?>
 font-weight-bold py-3 px-6"
                                       data-toggle="modal" data-target="#nodes-filter-modal">订阅节点筛选</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column-fluid">
                        <div class="container">

                            <?php $_smarty_tpl->_assignInScope('class', -1);?> <?php $_smarty_tpl->_assignInScope('dom_head', 0);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>

                            <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] != $_smarty_tpl->tpl_vars['class']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['dom_head']->value === 2) {?>

                        </div>
                    </div>
                </div>
            </div>

            <?php }?>

            <?php $_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['node']->value['class']);?> <?php $_smarty_tpl->_assignInScope('dom_head', 1);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['nodeClass']) ? $_smarty_tpl->tpl_vars['nodeClass']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['node']->value['class'];
$_smarty_tpl->_assignInScope('nodeClass', $_tmp_array);?>

            <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                <div class="card" style="width: 200px;">
                    <div class="card-header <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" id="headingThree-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                        <div class="card-title" data-toggle="collapse" data-target="#collapseThree-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                             aria-expanded="false" aria-controls="collapseThree-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                            <div class="card-label"><strong><?php echo $_smarty_tpl->tpl_vars['metron']->value['node_class_name'][$_smarty_tpl->tpl_vars['class']->value];?>
</strong></div>
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                     height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none"
                                       fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                              fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                              fill="#000000" fill-rule="nonzero"
                                              opacity="0.3"
                                              transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['dom_head']->value === 1) {?>
                <?php $_smarty_tpl->_assignInScope('dom_head', 2);?> <?php $_smarty_tpl->_assignInScope('dom_end', 1);?>

                <div id="collapseThree-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" class="collapse show" aria-labelledby="headingThree-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                     data-parent="#accordionExample-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" style="">
                    <div class="card-body p-3">
                        <div class="row">
                            <?php }?>
                            <div class="col-sm-12 col-xl-6 mb-8">
                                <div class="card card-custom cursor_onclick <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['node']->value['class'] && $_smarty_tpl->tpl_vars['node']->value['sort'] != 15) {?> onclick="node.NodeInfo(<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
)"
                                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['node']->value['class'] && $_smarty_tpl->tpl_vars['node']->value['sort'] == 15) {?> onclick="showVless(<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
)"
                                        <?php } else { ?> onclick="node.Classinsufficient()" <?php }?>>
                                    <div class="card-body pt-6 pl-4 pb-5">
                                        <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                            <li class="media">
                                                <?php $_smarty_tpl->_assignInScope('region', substr($_smarty_tpl->tpl_vars['node']->value['name'],0,6));?>
                                                <img alt="image" class="mr-3 rounded-circle" width="50"
                                                     src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/flags<?php if ($_smarty_tpl->tpl_vars['metron']->value['node_flag_mode'] == 'name') {?>/1x1_zh_cn/<?php echo $_smarty_tpl->tpl_vars['node']->value['flag'];
} else { ?>/1x1/<?php echo $_smarty_tpl->tpl_vars['node']->value['status'];
}?>.svg">
                                                <div class="media-body">
                                                    <div class="media-title"><span
                                                                class="label label-dot label-xl <?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == '1') {?>label-success<?php } else { ?>label-danger<?php }?>"></span> <?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                                    </div>
                                                    <div class=" text-job text-muted">
                                                        <?php echo $_smarty_tpl->tpl_vars['node']->value['info'];?>

                                                    </div>
                                                </div>
                                                <div class="media-items">
                                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_online_user'] == true) {?>
                                                        <div class="media-item">
                                                            <div class="media-value"><?php if ($_smarty_tpl->tpl_vars['node']->value['online_user'] == -1) {?> N/A<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['node']->value['online_user'];
}?></div>
                                                            <div class="media-label">在线</div>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_node_traffic_rate'] == true) {?>
                                                        <div class="media-item">
                                                            <div class="media-value">x<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
</div>
                                                            <div class="media-label">倍率</div>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_node_load'] == true) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                                                            <div class="media-item">
                                                                <div class="media-value"><?php if ($_smarty_tpl->tpl_vars['node']->value['latest_load'] == -1) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['latest_load'];?>
%<?php }?></div>
                                                                <div class="media-label">负载</div>
                                                            </div>
                                                        <?php }?>

                                                    <?php }?>

                                                </div>
                                            </li>
                                        </ul>
                                        <?php if ($_smarty_tpl->tpl_vars['node']->value['unlock'] && $_smarty_tpl->tpl_vars['metron']->value['show_stream_media'] === true) {?>
                                            <div style="border-top: 2px dashed #ECF0F3;
                                        border-bottom-right-radius: 0.42rem;
                                        border-bottom-left-radius: 0.42rem;
                                        margin-top: 20px;
                                        margin-bottom: 10px;"></div>
                                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" style="">
                                                <table id="node_unlocak"  class="datatable-table" style="display: block;">
                                                    <thead class="datatable-head">
                                                    <tr class="datatable-row" style="left: 0px;">
                                                        <th data-field="YouTube" class="datatable-cell"><span>YouTube</span></th>
                                                        <th data-field="Netflix" class="datatable-cell"><span>Netflix</span></th>
                                                        <th data-field="DisneyPlus" class="datatable-cell"><span>DisneyPlus</span></th>
                                                        <th data-field="港澳台B站" class="datatable-cell"><span>港澳台B站</span></th>
                                                        <th data-field="台湾B站" class="datatable-cell"><span>台湾B站</span></th>
                                                        <th data-field="MyTVSuper" class="datatable-cell"><span>MyTVSuper</span></th>
                                                        <th data-field="BBC" class="datatable-cell"><span>BBC</span></th>
                                                        <th data-field="Abema" class="datatable-cell"><span>Abema</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody style="" class="datatable-body">
                                                    <tr data-row="0" class="datatable-row" style="left: 0px;">
                                                        <td data-field="YouTube" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['YouTube'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['YouTube'];?>
</span>
                                                        </td>
                                                        <td data-field="Netflix" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['Netflix'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['Netflix'];?>
</span>
                                                        </td>
                                                        <td data-field="DisneyPlus" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['DisneyPlus'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['DisneyPlus'];?>
</span>
                                                        </td>
                                                        <td data-field="BilibiliHKMCTW" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BilibiliHKMCTW'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BilibiliHKMCTW'];?>
</span>
                                                        </td>
                                                        <td data-field="BilibiliTW" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BilibiliTW'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BilibiliTW'];?>
</span>
                                                        </td>
                                                        <td data-field="MyTVSuper" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['MyTVSuper'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['MyTVSuper'];?>
</span>
                                                        </td>
                                                        <td data-field="BBC" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BBC'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['BBC'];?>
</span>
                                                        </td>
                                                        <td data-field="Abema" style="width: 13%;" aria-label="<?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['Abema'];?>
" class="datatable-cell">
                                                            <span><?php echo $_smarty_tpl->tpl_vars['node']->value['unlock']['unlock_item']['Abema'];?>
</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>


                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
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

    <!-- SSR 节点 -->
    <div class="modal fade" id="nodeinfo-ssr-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="nodeinfo-ssr-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong
                                id="tab-ssr-modal-config-remark">节点名称</strong></h4>
                </div>
                <div class="modal-body" id="nodeinfo-ssr-modal-body">
                    <ul class="dashboard-tabs nav nav-pills row nav-primary row-paddingless m-0 p-0" role="tablist">
                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 ml-1 mr-1 mb-0 cursor_onclick">
                            <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center p-1 active"
                               data-toggle="pill" href="#tab-ssr-modal-qrcode">
                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">二维码</span>
                            </a>
                        </li>
                        <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 ml-1 mr-1 mb-0 cursor_onclick">
                            <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center p-1"
                               data-toggle="pill" href="#tab-ssr-modal-config">
                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">手动设置</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content m-0 p-0">
                        <div class="tab-pane active show" id="tab-ssr-modal-qrcode">
                            <a href="#">
                                <div class="text-center pt-10" id="nodeinfo-ssr-qrcode">
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane" id="tab-ssr-modal-config">
                            <div class="pt-10 pl-10">
                                <p>服务器地址：<code id="tab-ssr-modal-config-address"></code></p>
                                <p>服务器端口：<code id="tab-ssr-modal-config-port"></code></p>
                                <p>加密方式：<code id="tab-ssr-modal-config-method"></code></p>
                                <p>密码：<code id="tab-ssr-modal-config-passwd"></code></p>
                                <p>协议：<code id="tab-ssr-modal-config-protocol"></code></p>
                                <p>协议参数：<code id="tab-ssr-modal-config-protocol_param"></code></p>
                                <p>混淆：<code id="tab-ssr-modal-config-obfs"></code></p>
                                <p>混淆参数：<code id="tab-ssr-modal-config-obfs_param"></code></p>
                            </div>
                        </div>
                    </div>
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
    <!-- V2ray 节点 -->
    <div class="modal fade" id="nodeinfo-v2ray-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="nodeinfo-v2ray-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong
                                id="nodeinfo-v2ray-modal-remark">节点名称</strong></h4>
                </div>
                <div class="modal-body" id="nodeinfo-v2ray-modal-body">
                    <div class="pt-4 pl-10">
                        <p>地址：<code id="nodeinfo-v2ray-modal-add"></code></p>
                        <p>端口：<code id="nodeinfo-v2ray-modal-port"></code></p>
                        <p>Alter Id：<code id="nodeinfo-v2ray-modal-aid"></code></p>
                        <p>用户 UUID：<code id="nodeinfo-v2ray-modal-id"></code></p>
                        <p>传输协议：<code id="nodeinfo-v2ray-modal-net"></code></p>
                        <p>路径：<code id="nodeinfo-v2ray-modal-path"></code></p>
                        <p>伪装方式：<code id="nodeinfo-v2ray-modal-type"></code></p>
                        <p>TLS：<code id="nodeinfo-v2ray-modal-tls"></code></p>
                        <p>VMess 链接：<code class="cursor_onclick copy-modal" id="nodeinfo-v2ray-modal-url"
                                          data-clipboard-text="#">点击复制</code></p>
                    </div>
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
    <!-- ss+ws 节点 -->
    <div class="modal fade" id="nodeinfo-v2rayPlug-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="nodeinfo-v2rayPlug-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong
                                id="nodeinfo-v2rayPlug-modal-remark">节点名称</strong></h4>
                </div>
                <div class="modal-body" id="nodeinfo-v2rayPlug-modal-body">
                    <div class="pt-4 pl-10">
                        <p>节点地址：<code id="nodeinfo-v2rayPlug-modal-address"></code></p>
                        <p>节点端口：<code id="nodeinfo-v2rayPlug-modal-port"></code></p>
                        <p>节点加密：<code id="nodeinfo-v2rayPlug-modal-method"></code></p>
                        <p>连接密码：<code id="nodeinfo-v2rayPlug-modal-passwd"></code></p>
                        <p>混淆方式：<code id="nodeinfo-v2rayPlug-modal-obfs"></code></p>
                        <p>混淆参数：<code id="nodeinfo-v2rayPlug-modal-obfs_param"></code></p>
                    </div>
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
    <!-- trojan 节点 -->
    <div class="modal fade" id="nodeinfo-trojan-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="nodeinfo-trojan-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong
                                id="nodeinfo-trojan-modal-remark">节点配置信息</strong></h4>
                </div>
                <div class="modal-body" id="nodeinfo-trojan-modal-body">
                    <div class="pt-4 pl-10">
                        <p>节点地址：<code id="nodeinfo-trojan-modal-address"></code></p>
                        <p>节点Host：<code id="nodeinfo-trojan-modal-host"></code></p>
                        <p>节点端口：<code id="nodeinfo-trojan-modal-port"></code></p>
                        <p>节点密码：<code id="nodeinfo-trojan-modal-passwd"></code></p>
                        <p>Trojan链接：
                            <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"><?php echo '</script'; ?>
>
                            <a href="#" class="copy-text">点此复制</a>
                            <?php echo '<script'; ?>
>
                                var clipboard = new ClipboardJS('.copy-text', {
                                    text: function (trigger) {
                                        var address = document.querySelector('#nodeinfo-trojan-modal-address').innerText;
                                        var host = document.querySelector('#nodeinfo-trojan-modal-host').innerText;
                                        var port = document.querySelector('#nodeinfo-trojan-modal-port').innerText;
                                        var passwd = document.querySelector('#nodeinfo-trojan-modal-passwd').innerText;
                                        var nodename = document.querySelector('#nodeinfo-trojan-modal-remark').innerText;
                                        return "trojan://" + passwd + "@" + address + ":" + port + "?peer=" + host + "#" + nodename;
                                    }
                                });
                            <?php echo '</script'; ?>
>
                    </div>
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
    <!-- V2ray-VLESS 节点 -->
    <div class="modal fade" id="nodeinfo-v2ray-vless-modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="nodeinfo-v2ray-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h4 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong
                                id="nodeinfo-v2ray-vless-modal-remark">节点名称</strong></h4>
                </div>
                <div class="modal-body" id="nodeinfo-v2ray-modal-body">
                    <div class="pt-4 pl-10">
                        <p>地址：<code id="nodeinfo-v2ray-vless-modal-add"></code></p>
                        <p>端口：<code id="nodeinfo-v2ray-vless-modal-port"></code></p>
                        <p>Alter Id：<code id="nodeinfo-v2ray-vless-modal-aid"></code></p>
                        <p>用户 UUID：<code id="nodeinfo-v2ray-vless-modal-id"></code></p>
                        <p>传输协议：<code id="nodeinfo-v2ray-vless-modal-net"></code></p>
                        <p>路径：<code id="nodeinfo-v2ray-modal-vless-path"></code></p>
                        <p>伪装方式：<code id="nodeinfo-v2ray-vless-modal-type"></code></p>
                        <p>TLS：<code id="nodeinfo-v2ray-vless-modal-tls"></code></p>
                        <p>流控(flow)：<code id="nodeinfo-v2ray-vless-modal-flow"></code></p>
                        <p>VLESS 链接：<code class="cursor_onclick copy-modal" id="nodeinfo-v2ray-vless-modal-url"
                                          data-clipboard-text="#">点击复制</code></p>
                    </div>
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
    <!-- 订阅筛选 -->
    <?php if ($_smarty_tpl->tpl_vars['metron']->value['nodes_filter'] === true) {?>
        <div class="modal fade" id="nodes-filter-modal" data-backdrop="static" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong> 订阅节点筛选 </strong>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                    aria-hidden="true" class="ki ki-close"></i></button>
                    </div>
                    <div class="modal-body">

                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="row align-items-center">
                                    <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-form__group kt-form__group--inline">
                                            <div class="kt-form__label">
                                                <label>节点订阅模式</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <select class="form-control" id="filter_mode" data-style="btn-danger">
                                                    <option value="all"
                                                            <?php if (!$_smarty_tpl->tpl_vars['filter']->value || $_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['mode'] == 'all') {?>selected="selected"<?php }?>>
                                                        默认获取全部
                                                    </option>
                                                    <option value="nodes_class"
                                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['mode'] == 'nodes_class') {?>selected="selected"<?php }?>>
                                                        按节点等级
                                                    </option>
                                                    <option value="nodes_id"
                                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['mode'] == 'nodes_id') {?>selected="selected"<?php }?>>
                                                        自定义获取节点
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-form__group kt-form__group--inline">
                                            <div class="kt-form__label">
                                                <label>订阅节点排序</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <select class="form-control" id="filter_sort">
                                                    <option value="node_class-asc"
                                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['sort']['type'] == 'node_class' && $_smarty_tpl->tpl_vars['filter']->value['sort']['value'] == 'asc') {?>selected="selected"<?php }?>>
                                                        按节点等级升序
                                                    </option>
                                                    <option value="node_class-desc"
                                                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['sort']['type'] == 'node_class' && $_smarty_tpl->tpl_vars['filter']->value['sort']['value'] == 'desc') {?>selected="selected"<?php }?>>
                                                        按节点等级降序
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['metron']->value['nodes_miniName'] === true) {?>
                                        <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                            <div class="kt-form__group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label>简化节点名称</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <select class="form-control" id="filter_mininame">
                                                        <option value="1"
                                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['mininame'] === 1) {?>selected="selected"<?php }?>>开启
                                                        </option>
                                                        <option value="0"
                                                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['mininame'] === 0 || !$_smarty_tpl->tpl_vars['filter']->value['mininame']) {?>selected="selected"<?php }?>>
                                                            关闭
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="col-xl-4 order-1 order-xl-2 text-right" id="allcheck">
                                <div class="btn-group kt-padding-r-10"
                                     id="check-node_class" <?php if ($_smarty_tpl->tpl_vars['filter']->value['mode'] != 'nodes_id') {?> style="display: none" <?php }?>>
                                    <button type="button" class="btn btn-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">按节点等级选择
                                    </button>
                                    <div class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['node_class_name'], 'nodeName');
$_smarty_tpl->tpl_vars['nodeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nodeName']->key => $_smarty_tpl->tpl_vars['nodeName']->value) {
$_smarty_tpl->tpl_vars['nodeName']->do_else = false;
$__foreach_nodeName_1_saved = $_smarty_tpl->tpl_vars['nodeName'];
?>
                                            <button type="button" class="dropdown-item"
                                                    onclick="node.allCheck('nodes_id-filter', 'node_class', <?php echo $_smarty_tpl->tpl_vars['nodeName']->key;?>
);">
                                                选择所有 Lv.<?php echo $_smarty_tpl->tpl_vars['nodeName']->key;?>
 <?php echo $_smarty_tpl->tpl_vars['nodeName']->value;?>
</button>
                                        <?php
$_smarty_tpl->tpl_vars['nodeName'] = $__foreach_nodeName_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                                <div class="btn-group kt-padding-r-10"
                                     id="check-all" <?php if ($_smarty_tpl->tpl_vars['filter']->value['mode'] != 'nodes_id') {?> style="display: none" <?php }?>>
                                    <button type="button" class="btn btn-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">操作
                                    </button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item"
                                                onclick="node.allCheck('nodes_id-filter', true);">全选
                                        </button>
                                        <button type="button" class="dropdown-item"
                                                onclick="node.allCheck('nodes_id-filter', false);">清空
                                        </button>
                                        <button type="button" class="dropdown-item"
                                                onclick="node.allCheck('nodes_id-filter', 'anti');">反选
                                        </button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success" onclick="node.nodeFilterSave();"
                                            id="node_filter_save_up"><i class="fa fa-save"></i> <span
                                                id="node_filter_save_up_text">保存更改</span></button>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                            </div>

                        </div>

                        <!-- mode: 默认获取全部 -->
                        <div class="row pt-10 pl-5 pr-5"
                             id="filter_mode-all" <?php if ($_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['mode'] != 'all') {?> style="display: none" <?php }?>>
                            <div class="col-12 alert alert-custom alert-outline-2x alert-outline-primary fade show mb-5"
                                 role="alert">
                                <div class="alert-icon"><i class="flaticon-signs"></i></div>
                                <div class="alert-text">该模式下您可以订阅到所有可用节点</div>
                            </div>
                        </div>
                        <!-- mode: 按节点等级 -->
                        <div class="row kt-padding-t-30 kt-padding-l-30 kt-padding-r-30"
                             id="filter_mode-nodes_class" <?php if ($_smarty_tpl->tpl_vars['filter']->value['mode'] != 'nodes_class') {?> style="display: none" <?php }?>>
                            <div class="col-12 pt-8 text-center">
                                <h3 class="display-5 text-primary"><strong>节点等级条件 [二选一]</strong></h3>
                            </div>
                            <div class="col-12">
                                <p>获取<code>大于等于</code>指定等级的所有节点</p>
                                <p>例如选择 Lv.2 等级, 您将订阅到 Lv.2 和以上等级节点, 不会订阅到 Lv.1 节点<br></p>
                            </div>
                            <div class="col-12 pl-8 row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodeClass']->value, 'class');
$_smarty_tpl->tpl_vars['class']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->do_else = false;
?>
                                    <label class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 checkbox checkbox-primary <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['class']->value) {?> disabled<?php }?>"
                                           <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['class']->value) {?>onclick="node.allCheck('checkbox-nodes_class-filter', false);"<?php }?>>
                                        <input class="mode-node_class-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                                               type="radio" <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['class']->value) {?> disabled="disabled" <?php }?>
                                               name="radio-nodes_class-filter"
                                               value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['nodes_class']['the'] == '>=' && $_smarty_tpl->tpl_vars['class']->value == $_smarty_tpl->tpl_vars['filter']->value['nodes_class']['value'] || !$_smarty_tpl->tpl_vars['filter']->value['nodes_class']['the'] && $_smarty_tpl->tpl_vars['class']->value == $_smarty_tpl->tpl_vars['user']->value->class) {?>checked="true"<?php }?>>
                                        <div class="label label-sm label-rounded label-primary mr-2"><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</div> <?php echo $_smarty_tpl->tpl_vars['metron']->value['node_class_name'][$_smarty_tpl->tpl_vars['class']->value];?>

                                        <span></span>
                                    </label>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="col-12 pt-8 text-center">
                                <h3 class="display-5 text-primary"><strong>指定节点等级 [二选一]</strong></h3>
                            </div>
                            <div class="col-12">
                                <p>获取<code>所选指定</code>等级的所有节点</p>
                                <p>例如选择 Lv.2 等级, 您将只会订阅到 Lv.2 等级节点 (可多选)</p>
                            </div>
                            <div class="col-12 pl-8 row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodeClass']->value, 'class');
$_smarty_tpl->tpl_vars['class']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->do_else = false;
?>
                                    <label class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 checkbox checkbox-primary <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['class']->value) {?> disabled<?php }?>"
                                           <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['class']->value) {?>onclick="node.allCheck('radio-nodes_class-filter', false);"<?php }?>>
                                        <input class="mode-node_class-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                                               type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['class']->value) {?> disabled="disabled" <?php }?>
                                               name="checkbox-nodes_class-filter"
                                               value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['nodes_class']['the'] == '=' && in_array($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl->tpl_vars['filter']->value['nodes_class']['value'])) {?>checked="true"<?php }?>>
                                        <div class="label label-sm label-rounded label-primary mr-2"><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</div> <?php echo $_smarty_tpl->tpl_vars['metron']->value['node_class_name'][$_smarty_tpl->tpl_vars['class']->value];?>

                                        <span></span>
                                    </label>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <!-- mode: 自定义获取节点 -->
                        <div class="row pt-5 pl-5"
                             id="filter_mode-nodes_id" <?php if ($_smarty_tpl->tpl_vars['filter']->value['mode'] != 'nodes_id') {?> style="display: none" <?php }?>>
                            <?php $_smarty_tpl->_assignInScope('filter_class', -1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] != $_smarty_tpl->tpl_vars['filter_class']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('filter_class', $_smarty_tpl->tpl_vars['node']->value['class']);?>
                                    <div class="col-12 pl-0 pt-5 pb-2 text-center">
                                        <h3 class="display-5 text-primary">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['metron']->value['node_class_name'][$_smarty_tpl->tpl_vars['filter_class']->value];?>
</strong><?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['filter_class']->value) {?> [等级不足]<?php }?>
                                        </h3>
                                    </div>
                                <?php }?>
                                <label class="col-sm-12 col-md-6 col-lg-4 col-xl-3 checkbox checkbox-primary <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['node']->value['class']) {?> disabled<?php }?>">
                                    <input class="node_class-<?php echo $_smarty_tpl->tpl_vars['node']->value['class'];?>
 nation-<?php echo $_smarty_tpl->tpl_vars['node']->value['status'];?>
 id-<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"
                                           type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->class < $_smarty_tpl->tpl_vars['node']->value['class']) {?> disabled="disabled" <?php }?>
                                           name="nodes_id-filter"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['nodes_id'])) && in_array($_smarty_tpl->tpl_vars['node']->value['id'],$_smarty_tpl->tpl_vars['filter']->value['nodes_id']) || !$_smarty_tpl->tpl_vars['filter']->value['nodes_id'] && $_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['node']->value['class']) {?>checked="true"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                    <span></span>
                                </label>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold"
                                data-dismiss="modal">取消
                        </button>
                        <button type="button" class="btn btn-success" onclick="node.nodeFilterSave();"
                                id="node_filter_save_down"><i class="fa fa-save"></i> <span
                                    id="node_filter_save_dowm_text">保存更改</span></button>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    </body>
    <?php echo '<script'; ?>
>
        $("td span:contains('Yes')").addClass("text-success");
        $("td span:contains('No')").addClass("text-danger");
        $("td span:contains('Unknow')").addClass("text-warning");
        $("td span:contains('仅限自制')").addClass("text-info");
        //触发模态框的同时调用此方法
        function showVless(id) {
            $.get('/user/nodeinfo/' + id, function (res) {
                let data = JSON.parse(res)
                $("#nodeinfo-v2ray-vless-modal-remark").text(data.info.remark)
                $("#nodeinfo-v2ray-vless-modal-add").text(data.info.add)
                $("#nodeinfo-v2ray-vless-modal-port").text(data.info.port)
                $("#nodeinfo-v2ray-vless-modal-aid").text(data.info.aid)
                $("#nodeinfo-v2ray-vless-modal-id").text(data.info.id)
                $("#nodeinfo-v2ray-vless-modal-net").text(data.info.net)
                $("#nodeinfo-v2ray-vless-modal-path").text(data.info.path)
                $("#nodeinfo-v2ray-vless-modal-tls").text(data.info.security)
                $("#nodeinfo-v2ray-vless-modal-flow").text(data.info.flow)
                $("#nodeinfo-v2ray-vless-modal-url").attr('data-clipboard-text', data.url)
            });

            $('#nodeinfo-v2ray-vless-modal').modal('show');
        }
    <?php echo '</script'; ?>
>
</html>
<?php }
}
