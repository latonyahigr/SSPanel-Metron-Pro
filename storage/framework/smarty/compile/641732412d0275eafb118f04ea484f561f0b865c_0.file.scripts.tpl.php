<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:53:05
  from 'D:\XProject\SSPanel\resources\views\metron\include\auth\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64971161e1ae83_40368106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641732412d0275eafb118f04ea484f561f0b865c' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\auth\\scripts.tpl',
      1 => 1686844839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/crisp.tpl' => 1,
    'file:include/global/chatra.tpl' => 1,
  ),
),false)) {
function content_64971161e1ae83_40368106 (Smarty_Internal_Template $_smarty_tpl) {
?>                        <div class="p-5" id="auth-stf"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            var loginConfig = {
                'base_url': "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
",
                'switch': {
                    'geetest': <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>true<?php } else { ?>false<?php }?>,
                    'recaptcha': <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>true<?php } else { ?>false<?php }?>
                },
                'telegram': {
                    bot: "<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
",
                    token: "<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
                    number: "<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
",
                },
                'register': {
                    'code': <?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] == 'invite' && $_smarty_tpl->tpl_vars['metron']->value['register_code'] === true) {?>true<?php } else { ?>false<?php }?>,
                },
            };
        <?php echo '</script'; ?>
>

        <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
        <?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            captcha = '';
            var handlerEmbed = function (captchaObj) {
                captchaObj.onSuccess(function () {
                    validate = captchaObj.getValidate();
                });
                captchaObj.appendTo(".embed-captcha");
                captcha = captchaObj;
            };
            initGeetest({
                gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
                challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
                product: "float",
                width: "100%",
                lang: 'zh-cn',
                offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?>
            }, handlerEmbed);
        <?php echo '</script'; ?>
>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
            <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
        <?php }?>

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
/js/auth.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_cust_auth'] === true) {?>
        <?php if ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'crisp' && $_smarty_tpl->tpl_vars['metron']->value['crisp_id'] != '') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/crisp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['metron']->value['enable_cust'] === 'chatra' && $_smarty_tpl->tpl_vars['metron']->value['chatra_id'] != '') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/chatra.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <?php }
}
}
