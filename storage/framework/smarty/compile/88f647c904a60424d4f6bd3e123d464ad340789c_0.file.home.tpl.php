<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:54:43
  from '/www/wwwroot/SSPanel/resources/views/metron/user/help/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929eb3a3c853_13132166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f647c904a60424d4f6bd3e123d464ad340789c' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/user/help/home.tpl',
      1 => 1686149747,
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
function content_64929eb3a3c853_13132166 (Smarty_Internal_Template $_smarty_tpl) {
?>                                <?php $_smarty_tpl->_subTemplateRender('file:user/help/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <div class="row">
                                    <?php $_smarty_tpl->_assignInScope('num', count($_smarty_tpl->tpl_vars['classList_L2']->value));?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                                    <?php $_smarty_tpl->_assignInScope('dan', 1);?>
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('dan', 0);?>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classList_L2']->value, 'list_L2');
$_smarty_tpl->tpl_vars['list_L2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list_L2']->value) {
$_smarty_tpl->tpl_vars['list_L2']->do_else = false;
?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['dan']->value)) && $_smarty_tpl->tpl_vars['dan']->value && $_smarty_tpl->tpl_vars['dan']->value === $_smarty_tpl->tpl_vars['num']->value) {?>
                                    <div class="col-lg-12">
                                    <?php } else { ?>
                                    <div class="col-lg-6">
                                    <?php $_smarty_tpl->_assignInScope('dan', $_smarty_tpl->tpl_vars['dan']->value+1);?>
                                    <?php }?>
                                        <div class="card card-custom mb-8 gutter-b card-stretch <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-body">
                                                <div class="p-6">
                                                    <h2 class="text-primary mb-8"><?php if ($_smarty_tpl->tpl_vars['list_L2']->value->li != null) {?><li class="<?php echo $_smarty_tpl->tpl_vars['list_L2']->value->li;?>
" style="float: left;list-style: none;"></li>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['list_L2']->value->name;?>

                                                    <?php if ($_smarty_tpl->tpl_vars['list_L2']->value->url) {?>
                                                    <div class="card-toolbar pull-r">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['list_L2']->value->url;?>
" class="btn btn-primary font-weight-bold mr-2">安装教程</a>
                                                    </div>
                                                    <?php }?>
                                                    </h2>
                                                    <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="tab-help-<?php echo $_smarty_tpl->tpl_vars['list_L2']->value->id;?>
">

                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageDoc']->value, 'doc');
$_smarty_tpl->tpl_vars['doc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doc']->value) {
$_smarty_tpl->tpl_vars['doc']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['doc']->value->class == $_smarty_tpl->tpl_vars['list_L2']->value->id) {?>
                                                        <div class="card">
                                                            <div class="card-header" id="a-<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
">
                                                                <div class="card-title <?php if ($_smarty_tpl->tpl_vars['doc']->value->ontop != 1) {?>collapsed<?php }?>" data-toggle="collapse" data-target="#b-<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
" aria-expanded="false" aria-controls="b-<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
">
                                                                    <span class="svg-icon svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="card-label  <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['text'];?>
 pl-4"><?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
</div>
                                                                </div>
                                                            </div>
                                                            <div id="b-<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
" class="collapse <?php if ($_smarty_tpl->tpl_vars['doc']->value->ontop == 1) {?>show<?php }?>" aria-labelledby="a-<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
" data-parent="#tab-help-<?php echo $_smarty_tpl->tpl_vars['list_L2']->value->id;?>
">
                                                                <div class="card-body text-dark-50 font-size-lg pl-12">
                                                                    <?php echo $_smarty_tpl->tpl_vars['doc']->value->content;?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                    </div>

                                                </div>
                                            </div>
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
