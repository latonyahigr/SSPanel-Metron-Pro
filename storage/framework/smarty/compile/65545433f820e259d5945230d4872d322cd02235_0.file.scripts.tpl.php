<?php
/* Smarty version 3.1.48, created on 2023-07-03 22:23:19
  from 'D:\XProject\SSPanel\resources\views\metron\include\global\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64a2d9d7009ea9_31737917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65545433f820e259d5945230d4872d322cd02235' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\global\\scripts.tpl',
      1 => 1688394194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/crisp.tpl' => 1,
    'file:include/global/chatra.tpl' => 1,
  ),
),false)) {
function content_64a2d9d7009ea9_31737917 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
> var ThemeStyle = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['JavaScript'];?>
'); <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> var ASSETS_URL = "<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
"; <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/js/metron-plugin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/js/scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/metron/js/metron1.js?v=24"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'crisp' && $_smarty_tpl->tpl_vars['metron']->value['crisp_id'] != '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/global/crisp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'chatra' && $_smarty_tpl->tpl_vars['metron']->value['chatra_id'] != '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/global/chatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
