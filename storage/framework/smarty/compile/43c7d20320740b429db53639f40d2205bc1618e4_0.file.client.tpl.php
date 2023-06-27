<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:53:15
  from 'D:\XProject\SSPanel\resources\views\metron\include\index\client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497116bc49892_24681756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c7d20320740b429db53639f40d2205bc1618e4' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\index\\client.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6497116bc49892_24681756 (Smarty_Internal_Template $_smarty_tpl) {
?>                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header border-0 pt-5">
                                                <div class="card-title font-weight-bolder">
                                                    <div class="card-label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
 font-weight-bold font-size-h3">
                                                        <i class="fas fa-leaf icon-md <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
"></i><strong> 客户端下载教程</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body mt-3">
                                                <ul class="dashboard-tabs nav nav-pills row nav-primary row-paddingless m-0 p-0" role="tablist">
                                                    <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                                        <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center active" data-toggle="pill" href="#tab_windows">
                                                            <span class="nav-icon py-2 w-auto"><i class="fab la-windows icon-3x"></i></span>
                                                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Windows</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                                        <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_android">
                                                            <span class="nav-icon py-2 w-auto"><i class="fab la-android icon-3x"></i></span>
                                                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Android</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                                        <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_macos">
                                                            <span class="nav-icon py-2 w-auto"><i class="fab la-apple icon-3x"></i></span>
                                                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Mac OS</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor_onclick">
                                                        <a class="nav-link border d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_ios">
                                                            <span class="nav-icon py-2 w-auto"><i class="fab la-apple icon-3x"></i></span>
                                                            <span class="nav-text font-size-lg py-2 font-weight-bold text-center">iPhone OS</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="separator separator-dashed separator-border-4 p-5"></div>
                                                <div class="tab-content m-0 p-0">
                                                    <div class="tab-pane active" id="tab_windows" role="tabpanel">
                                                        <div class="card-body pb-0 pl-0">
                                                            <div class="flex-grow-1 card-spacer-x">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['client_windows'], 'c_w', true);
$_smarty_tpl->tpl_vars['c_w']->iteration = 0;
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
$_smarty_tpl->tpl_vars['c_w']->iteration++;
$_smarty_tpl->tpl_vars['c_w']->last = $_smarty_tpl->tpl_vars['c_w']->iteration === $_smarty_tpl->tpl_vars['c_w']->total;
$__foreach_c_w_1_saved = $_smarty_tpl->tpl_vars['c_w'];
?>
                                                                <div class="d-flex align-items-center justify-content-between mb-5">
                                                                    <div class="d-flex align-items-center mr-2">
                                                                        <div class="symbol symbol-60 symbol-light mr-3 flex-shrink-0">
                                                                            <div class="symbol-label">
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" alt="" class="h-50">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-3">
                                                                            <span class="font-size-h5 text-primary font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</span>
                                                                            <div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['vs'];?>
</div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['down'];?>
" class="btn btn-primary font-weight-bold btn-pill">点击下载</a>
                                                                </div>
                                                                <?php if (!$_smarty_tpl->tpl_vars['c_w']->last) {?>
                                                                <div class="separator separator-dashed mb-5"></div>
                                                                <?php }?>
                                                                <?php
$_smarty_tpl->tpl_vars['c_w'] = $__foreach_c_w_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_android" role="tabpanel">
                                                        <div class="card-body pb-0 pl-0">
                                                            <div class="flex-grow-1 card-spacer-x">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['client_android'], 'c_w', true);
$_smarty_tpl->tpl_vars['c_w']->iteration = 0;
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
$_smarty_tpl->tpl_vars['c_w']->iteration++;
$_smarty_tpl->tpl_vars['c_w']->last = $_smarty_tpl->tpl_vars['c_w']->iteration === $_smarty_tpl->tpl_vars['c_w']->total;
$__foreach_c_w_2_saved = $_smarty_tpl->tpl_vars['c_w'];
?>
                                                                <div class="d-flex align-items-center justify-content-between mb-5">
                                                                    <div class="d-flex align-items-center mr-2">
                                                                        <div class="symbol symbol-60 symbol-light mr-3 flex-shrink-0">
                                                                            <div class="symbol-label">
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" alt="" class="h-50">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-3">
                                                                            <span class="font-size-h5 text-primary font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</span>
                                                                            <div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['vs'];?>
</div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['down'];?>
" class="btn btn-primary font-weight-bold btn-pill" target="_blank">点击下载</a>
                                                                </div>
                                                                <?php if (!$_smarty_tpl->tpl_vars['c_w']->last) {?>
                                                                <div class="separator separator-dashed mb-5"></div>
                                                                <?php }?>
                                                                <?php
$_smarty_tpl->tpl_vars['c_w'] = $__foreach_c_w_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_ios" role="tabpanel">
                                                        <div class="card-body pb-0 pl-0">
                                                            <div class="flex-grow-1 card-spacer-x">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['client_ios'], 'c_w', true);
$_smarty_tpl->tpl_vars['c_w']->iteration = 0;
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
$_smarty_tpl->tpl_vars['c_w']->iteration++;
$_smarty_tpl->tpl_vars['c_w']->last = $_smarty_tpl->tpl_vars['c_w']->iteration === $_smarty_tpl->tpl_vars['c_w']->total;
$__foreach_c_w_3_saved = $_smarty_tpl->tpl_vars['c_w'];
?>
                                                                <div class="d-flex align-items-center justify-content-between mb-5">
                                                                    <div class="d-flex align-items-center mr-2">
                                                                        <div class="symbol symbol-60 symbol-light mr-3 flex-shrink-0">
                                                                            <div class="symbol-label">
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" alt="" class="h-50">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-3">
                                                                            <span class="font-size-h5 text-primary font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</span>
                                                                            <div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['vs'];?>
</div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['url'];?>
" class="btn btn-primary font-weight-bold btn-pill">安装教程</a>
                                                                </div>
                                                                <?php if (!$_smarty_tpl->tpl_vars['c_w']->last) {?>
                                                                <div class="separator separator-dashed mb-5"></div>
                                                                <?php }?>
                                                                <?php
$_smarty_tpl->tpl_vars['c_w'] = $__foreach_c_w_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_macos" role="tabpanel">
                                                        <div class="card-body pb-0 pl-0">
                                                            <div class="flex-grow-1 card-spacer-x">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['client_macos'], 'c_w', true);
$_smarty_tpl->tpl_vars['c_w']->iteration = 0;
$_smarty_tpl->tpl_vars['c_w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_w']->value) {
$_smarty_tpl->tpl_vars['c_w']->do_else = false;
$_smarty_tpl->tpl_vars['c_w']->iteration++;
$_smarty_tpl->tpl_vars['c_w']->last = $_smarty_tpl->tpl_vars['c_w']->iteration === $_smarty_tpl->tpl_vars['c_w']->total;
$__foreach_c_w_4_saved = $_smarty_tpl->tpl_vars['c_w'];
?>
                                                                <div class="d-flex align-items-center justify-content-between mb-5">
                                                                    <div class="d-flex align-items-center mr-2">
                                                                        <div class="symbol symbol-60 symbol-light mr-3 flex-shrink-0">
                                                                            <div class="symbol-label">
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['img'];?>
" alt="" class="h-50">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-3">
                                                                            <span class="font-size-h5 text-primary font-weight-bolder"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['name'];?>
</span>
                                                                            <div class="font-size-sm text-muted font-weight-bold mt-1"><?php echo $_smarty_tpl->tpl_vars['c_w']->value['vs'];?>
</div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['c_w']->value['down'];?>
" class="btn btn-primary font-weight-bold btn-pill">点击下载</a>
                                                                </div>
                                                                <?php if (!$_smarty_tpl->tpl_vars['c_w']->last) {?>
                                                                <div class="separator separator-dashed mb-5"></div>
                                                                <?php }?>
                                                                <?php
$_smarty_tpl->tpl_vars['c_w'] = $__foreach_c_w_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<?php }
}
