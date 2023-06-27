<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:59:15
  from 'D:\XProject\SSPanel\resources\views\metron\user\settings\sublink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649712d37ff794_10474806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4816e6a5329f2e2c6669a76e919785f3485adfa6' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\settings\\sublink.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/settings/menu.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_649712d37ff794_10474806 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>资料编辑 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <?php $_smarty_tpl->_subTemplateRender('file:include/global/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-2">
                                    <div class="d-flex flex-column">
                                        <h2 class="text-white font-weight-bold my-2 mr-5">订阅设置</h2>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->_subTemplateRender('file:include/settings/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    
                                    <div class="flex-row-fluid ml-lg-8">
                                        <div class="card card-custom <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header py-3">
                                                <div class="card-title align-items-start flex-column">
                                                    <h3 class="card-label font-weight-bolder text-primary">订阅设置</h3>
                                                    <span class="text-muted font-weight-bold font-size-sm mt-1">订阅链接相关设置</span>
                                                </div>
                                                <div class="card-toolbar">
                                                    <button type="reset" class="btn btn-success mr-2" id="sublink_save_submit">保存更改</button>
                                                </div>
                                            </div>
                                            <form class="form" id="sublink_form">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <label class="col-3 col-xl-3"></label>
                                                        <div class="col-9 col-lg-9 col-xl-6">
                                                            <h5 class="font-weight-bold mb-6">修改节点连接密码</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-3 col-xl-3 col-lg-3 col-form-label text-right">新密码</label>
                                                        <div class="col-9 col-md-6 col-lg-9 col-xl-6">
                                                            <div class="input-group input-group-lg input-group-solid">
                                                                <input class="form-control" type="text" value="" name="node_passwd" oldvalue="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-3 col-xl-3"></label>
                                                        <div class="col-9 col-md-6 col-lg-9 col-xl-6">
                                                            <h5 class="font-weight-bold mt-10 mb-6">订阅链接重置</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-3 col-xl-3 col-lg-3 col-form-label text-right"> </label>
                                                        <div class="col-9 col-md-6 col-lg-9 col-xl-6">
                                                            <button type="button" class="btn btn-primary font-weight-bold btn-sm" onclick="setting.sublink();">重置链接</button>
                                                            <p class="form-text text-muted pt-2">重新生成新的订阅链接, 使原订阅无法获取节点
                                                            <br />如果想让旧订阅获取的节点无法使用, 请同时修改节点连接密码
                                                            <br />订阅链接被盗时, 请同时重置链接和修改节点连接密码</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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
</html><?php }
}
