<?php
/* Smarty version 3.1.48, created on 2023-06-21 15:02:06
  from '/www/wwwroot/SSPanel/resources/views/metron/user/settings/relay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6492a06e4106f9_36076009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e2317e589d21cb9cd1e91ad44bb3fab7a593ba' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/user/settings/relay.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/settings/menu.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_6492a06e4106f9_36076009 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>节点中转 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">节点中转</h2>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->_subTemplateRender('file:include/settings/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    
                                    <div class="flex-row-fluid ml-lg-8">

                                        <div class="alert alert-custom <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['alert'];?>
 alert-shadow fade show gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" role="alert">
                                            <div class="alert-icon">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="alert-text">
                                                中转规则一般由中国中转至其他国外节点<br />
                                                请设置端口号为您自己的端口<br />
                                                优先级越大，代表其在多个符合条件的规则并存时会被优先采用，当优先级一致时，先添加的规则会被采用。<br />
                                                节点不设置中转时，这个节点就可以当作一个普通的节点来做代理使用。
                                            </div>
                                        </div>

                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" id="relay-card">
                                            <div class="card-header flex-wrap border-0 pt-6">
                                                <div class="card-title">
                                                    <h3 class="card-label text-primary"><strong>规则表</strong>
                                                    <span class="d-block text-muted pt-2 font-size-sm">您账户的所有节点中转规则</span></h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <a href="JavaScript:;" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#add-relay-modal">新增规则</a>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="datatable datatable-bordered datatable-head-custom" id="ajax_relay_rule_data"></div>
                                            </div>
                                        </div>

                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
" id="relay-card">
                                            <div class="card-header flex-wrap border-0 pt-6">
                                                <div class="card-title">
                                                    <h3 class="card-label text-primary"><strong>链路表</strong>
                                                    <span class="d-block text-muted pt-2 font-size-sm">根据您的节点中转规则模拟链路测试</span></h3>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="datatable datatable-bordered datatable-head-custom" id="ajax_relay_link_data"></div>
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

<!-- 新增规则 modal -->
<div class="modal fade" id="add-relay-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong>新增节点中转规则</strong></h5>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">起源节点：</label>
                    <select class="form-control" id="source_node">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['source_nodes']->value, 'source_node');
$_smarty_tpl->tpl_vars['source_node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source_node']->value) {
$_smarty_tpl->tpl_vars['source_node']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['source_node']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['source_node']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">目标节点：</label>
                    <select class="form-control" id="dist_node">
                        <option value="-1" >不进行中转</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dist_nodes']->value, 'dist_node');
$_smarty_tpl->tpl_vars['dist_node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dist_node']->value) {
$_smarty_tpl->tpl_vars['dist_node']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['dist_node']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['dist_node']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">目标节点：</label>
                    <select class="form-control" id="port">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ports']->value, 'port');
$_smarty_tpl->tpl_vars['port']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['port']->value) {
$_smarty_tpl->tpl_vars['port']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['port']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>优先级</label>
                    <input type="number" class="form-control" name="priority" value="0" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="add_relay" onclick="setting.add_relay();">保存</button>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold" data-dismiss="modal">关闭</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- 编辑规则 modal -->
<div class="modal fade" id="edit-relay-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong>编辑中转规则</strong></h5>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">起源节点：</label>
                    <select class="form-control" id="edit_source_node">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['source_nodes']->value, 'source_node');
$_smarty_tpl->tpl_vars['source_node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source_node']->value) {
$_smarty_tpl->tpl_vars['source_node']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['source_node']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['source_node']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">目标节点：</label>
                    <select class="form-control" id="edit_dist_node">
                        <option value="-1" >不进行中转</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dist_nodes']->value, 'dist_node');
$_smarty_tpl->tpl_vars['dist_node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dist_node']->value) {
$_smarty_tpl->tpl_vars['dist_node']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['dist_node']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['dist_node']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="col-form-label text-lg-right text-left">目标节点：</label>
                    <select class="form-control" id="edit_port">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ports']->value, 'port');
$_smarty_tpl->tpl_vars['port']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['port']->value) {
$_smarty_tpl->tpl_vars['port']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['port']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>优先级</label>
                    <input type="number" class="form-control" name="edit_priority" value="" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="edit_relay" onclick="setting.edit_relay();">保存</button>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
 font-weight-bold" data-dismiss="modal">关闭</button>
            </div>
            </form>
        </div>
    </div>
</div>

    </body>
</html><?php }
}
