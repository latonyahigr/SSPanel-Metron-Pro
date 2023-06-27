<?php
/* Smarty version 3.1.48, created on 2023-06-25 09:06:02
  from 'D:\XProject\SSPanel\resources\views\metron\table\checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649792faab1bf5_20245109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5b002d43195ed6e6350e9f19947e9678bf0560' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\table\\checkbox.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649792faab1bf5_20245109 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <div class="checkbox checkbox-adv checkbox-inline">
        <label for="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <input href="javascript:void(0);" onClick="modify_table_visible('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')"
                   <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['table_config']->value['default_show_column']) || count($_smarty_tpl->tpl_vars['table_config']->value['default_show_column']) == 0) {?>checked=""<?php }?>
                   class="access-hide" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            <span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span
                    class="checkbox-circle-icon icon">done</span>
        </label>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
