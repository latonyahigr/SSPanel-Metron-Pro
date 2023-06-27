<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:53:04
  from 'D:\XProject\SSPanel\resources\views\metron\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64971160615f52_42591038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87eddc255656637515613cef36b94748ede35064' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\index.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index-a.tpl' => 1,
  ),
),false)) {
function content_64971160615f52_42591038 (Smarty_Internal_Template $_smarty_tpl) {
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
