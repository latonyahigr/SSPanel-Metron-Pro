<?php
/* Smarty version 3.1.48, created on 2023-06-25 12:53:59
  from 'D:\XProject\SSPanel\resources\views\metron\user\tutorial\Windows\Clash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497c8676db290_85154255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293bb11e3be0be8bd58ba9a6245cac7a601e9193' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\tutorial\\Windows\\Clash.tpl',
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
function content_6497c8676db290_85154255 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">Clash for Windows 使用教程</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">

                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">

                                <!-- 开始 :: 教程内容 -->
                                <div class="row" data-sticky-container>
                                    <div class="col-12">
                                        <div class="card card-custom gutter-b <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                            <div class="card-header">
                                                <div class="card-title">
                                                </div>
                                            </div>
                                            <div class="card-body">

<!-- 开始 :: 内容段落 1 -->
                                                <div class="row p-5">

                                                    <!-- 开始 :: 段落文本区 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <!-- 开始 :: 段落标题 -->
                                                        <p class="font-size-h1 pb-5"><strong>0. 简介</strong></p>
                                                        <!-- 结束 :: 段落标题 -->
                                                        <div class="example-preview">
                                                            <p><code>Clash</code>是一款用 Go语言 开发的支持 Linux/MacOS/Windows/Android 等多平台的代理工具，支持 ss/v2ray（不支持 ssr），支持规则分流（类似于 Surge 的配置）。</p>
                                                            <p>由于客户端长期更新中可能出现界面或功能与教程不符，我们建议您把本教程仅作为参考，具体需要根据自己使用过程中熟悉了解。</p>
                                                            <p><code>ClashR</code>则在Clash的基础上增加对SSR的支持</p>
                                                            <code>Clash for Windows 仅支持Windows 64位系统，32位系统请选用其他客户端</code>
                                                        </div>
                                                    </div>
                                                    <!-- 结束 :: 段落文本区 -->

                                                    <!-- 开始 :: 图片 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <!-- 图片点击打开的灯箱高清图 -->
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png" data-lightbox="images">
                                                        <!-- 页面显示的图片缩略图 -->
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png"/></a>
                                                    </div>
                                                    <!-- 结束 :: 图片 -->

                                                </div>
<!-- 结束 :: 内容段落 1 -->

                                                <!-- 开始 :: 分割线 -->
                                                <div class="separator separator-dashed separator-border-4"></div>
                                                <!-- 结束 :: 分割线 -->

<!-- 开始 :: 内容段落 2 -->
                                                <div class="row p-5">
                                                    <!-- 段落内容 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <!-- 开始 :: 段落标题 -->
                                                        <p class="font-size-h1 pb-5"><strong>1. 下载客户端</strong></p>
                                                        <!-- 结束 :: 段落标题 -->
                                                        <!-- 开始 :: 客户端下载按钮 -->
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['client_windows']['clash']['down'];?>
" class="btn btn-pill btn-clash mb-4" target="_blank">&nbsp;&nbsp;<i class="metron-clash text-white"></i>下载 Clash 客户端</a>&nbsp;&nbsp;&nbsp;
                                                        <!-- 结束 :: 客户端下载按钮 -->
                                                        <div class="h6 pt-2">下载安装后从桌面打开<br />或在目录中打开 <code>Clash for Windows.exe</code></div>
                                                    </div>
                                                    <!-- 开始 :: 图片 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png"/></a>
                                                    </div>
                                                    <!-- 结束 :: 图片 -->
                                                </div>
<!-- 结束 :: 内容段落 2 -->

                                                <!-- 开始 :: 分割线 -->
                                                <div class="separator separator-dashed separator-border-4"></div>
                                                <!-- 结束 :: 分割线 -->

<!-- 开始 :: 内容段落 3 -->
                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <!-- 开始 :: 段落标题 -->
                                                        <p class="font-size-h1 pb-5"><strong>2. 设置订阅地址</strong></p>
                                                        <!-- 结束 :: 段落标题 -->
                                                        <!-- 开始 :: 订阅按钮 -->
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
                                                        <!-- 结束 :: 订阅按钮 -->
                                                        <div class="h6 pt-2">点击上方按钮一键导入节点配置到Clash/ClashR</div>
                                                        <div class="h6 pt-2">导入成功后， <code>Profiles</code> 界面会多出一个配置选项卡</div>
                                                        <div class="h6 pt-2">点击选中刚刚导入的配置选项卡</div>
                                                        <div class="h6 pt-2">如果弹出配置错误提示，请重启客户端并重新选中刚刚导入的配置</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png"/></a>
                                                    </div>
                                                </div>
<!-- 结束 :: 内容段落 3 -->

                                                <!-- 开始 :: 分割线 -->
                                                <div class="separator separator-dashed separator-border-4"></div>
                                                <!-- 结束 :: 分割线 -->

<!-- 开始 :: 内容段落 4 -->
                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <!-- 开始 :: 段落标题 -->
                                                        <p class="font-size-h1 pb-5"><strong>3. 选择节点</strong></p>
                                                        <!-- 结束 :: 段落标题 -->
                                                        <div class="h6 pt-2">点击 <code>Profiles</code> 选项切换到代理节点界面</div>
                                                        <div class="h6 pt-2">根据规则链路设置相应的节点</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png"/></a>
                                                    </div>
                                                </div>
<!-- 结束 :: 内容段落 4 -->

                                                <!-- 开始 :: 分割线 -->
                                                <div class="separator separator-dashed separator-border-4"></div>
                                                <!-- 结束 :: 分割线 -->

<!-- 开始 :: 内容段落 5 -->
                                                <div class="row p-5">
                                                    <div class="col-sm-12 col-md-12 col-lg-7 pb-5">
                                                        <!-- 开始 :: 段落标题 -->
                                                        <p class="font-size-h1 pb-5"><strong>4. 开启代理</strong></p>
                                                        <!-- 结束 :: 段落标题 -->
                                                        <div class="h6 pt-2">点击 <code>General</code> 选项切换到通用界面</div>
                                                        <div class="h6 pt-2">打开 <code>System Proxy</code> 开关；其他保持默认即可。</div>
                                                        <div class="h6 pt-2">一切准备就绪~~~</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                                        <a class="image-popup-no-margins" href="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png" data-lightbox="images">
                                                        <img class="rounded-lg" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['metron']->value['assets_url'];?>
/media/tutorial/windows/clashr/clashr.png"/></a>
                                                    </div>
                                                </div>
<!-- 结束 :: 内容段落 5 -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 结束 :: 教程内容 -->

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
