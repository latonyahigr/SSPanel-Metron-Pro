<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:53:05
  from '/www/wwwroot/SSPanel/resources/views/metron/user/shared_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929e51355c81_84786662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b536062f60c748f0b06a3d18d35e2eb41345920' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/user/shared_account.tpl',
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
function content_64929e51355c81_84786662 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>共享账号 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/pages/users/shared_account.css" rel="stylesheet" type="text/css" />
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">共享账号</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <?php $_smarty_tpl->_assignInScope('css', array(1=>'primary',2=>'success',3=>'warning',4=>'danger',5=>'info'));?>
                                <?php $_smarty_tpl->_assignInScope('fornum', 0);?>
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metron']->value['shared_account'], 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
$__foreach_type_0_saved = $_smarty_tpl->tpl_vars['type'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['type']->value['show'] === false) {?>
                                    <?php continue 1;?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_assignInScope('fornum', $_smarty_tpl->tpl_vars['fornum']->value+1);?>
                                    <?php $_smarty_tpl->_assignInScope('typeNum', count($_smarty_tpl->tpl_vars['type']->value)-1);?>
                                    <div class="col-lg-12">
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label text-<?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->tpl_vars['fornum']->value];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['type']->key;?>
</strong></h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="kanban-container" style="width: 750px;">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'acc');
$_smarty_tpl->tpl_vars['acc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acc']->key => $_smarty_tpl->tpl_vars['acc']->value) {
$_smarty_tpl->tpl_vars['acc']->do_else = false;
$__foreach_acc_1_saved = $_smarty_tpl->tpl_vars['acc'];
?>
                                                        <?php if (is_bool($_smarty_tpl->tpl_vars['acc']->value)) {?>
                                                        <?php continue 1;?>
                                                        <?php }?>
                                                        <div data-id="_inprocess" data-order="1" class="kanban-board <?php if ($_smarty_tpl->tpl_vars['typeNum']->value === 1) {?>kanban-1<?php } elseif ($_smarty_tpl->tpl_vars['typeNum']->value === 2) {?>kanban-2<?php } elseif ($_smarty_tpl->tpl_vars['typeNum']->value === 3) {?>kanban-3<?php } elseif ($_smarty_tpl->tpl_vars['typeNum']->value === 4) {?>kanban-4<?php } elseif ($_smarty_tpl->tpl_vars['typeNum']->value >= 5) {?>kanban-5<?php }?> " style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                                            <header class="kanban-board-header light-<?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->tpl_vars['fornum']->value];?>
">
                                                                <div class="kanban-title-board"><?php echo $_smarty_tpl->tpl_vars['acc']->value['name'];?>
&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['acc']->value['class'] > 0) {
echo $_smarty_tpl->tpl_vars['metron']->value['user_level'][$_smarty_tpl->tpl_vars['acc']->value['class']];?>
专享<?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['acc']->value['class'] && $_smarty_tpl->tpl_vars['acc']->value['check'] === true) {?>
                                                                    <span class="btn btn-primary font-weight-bold btn-sm pull-r cursor_onclick" onclick="shared_account.check('<?php echo $_smarty_tpl->tpl_vars['type']->key;?>
', '<?php echo $_smarty_tpl->tpl_vars['acc']->key;?>
');">检测账号</span>
                                                                    <?php }?>
                                                                </div>
                                                            </header>
                                                            <main class="kanban-drag">
                                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['acc']->value['class']) {?>
                                                                <label>账号：</label>
                                                                <div class="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shared']['item'];?>
 kanban-item copy-text cursor_onclick" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['acc']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['acc']->value['account'];?>
</div>
                                                                <label>密码：</label>
                                                                <div class="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shared']['item'];?>
 kanban-item copy-text cursor_onclick" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['acc']->value['passwd'];?>
"><?php if ($_smarty_tpl->tpl_vars['acc']->value['hidepawd'] === true) {?>点击复制后在密码框粘贴<?php } else {
echo $_smarty_tpl->tpl_vars['acc']->value['passwd'];
}?></div>
                                                                <?php } else { ?>
                                                                <label>账号：</label>
                                                                <div class="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shared']['item'];?>
 kanban-item">该账号仅 <span class="text-<?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->tpl_vars['fornum']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['metron']->value['user_level'][$_smarty_tpl->tpl_vars['acc']->value['class']];?>
[LV.<?php echo $_smarty_tpl->tpl_vars['acc']->value['class'];?>
]</span> 及以上会员可用</div>
                                                                <label>密码：</label>
                                                                <div class="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['shared']['item'];?>
 kanban-item">该账号仅 <span class="text-<?php echo $_smarty_tpl->tpl_vars['css']->value[$_smarty_tpl->tpl_vars['fornum']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['metron']->value['user_level'][$_smarty_tpl->tpl_vars['acc']->value['class']];?>
[LV.<?php echo $_smarty_tpl->tpl_vars['acc']->value['class'];?>
]</span> 及以上会员可用</div>
                                                                <?php }?>
                                                            </main>
                                                            <footer></footer>
                                                        </div>
                                                        <?php
$_smarty_tpl->tpl_vars['acc'] = $__foreach_acc_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    </body>
</html><?php }
}
