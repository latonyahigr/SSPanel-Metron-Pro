<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:37:50
  from '/www/wwwroot/SSPanel/resources/views/metron/include/index/sub_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929abe954a39_65652817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4444c15f581076918e5f338aadecb7242be272d8' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/include/index/sub_button.tpl',
      1 => 1687329466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64929abe954a39_65652817 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                        <?php if (in_array('ssr',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- SSR订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-surge dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="metron-ssr1 text-white"></i>&nbsp;&nbsp;复制 SSR 订阅链接&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
">复制 SSR 订阅</button>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('ssr')">一键导入 SSR</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('clash',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Clash订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-clash dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="metron-clash text-white"></i>&nbsp;&nbsp;Clash 订阅&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
">复制 Clash 订阅</button>
                                                                <div class="dropdown-divider">
                                                                </div>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('clash')">一键导入 Clash</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('surge',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Surge订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-surge dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="metron-surge text-white"></i>&nbsp;&nbsp;Surge 订阅&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge2"];?>
">复制 Surge 2 节点订阅</button>
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge3"];?>
">复制 Surge 3 节点订阅</button>
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge4"];?>
">复制 Surge 4 节点订阅</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('shadowrocket',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Shadowrocket订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-shadowrocket dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="metron-shadowrocket text-white"></i>&nbsp;&nbsp;Shadowrocket 订阅&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item" href="##" onclick="qrcodeSublink('shadowrocket')">扫描二维码添加订阅</button>
                                                                <div class="dropdown-divider"></div>
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
">复制 Shadowrocket 订阅</button>
                                                                <div class="dropdown-divider"></div>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('shadowrocket')">一键导入 Shadowrocket</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('stash',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                            <!-- Stash -->
                                                            <div class="btn-group mb-3 mr-3">
                                                                <button type="button" class="btn btn-pill btn-surfboard dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="text-white"></i>&nbsp;&nbsp;Stash 订阅&nbsp;&nbsp;</button>
                                                                <div class="dropdown-menu">
                                                                    <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["stash"];?>
">复制 Stash 订阅</button>
                                                                    <div class="dropdown-divider"></div>
                                                                    <button type="button" class="dropdown-item" href="##" onclick="importSublink('stash')">一键导入 Stash</button>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                        <?php if (in_array('quantumult',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Quantumult订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-quantumult dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="metron-quantumult text-white"></i>&nbsp;&nbsp;Quantumult 订阅&nbsp;&nbsp;</button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
">复制 SSR 节点订阅</button>
                                                                <button type="button" class="dropdown-item copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_v2"];?>
">复制 V2ray 节点订阅</button>
                                                                <div class="dropdown-divider"></div>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('quantumult')">一键导入 SSR 节点订阅</button>
                                                                <button type="button" class="dropdown-item" href="##" onclick="importSublink('quantumult_v2')">一键导入 V2Ray 节点订阅</button>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('quantumultx',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- QuantumultX订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-quantumultx copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumultx"];?>
"><i class="metron-quantumultx text-white"></i>&nbsp;&nbsp;复制 Quantumult X 订阅&nbsp;&nbsp;</button>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('v2ray',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- V2Ray订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-v2ray copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray"];?>
"><i class="metron-v2rayng text-white"></i>&nbsp;&nbsp;复制 V2Ray 订阅&nbsp;&nbsp;</button>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('v2ray',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                            <!-- V2Ray订阅 -->
                                                            <div class="btn-group mb-3 mr-3">
                                                                <button type="button" class="btn btn-pill btn-v2ray copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray_vless"];?>
"><i class="metron-v2rayng text-white"></i>&nbsp;&nbsp;复制 V2Ray-VLESS 订阅&nbsp;&nbsp;</button>
                                                            </div>
                                                        <?php }?>
                                                        <?php if (in_array('surfboard',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Surfboard订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-surfboard copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surfboard"];?>
"><i class="metron-surfboard text-white"></i>&nbsp;&nbsp;复制 Surfboard 订阅&nbsp;&nbsp;</button>
                                                        </div>
                                                        <?php }?>
                                                        <?php if (in_array('kitsunebi',$_smarty_tpl->tpl_vars['metron']->value['index_sub'])) {?>
                                                        <!-- Kitsunebi订阅 -->
                                                        <div class="btn-group mb-3 mr-3">
                                                            <button type="button" class="btn btn-pill btn-kitsunebi copy-text" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["kitsunebi"];?>
"><i class="metron-kitsunebi text-white"></i>&nbsp;&nbsp;复制 Kitsunebi 订阅&nbsp;&nbsp;</button>
                                                        </div>
                                                        <?php }
}
}
