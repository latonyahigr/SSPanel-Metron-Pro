<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:38:15
  from '/www/wwwroot/SSPanel/resources/views/metron/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929ad7193dc3_57834039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60dd1c3533b1296c56ee0d00ec2a157769f7c54' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/table/js_1.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64929ad7193dc3_57834039 (Smarty_Internal_Template $_smarty_tpl) {
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
