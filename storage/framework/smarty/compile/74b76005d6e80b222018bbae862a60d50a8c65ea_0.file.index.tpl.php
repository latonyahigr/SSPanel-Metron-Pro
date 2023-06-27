<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:56:52
  from '/www/wwwroot/SSPanel/resources/views/metron/admin/code/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929f344e7917_78193285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b76005d6e80b222018bbae862a60d50a8c65ea' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/admin/code/index.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_64929f344e7917_78193285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">充值码<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_donate'] === true) {?>与捐赠<?php }?>管理</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中金额流转记录。</p>
                            <p>
                                今日流水：￥<?php echo $_smarty_tpl->tpl_vars['user']->value->calIncome("today");?>
<br/>
                                昨日流水：￥<?php echo $_smarty_tpl->tpl_vars['user']->value->calIncome("yesterday");?>
<br/>
                                这月流水：￥<?php echo $_smarty_tpl->tpl_vars['user']->value->calIncome("this month");?>
<br/>
                                上月流水：￥<?php echo $_smarty_tpl->tpl_vars['user']->value->calIncome("last month");?>
<br/>
                                总共流水：￥<?php echo $_smarty_tpl->tpl_vars['user']->value->calIncome("total");?>

                            </p>
                            <p>显示表项:
                                <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>


                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light"
                           href="/admin/code/create">+</a>

                    </div>
                </div>


                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light"
                           data-toggle="dropdown"><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
                        <div class="fbtn-dropup">
                            <a class="fbtn fbtn-brand waves-attach waves-circle waves-light"
                               href="/admin/code/create"><span class="fbtn-text fbtn-text-left">充值码</span><span
                                        class="icon">code</span></a> <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_donate'] === true) {?>
                                <a class="fbtn fbtn-green waves-attach waves-circle waves-light"
                                   href="/admin/donate/create"><span class="fbtn-text fbtn-text-left">捐赠和支出</span><span
                                            class="icon">attach_money</span></a>
                            <?php }?>
                        </div>
                    </div>
                </div>


        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    $(document).ready(function () {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    });
<?php echo '</script'; ?>
>
<?php }
}
