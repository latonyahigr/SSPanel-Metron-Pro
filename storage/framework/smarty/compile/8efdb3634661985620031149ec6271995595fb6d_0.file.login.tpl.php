<?php
/* Smarty version 3.1.48, created on 2023-06-28 17:03:45
  from 'D:\XProject\SSPanel\resources\views\metron\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_649bf7714618a5_04209526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efdb3634661985620031149ec6271995595fb6d' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\auth\\login.tpl',
      1 => 1687942757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/auth/head.tpl' => 1,
    'file:include/auth/scripts.tpl' => 1,
  ),
),false)) {
function content_649bf7714618a5_04209526 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>登录 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="login-signin">
                            <div class="mb-10">
                                <h4 class="text-dark font-weight-normal mb-4" style="font-size: 22px;">欢迎使用 <span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</span></h4>
                                <p class="text-muted">欢迎登录用户中心</p>
                            </div>
                            <form class="form" id="login_form">
                                <div id="login_form_1">
                                    <div class="form-group mt-5">
                                        <input class="form-control h-auto  py-4 px-8" type="text" placeholder="邮箱地址" name="email" id="email" autocomplete="new-password" required />
                                    </div>
                                    <div class="form-group mt-5">
                                        <input class="form-control h-auto py-4 px-8" type="password" placeholder="密码" name="password" id="password" autocomplete="new-password" required/>
                                    </div>
                                </div>
                                <div id="login_form_2" style="display: none;">
                                    <div class="form-group mt-5">
                                        <input class="form-control h-auto py-4 px-8" type="number" placeholder="二步验证动态码" name="code_2fa" id="2fa-code" autocomplete="new-password" />
                                        <a href="JavaScript:;" id="reset_acc" class=" font-weight-bold">返回输入账号</a>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                                <div class="form-group">
                                    <div class="embed-captcha"></div>
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                                    <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                                    </div>
                                <?php }?>
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" name="remember" id="remember-me" checked="checked"/>记住我
                                        <span></span>
                                    </label>
                                    <a href="/password/reset" class=" font-weight-bold">忘记密码 ?</a>
                                </div>
                                <div class="form-group text-center mt-10" style="white-space:nowrap;">
                                    <button type="button" style="width:200px" id="login_submit" class="btn btn-primary btn-lg btn-icon icon-right login">登录</button>
                                </div>
                            </form>
                            <div class="mt-10">
                                <span class="opacity-70 mr-4">还没有账号 ?</span>
                                <a href="/auth/register" class="font-weight-bold">立即注册</a>
                            </div>
                        </div>

                        <div class="modal fade" id="telegram-login-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content shadow-lg">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary"><strong>Telegram 一键登录</strong></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center mt-4" id="telegram-login-box">
                                        </div>
                                        <div class="text-center mt-4 mb-3">
                                            <div class="text-job text-muted">或者添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
"  target="_blank">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，发送下面的数字给它
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1><code id="code_number" style="color: #6777ef"><?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
</code></h1>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">取消</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="text-center mt-5 text-small" style="margin-top: 3rem!important;">
                            Copyright © 2023 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>

                            <div class="mt-2" id="copyright">Powered by <a href="/staff">SSPANEL</a></div>
                         </div>

                        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html>
<?php }
}
