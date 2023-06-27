<?php
/* Smarty version 3.1.48, created on 2023-06-21 11:32:35
  from '/www/wwwroot/SSPanel/resources/views/metron/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64926f53846b48_22505898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac2fe0b96c616436844b408b640d6c3a767dadb' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/index.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index-a.tpl' => 1,
  ),
),false)) {
function content_64926f53846b48_22505898 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['metron']->value['index_enable'] == true) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:index-a.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
        <meta http-equiv="refresh" content="0;url=/user">
    </head>
    </html>
<?php }
}
}
