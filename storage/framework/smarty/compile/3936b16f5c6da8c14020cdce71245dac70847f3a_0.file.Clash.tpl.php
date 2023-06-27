<?php
/* Smarty version 3.1.48, created on 2023-06-25 13:51:11
  from 'D:\XProject\SSPanel\resources\views\metron\user\tutorial\MacOS\Clash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497d5cfb09464_49556957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3936b16f5c6da8c14020cdce71245dac70847f3a' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\tutorial\\MacOS\\Clash.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/global/head.tpl' => 1,
    'file:include/global/menu.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
    'file:include/global/import_sublink.tpl' => 1,
  ),
),false)) {
function content_6497d5cfb09464_49556957 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Clash 使用教程 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Clash for Mac 使用教程</h2>
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
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <p class="font-size-h1 pb-5"><strong>0. 简介</strong></p>
                                                        <div class="example-preview">
                                                            <p><code>Clash</code>是一款用 Go语言 开发的支持 Linux/MacOS/Windows/Android 等多平台的代理工具，支持 ss/v2ray（不支持 ssr），支持规则分流（类似于 Surge 的配置）。</p>
                                                            <?php if ($_smarty_tpl->tpl_vars['metron']->value['dw_mac_clashr'] != '') {?>
                                                            <p>而本页面提供的<code>Clash(R)</code>则是基于<code>Clash</code>开发，从而支持SSR节点，请注意SS和SSR是有区别的！</p>
                                                            <p>使用该客户端可同时支持 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 提供的SSR节点和V2Ray节点。</p>
                                                            <?php }?>
                                                            <p>由于客户端长期更新中可能出现界面或功能与教程不符，我们建议您把本教程仅作为参考，具体需要根据自己使用过程中熟悉了解。</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/clashr.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/clashr.png"/></a>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed separator-border-4"></div>

                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <p class="font-size-h1 pb-5"><strong>1. 下载安装客户端</strong></p>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['client_macos']['clash']['down'];?>
" class="btn btn-pill btn-clash mb-4">&nbsp;&nbsp;<i class="metron-clash text-white"></i>下载 Clash 客户端</a>&nbsp;&nbsp;&nbsp;
                                                        <p class="mb-2">下载并进行拖动安装</p>
                                                        <p class="mb-2">在启动台开启应用,如有弹窗务必点确定,有密码就输入</p>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/01.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/01.png"/></a>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed separator-border-4"></div>

                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <p class="font-size-h1 pb-5"><strong>2. 设置订阅地址</strong></p>
                                                        <?php if (in_array('clash',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-clash dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;<i class="metron-clash text-white"></i>Clash 订阅配置&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
">复制 Clash 订阅</button>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('clash')">一键导入 Clash</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <p class="mb-2">点击上方按钮一键导入节点配置到Clash</p>
                                                        <p class="mb-2">Config Name 填入 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</p>
                                                        <p class="mb-2">点击确定，如果弹出配置错误信息，请重启Clash 后重试。(请确保您已购买套餐)</p>
                                                        <br />

                                                        <div class="alert alert-custom alert-outline-primary fade show mb-5" role="alert">
                                                            <div class="alert-icon">
                                                                <i class="flaticon-warning"></i>
                                                            </div>
                                                            <div class="alert-text">
                                                                <p class="mb-2">无法一键导入? 试试手动设置订阅</p>
                                                                <p class="mb-2">依次点击 <code>配置</code> - <code>托管配置</code> - <code>管理</code> - <code>添加</code></p>
                                                                <p class="mb-2">将订阅地址粘贴到 URL 一栏, Config Name 填入 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 - 确定</p>
                                                            </div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="关">
                                                                    <span aria-hidden="true">
                                                                        <i class="ki ki-close"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/02.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/02.png"/></a>
                                                    </div>
                                                </div>

                                                <div class="separator separator-dashed separator-border-4"></div>

                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <p class="font-size-h1 pb-5"><strong>3. 开启代理</strong></p>
                                                        <p class="mb-2">点击勾选 <code>设置为系统代理</code> 开启代理</p>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/03.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/mac/clashr/03.png"/></a>
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
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/import_sublink.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/plugins/tutorial/lightbox/lightbox.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
