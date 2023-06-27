<?php
/* Smarty version 3.1.48, created on 2023-06-21 13:18:28
  from '/www/wwwroot/SSPanel/resources/views/metron/password/reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649288241dddc5_36566220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04327b46f2a65e0b89a4f372a5fa11ea302e2ac2' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/password/reset.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/auth/head.tpl' => 1,
    'file:include/auth/scripts.tpl' => 1,
  ),
),false)) {
function content_649288241dddc5_36566220 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>登录 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="login-signin">
                            <div class="mb-10">
                                <h3>账号密码找回</h3>
                            </div>
                            <form class="form" id="reset_form">
                                <div class="form-group">
                                    <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="邮箱地址" name="email" id="email" autocomplete="new-password" required />
                                </div>
                                <div class="form-group text-center mt-10" style="white-space:nowrap;">
                                    <button type="button" id="reset_submit" class="btn btn-pill btn-outline-white btn-block font-weight-bold opacity-90 px-15 py-3">发送密码重置邮件</button>
                                </div>
                            </form>
                            <div class="mt-10">
                                <span class="opacity-70 mr-4">还没有账号 ?</span>
                                <a href="/auth/register" class="text-white font-weight-bold">立即注册</a>
                                <span class="mr-2 ml-2"> | </span>
                                <a href="/auth/login" class="text-white font-weight-bold">返回登录</a>
                            </div>
                        </div>

                        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
