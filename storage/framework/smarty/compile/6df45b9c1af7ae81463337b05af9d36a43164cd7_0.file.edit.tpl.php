<?php
/* Smarty version 3.1.48, created on 2023-06-25 11:44:06
  from 'D:\XProject\SSPanel\resources\views\metron\admin\help\class\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497b806641153_97738929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df45b9c1af7ae81463337b05af9d36a43164cd7' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\admin\\help\\class\\edit.tpl',
      1 => 1687664643,
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
function content_6497b806641153_97738929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑分类</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="title">分类名称</label>
                                <input class="form-control maxwidth-edit" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['helpc']->value->name;?>
">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="title">分类描述</label>
                                <input class="form-control maxwidth-edit" id="desc" name="desc" type="text" value="<?php echo $_smarty_tpl->tpl_vars['helpc']->value->descs;?>
">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="ico">ico图标</label>
                                <input class="form-control maxwidth-edit" id="ico" name="ico" type="text" value="<?php echo $_smarty_tpl->tpl_vars['helpc']->value->li;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="sort">排序</label>
                                <input class="form-control maxwidth-edit" id="sort" name="sort" type="text" value="<?php echo $_smarty_tpl->tpl_vars['helpc']->value->sort;?>
">
                            </div>
                            <p class="form-control-guide"><i class="material-icons">info</i>数组越大越靠前(最多5位数)</p>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">

                                        <div class="form-group form-group-label">
                                            <div class="checkbox switch">
                                                <label for="is_1ji">
                                                    <input class="access-hide" id="is_1ji" type="radio" <?php if ($_smarty_tpl->tpl_vars['helpc']->value->upid == 0) {?>checked='checked'<?php }?> name="is_dji" value="1"><span class="switch-toggle"></span>设置为一级分类
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-label">
                                            <div class="checkbox switch">
                                                <label for="is_2ji">
                                                    <input class="access-hide" id="is_2ji" type="radio" <?php if ($_smarty_tpl->tpl_vars['helpc']->value->upid > 0) {?>checked='checked'<?php }?> name="is_dji" value="2"><span class="switch-toggle"></span>设置为二级分类
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group form-group-label" id="get1jiclass" <?php if ($_smarty_tpl->tpl_vars['helpc']->value->upid == 0) {?>style="display:none"<?php } else { ?>style="display:block"<?php }?>>
                                            <label for="class_1">
                                                <label class="floating-label" for="class_1">归属于哪个一级分类</label>
                                                <select id="class_1" class="form-control maxwidth-edit" name="class_1">
                                                        <option value="0">请选择一级分类</option>
                                                </select>
                                            </label>
                                            <p class="form-control-guide"><i class="material-icons">info</i>添加为二级分类时,需要为它指定关联的一级分类</p>
                                        </div>

                                        <div class="form-group form-group-label">
                                            <div class="checkbox switch">
                                                <label for="pageshow">
                                                    <input class="access-hide" id="pageshow" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['helpc']->value->pageshow == 1) {?>checked='checked'<?php }?> name="pageshow"><span class="switch-toggle"></span>页面是否显示该分类以及文档
                                                </label>
                                                <p class="form-control-guide"><i class="material-icons">info</i>开启: 用户界面的文档中心会显示此分类以及此分类下的文档</p>
                                                <p class="form-control-guide"><i class="material-icons">info</i>关闭: 用户界面的文档中心隐藏此分类,包括此分类下的文档</p>
                                            </div>
                                        </div>

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
echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['helpc']->value->upid > 0) {?> getclass();<?php }?>
$('input:radio[name="is_dji"]').click(function(){
	var checkValue = $('input:radio[name="is_dji"]:checked').val(); 
    var get1ji = document.getElementById("get1jiclass");
	if (checkValue == 2) {
        get1ji.style.display="block";
        getclass();
    } else {
        get1ji.style.display="none";
    }
});

function getclass() {
    $("#class_1").empty();
    $("#class_1").append("<option value='0'>正在获取分类...</option>");
    $.ajax({
        type: 'GET',
        url: '/admin/help/document/gethelpclass',
        dataType: "json",
        data: { },
        success: data => {
            $("#class_1").empty();
            if (data.ret === 0){
                $("#class_1").append("<option value='0'>"+data.msg+"</option>");
            } else {
                $("#class_1").append("<option value='0'>请选择一级分类</option>");
                for(var i=0; i<data.length; i++) {
                    if (<?php echo $_smarty_tpl->tpl_vars['helpc']->value->upid;?>
 == data[i].id) {
                        $("#class_1").append('<option value='+data[i].id+' selected="selected">#'+data[i].id + ' - '+data[i].name+'</option>');
                    } else {
                        $("#class_1").append('<option value='+data[i].id+'>#'+data[i].id + ' - '+data[i].name+'</option>');
                    }
                }
            }
        },
        error: jqXHR => {
            $("#result").modal();
            $$.getElementById('msg').innerHTML = `发生错误：${ jqXHR.status }`;
        }
    });
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    window.addEventListener('load', () => {
        function submit() {

            if ($$.getElementById('pageshow').checked) {
                var pageshow = 1;
            } else {
                var pageshow = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/help/class/<?php echo $_smarty_tpl->tpl_vars['helpc']->value->id;?>
",
                dataType: "json",
                data: {
                    name: $$getValue('title'),
                    desc: $$getValue('desc'),
                    classji: $('input:radio[name="is_dji"]:checked').val(),
                    class1ji: $$getValue('class_1'),
                    pageshow: pageshow,
                    ico: $$getValue('ico'),
                    sort: $$getValue('sort'),
                },
                success: data => {
                    if (data.ret === 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else if (data.ret === 2) {
                        submit(data.msg);
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

        $$.getElementById('submit').addEventListener('click', () => {
            submit();
        });
    });
    
    function getClass() {

    }

<?php echo '</script'; ?>
>
<?php }
}
