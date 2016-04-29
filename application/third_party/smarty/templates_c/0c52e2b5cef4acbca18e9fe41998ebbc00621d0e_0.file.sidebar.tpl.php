<?php
/* Smarty version 3.1.28, created on 2016-04-29 17:31:22
  from "C:\xampp\htdocs\monitoring\application\views\admin\student\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57237e4ae9ccb3_88480825',
  'file_dependency' => 
  array (
    '0c52e2b5cef4acbca18e9fe41998ebbc00621d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\student\\sidebar.tpl',
      1 => 1461943603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57237e4ae9ccb3_88480825 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'create'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Student
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create Student</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'edit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Student
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/edit','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit Student</a>
		<?php }?>
	</div>
</div><?php }
}
