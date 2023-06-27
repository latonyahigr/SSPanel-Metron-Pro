<?php
/* Smarty version 3.1.48, created on 2023-06-25 09:06:02
  from 'D:\XProject\SSPanel\resources\views\metron\table\js_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649792fab29478_22574555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '616996fe3a43feb0783e5ece5ccda8427992e927' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\table\\js_2.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:table/lang_chinese.tpl' => 1,
  ),
),false)) {
function content_649792fab29478_22574555 (Smarty_Internal_Template $_smarty_tpl) {
?>table_1 = $('#table_1').DataTable({
ajax: {
url: '<?php echo $_smarty_tpl->tpl_vars['table_config']->value['ajax_url'];?>
',
type: "POST"
},
processing: true,
serverSide: true,
order: [[ 0, 'desc' ]],
stateSave: true,
columnDefs: [
{
targets: [ '_all' ],
className: 'mdl-data-table__cell--non-numeric'
}
],
columns: [
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
],
<?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
})


var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
if (has_init != true) {
localStorage.setItem(window.location.href + '-hasinit', true);
} else {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    var checked = JSON.parse(localStorage.getItem(window.location.href + '-haschecked-checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'));
    if (checked == true) {
    document.getElementById('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = true;
    } else {
    document.getElementById('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = false;
    }
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    modify_table_visible('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
