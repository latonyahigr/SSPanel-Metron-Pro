<?php
/* Smarty version 3.1.48, created on 2023-06-28 17:10:50
  from 'D:\XProject\SSPanel\resources\views\metron\user\help\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649bf91ac83966_67179964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c99e2b4f78b4dea95f8e557af8e8f6d89a6e66' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\help\\home.tpl',
      1 => 1687943446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/help/head.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_649bf91ac83966_67179964 (Smarty_Internal_Template $_smarty_tpl) {
?>                                <?php $_smarty_tpl->_subTemplateRender('file:user/help/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classList_L1']->value, 'list_L1');
$_smarty_tpl->tpl_vars['list_L1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list_L1']->value) {
$_smarty_tpl->tpl_vars['list_L1']->do_else = false;
?>
                                        <div class="col-lg-6">
                                            <div class="card card-custom mb-8 gutter-b card-stretch rounded-lg shadow">


                                                <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->name == 'Windows') {?>
                                                    <?php $_smarty_tpl->_assignInScope('url', '/user/tutorial?os=Windows&client=SSTap');?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->name == 'Android') {?>
                                                    <?php $_smarty_tpl->_assignInScope('url', '/user/tutorial?os=Android&client=Home');?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->name == 'iOS') {?>
                                                    <?php $_smarty_tpl->_assignInScope('url', '/user/tutorial?os=iOS&client=Shadowrocket');?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->name == 'Mac') {?>
                                                    <?php $_smarty_tpl->_assignInScope('url', '/user/tutorial?os=MacOS&client=Home');?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->name == 'Linux') {?>
                                                    <?php $_smarty_tpl->_assignInScope('url', '/user/tutorial?os=iOS&client=Clash');?>
                                                <?php }?>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">

                                                    <div class="card-body os-card <?php echo $_smarty_tpl->tpl_vars['list_L1']->value->name;?>
-card">
                                                        <div class="card-icon">
                                                            <?php if ($_smarty_tpl->tpl_vars['list_L1']->value->li != null) {?><span class="<?php echo $_smarty_tpl->tpl_vars['list_L1']->value->li;?>
"></span>&nbsp;<?php }?>
                                                        </div>
                                                        <h4><?php echo $_smarty_tpl->tpl_vars['list_L1']->value->name;?>
</h4>
                                                        <div class="card-description"><?php echo $_smarty_tpl->tpl_vars['list_L1']->value->descs;?>
</div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                    <?php
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
</html>
<?php }
}
