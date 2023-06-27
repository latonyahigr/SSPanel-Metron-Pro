<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:17:38
  from '/www/wwwroot/SSPanel/resources/views/metron/include/global/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929602189369_52408554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb490b209879ba59ac08c0e83ce2a2e91647699a' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/include/global/scripts.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/crisp.tpl' => 1,
    'file:include/global/chatra.tpl' => 1,
  ),
),false)) {
function content_64929602189369_52408554 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/js/metron.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'crisp' && $_smarty_tpl->tpl_vars['metron']->value['crisp_id'] != '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/global/crisp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'chatra' && $_smarty_tpl->tpl_vars['metron']->value['chatra_id'] != '') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/global/chatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
