<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:53:15
  from 'D:\XProject\SSPanel\resources\views\metron\include\global\import_sublink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497116bcf6011_91963025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7921775a0858d2facb2e7c445a88028d64cde9a0' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\global\\import_sublink.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6497116bcf6011_91963025 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php echo '<script'; ?>
>
            function importSublink(client) {
            if (client == 'ssr') {
                index.oneclickImport('ssr', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
');
            };
            if (client == 'clash') {
                index.oneclickImport('clash','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
')
            };
            if (client == 'shadowrocket') {
                index.oneclickImport('shadowrocket','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
')
            };
            if (client == 'quantumult') {
                index.oneclickImport('quantumult','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
')
            };
            if (client == 'quantumult_v2') {
                index.oneclickImport('quantumult_v2','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_v2"];?>
')
            };
            if (client == 'stash') {
                location.href = "stash://install-config?url=" + encodeURIComponent('<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["stash"];?>
') + "&name=" + '<?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
'
            };
            }
            function qrcodeSublink(client) {
                if (client == 'shadowrocket') {
                    index.qrcodeImport('shadowrocket', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
');
                }
            }
        <?php echo '</script'; ?>
>
<?php }
}
