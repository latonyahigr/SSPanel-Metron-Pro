<?php
/* Smarty version 3.1.48, created on 2023-06-25 09:06:02
  from 'D:\XProject\SSPanel\resources\views\metron\table\js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649792fab016f8_48850457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd299d873bcb74a09ae38825097632d48515b4502' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\table\\js_1.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649792fab016f8_48850457 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
