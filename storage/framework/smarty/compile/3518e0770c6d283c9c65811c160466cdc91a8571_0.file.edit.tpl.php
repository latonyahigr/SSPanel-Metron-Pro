<?php
/* Smarty version 3.1.48, created on 2023-06-23 23:55:13
  from '/www/wwwroot/SSPanel/resources/views/metron/admin/config/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6495c0616eed30_73347874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3518e0770c6d283c9c65811c160466cdc91a8571' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/admin/config/edit.tpl',
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
function content_6495c0616eed30_73347874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">配置编辑 #<?php echo $_smarty_tpl->tpl_vars['edit_config']->value->id;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="key">配置名</label>
                                <input class="form-control maxwidth-edit" id="key" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit_config']->value->key;?>
" readonly>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="name">配置名称</label>
                                <input class="form-control maxwidth-edit" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit_config']->value->name;?>
" readonly>
                            </div>

                        <?php if ($_smarty_tpl->tpl_vars['edit_config']->value->comment != '') {?>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="comment">配置描述</label>
                                <textarea class="form-control maxwidth-edit" id="comment" rows="4" readonly><?php echo $_smarty_tpl->tpl_vars['edit_config']->value->comment;?>
</textarea>
                            </div>
                        <?php }?>

                        <?php if (strpos($_smarty_tpl->tpl_vars['edit_config']->value->key,'.bool.') === false) {?>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="value">配置值</label>
                                <textarea class="form-control maxwidth-edit" id="value" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit_config']->value->getValue();?>
</textarea>
                            </div>
                        <?php } else { ?>
                            <div class="form-group form-group-label">
                                <label for="value">
                                    <label class="floating-label" for="value">配置开关</label>
                                    <select id="value" class="form-control maxwidth-edit" name="value">
                                        <option value="0" <?php if (!$_smarty_tpl->tpl_vars['edit_config']->value->getValue()) {?>selected<?php }?>>关闭</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['edit_config']->value->getValue()) {?>selected<?php }?>>开启</option>
                                    </select>
                                </label>
                            </div>
                        <?php }?>

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
                                                class="btn btn-block btn-brand waves-attach waves-light">修改
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    window.addEventListener('load', () => {
        function submit() {
            $.ajax({
                type: "PUT",
                url: "/admin/config/update/<?php echo $_smarty_tpl->tpl_vars['edit_config']->value->key;?>
",
                dataType: "json",
                data: {
                    value: $$getValue('value')
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
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }

        $("html").keydown(event => {
            if (event.keyCode == 13) {
                submit();
            }
        });

        $$.getElementById('submit').addEventListener('click', submit);
    })
<?php echo '</script'; ?>
>
<?php }
}
