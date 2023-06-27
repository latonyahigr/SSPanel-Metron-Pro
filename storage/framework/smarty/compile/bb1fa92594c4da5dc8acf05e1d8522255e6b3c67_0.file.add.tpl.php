<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:38:51
  from '/www/wwwroot/SSPanel/resources/views/metron/admin/detect/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929afb315473_71791290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb1fa92594c4da5dc8acf05e1d8522255e6b3c67' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/admin/detect/add.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_64929afb315473_71791290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading"> 添加规则</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">规则名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="text">规则描述</label>
                                    <input class="form-control maxwidth-edit" id="text" name="text" type="text">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="regex">规则正则表达式</label>
                                    <input class="form-control maxwidth-edit" id="regex" name="regex" type="text">
                                </div>

                                <div class="form-group form-group-label">
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="type">规则类型</label>
                                        <select id="type" class="form-control maxwidth-edit" name="type">
                                            <option value="1">数据包明文匹配</option>
                                            <option value="2">数据包 hex 匹配</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">添加
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>

    
    $('#main_form').validate({
        rules: {
            name: {required: true},
            text: {required: true},
            regex: {required: true}
        },
        
        submitHandler: function () {
            
            $.ajax({
                type: "POST",
                url: "/admin/detect",
                dataType: "json",
                data: {
                    name: $$getValue("name"),
                    text: $$getValue("text"),
                    regex: $$getValue("regex"),
                    type: $$getValue("type")
                },
                
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: data => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 发生错误了。`;
                }
            });
        }
    });

<?php echo '</script'; ?>
>

<?php }
}
