<?php
/* Smarty version 3.1.48, created on 2023-06-25 13:37:36
  from 'D:\XProject\SSPanel\resources\views\metron\user\tutorial\Windows\SSTap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497d2a06287c9_42707040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c986355dce0582e23a6589902b31b831143f7b2a' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\tutorial\\Windows\\SSTap.tpl',
      1 => 1687671454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_6497d2a06287c9_42707040 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Windows 使用教程 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/css/client/metron-icon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/plugins/tutorial/lightbox/lightbox.min.css" rel="stylesheet" >
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Windows 使用教程</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2 class="font-weight-bold">SSR客户端：</h2>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row pl-5 pr-5">
                                                    <div class="row">
                                                        <a href="https://wwi.lanzoui.com/iPZrfipd20d" class="btn btn-pill btn-ssr  mr-4" target="_blank">&nbsp;&nbsp;<i class="metron-ssr text-white"></i>下载地址</a>
                                                        <a href="/user/tutorial?os=Windows&client=SSR" class="btn btn-pill btn-alipay " >&nbsp;&nbsp;<i class="metron-quantumultx text-white"></i>使用教程</a>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2 class="font-weight-bold">V2ray客户端：</h2>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row pl-5 pr-5">
                                                    <div class="row">
                                                        <a href="https://wwi.lanzoui.com/icv7Idzymkj" class="btn btn-pill btn-v2ray  mr-4" target="_blank">&nbsp;&nbsp;<i class="metron-v2rayng text-white"></i>下载地址</a>
                                                        <a href="http://down.suying666.org/j/Win-V2Ray.mp4" class="btn btn-pill btn-alipay " target="_blank">&nbsp;&nbsp;<i class="metron-quantumultx text-white"></i>视频教程</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2 class="font-weight-bold">订阅链接：</h2>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row pl-5 pr-5">
                                                    <div class="row">
                                                        <a href="javascript:;" class="btn btn-pill btn-v2ray mb-4 mr-4  copy-text"  data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
">&nbsp;&nbsp;<i class="metron-ssr text-white"></i>复制 SSR 订阅链接</a>
                                                        <a href="javascript:;" class="btn btn-pill btn-v2ray copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray"];?>
" >&nbsp;&nbsp;<i class="metron-v2rayng text-white"></i>复制 V2Ray订阅链接</a>
                                                    </div>
                                                </div>
                                            </div>
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
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/plugins/tutorial/lightbox/lightbox.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
