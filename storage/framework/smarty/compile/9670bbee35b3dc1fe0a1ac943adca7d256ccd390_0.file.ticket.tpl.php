<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:58:12
  from 'D:\XProject\SSPanel\resources\views\metron\user\ticket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64971294d4c398_53533051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9670bbee35b3dc1fe0a1ac943adca7d256ccd390' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\user\\ticket.tpl',
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
  ),
),false)) {
function content_64971294d4c398_53533051 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>工单系统 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
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
                                        <h2 class="text-white font-weight-bold my-2 mr-5">工单系统</h2>
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
                                            <div class="card-header flex-wrap border-0 pt-6">
                                                <div class="card-title">
                                                    <h3 class="card-label text-primary"><strong>工单列表</strong>
                                                    <span class="d-block text-muted pt-2 font-size-sm">您所发起的工单支持列表</span></h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <a href="JavaScript:;" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#ticket-create-modal">
                                                        <span class="svg-icon svg-icon-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        创建工单
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="card-body">
                                                <div class="mb-7">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 my-2 my-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <label class="mr-3 mb-0 d-none d-md-block">状态:</label>
                                                                        <select class="form-control" id="ticket_status">
                                                                            <option value="">全部</option>
                                                                            <option value="1">处理中</option>
                                                                            <option value="0">已完成</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="datatable datatable-bordered datatable-head-custom" id="ajax_ticket_data"></div>
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

<!-- modal -->
<div class="modal fade" id="ticket-create-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['text_title'];?>
"><strong>创建新工单</strong></h5>
            </div>
            <form id="ticket-create-text-form">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="form-control-label">标题</label>
                    <input type="text" class="form-control" id="ticket-create-title-text" name="ticket_create_title_text" placeholder="请输入标题">
                </div>
                <div class="form-group d-block">
                    <label for="message-text" class="form-control-label">内容</label>
                    <div id="ticket_reply_editor" class="border-0" style="height: 150px"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="ticket-create-click" onclick="ticket.create();">确定</button>
                <button type="button" class="btn <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['modal']['btn_close'];?>
" data-dismiss="modal">取消</button>
            </div>
            </form>
        </div>
    </div>
</div>

    </body>
</html><?php }
}
