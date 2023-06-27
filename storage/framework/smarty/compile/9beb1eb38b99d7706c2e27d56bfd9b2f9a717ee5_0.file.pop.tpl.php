<?php
/* Smarty version 3.1.48, created on 2023-06-24 23:53:15
  from 'D:\XProject\SSPanel\resources\views\metron\include\index\pop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6497116bd02bd1_93871455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9beb1eb38b99d7706c2e27d56bfd9b2f9a717ee5' => 
    array (
      0 => 'D:\\XProject\\SSPanel\\resources\\views\\metron\\include\\index\\pop.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6497116bd02bd1_93871455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal-sticky modal-sticky-bottom-right" id="index-pop-modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-custom">
                <div class="card-header align-items-center px-4 py-3">
                    <div class="flex-grow-1">
                        <div class="text-primary font-size-h5 ml-5"><strong>重要通知</strong></div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo $_smarty_tpl->tpl_vars['metron']->value['pop_text'];?>

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
