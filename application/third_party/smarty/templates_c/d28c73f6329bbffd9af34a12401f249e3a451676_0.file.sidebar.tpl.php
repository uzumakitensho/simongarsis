<?php
/* Smarty version 3.1.28, created on 2016-05-01 08:23:48
  from "C:\xampp\htdocs\monitoring\application\views\admin\year\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5725a0f464e6f5_11347768',
  'file_dependency' => 
  array (
    'd28c73f6329bbffd9af34a12401f249e3a451676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\year\\sidebar.tpl',
      1 => 1462083826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5725a0f464e6f5_11347768 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'Alist' || $_smarty_tpl->tpl_vars['active']->value == 'Slist' || $_smarty_tpl->tpl_vars['active']->value == 'Acreate'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/year'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Alist')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Academic Year
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/year/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Acreate')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create Academic Year</a>
		<hr>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/semester'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Slist')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Semester
		</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'Alist' || $_smarty_tpl->tpl_vars['active']->value == 'Slist' || $_smarty_tpl->tpl_vars['active']->value == 'Aedit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/year'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Alist')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Academic Year
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/year/edit','src'=>$_smarty_tpl->tpl_vars['year']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Aedit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit Academic Year</a>
		<hr>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/semester'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Slist')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Semester
		</a>
		<?php }?>
	</div>
</div><?php }
}
