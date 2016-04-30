<?php
/* Smarty version 3.1.28, created on 2016-04-30 12:21:01
  from "C:\xampp\htdocs\monitoring\application\views\admin\course\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5724870d8da2e4_37958940',
  'file_dependency' => 
  array (
    '690f84cc26bb1b1578caa131b7bdf2b5d36d3e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\course\\sidebar.tpl',
      1 => 1462011022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5724870d8da2e4_37958940 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'create'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/course'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Course
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/course/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create Course</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'edit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/course'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Course
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/course/edit','src'=>$_smarty_tpl->tpl_vars['course']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit Course</a>
		<?php }?>
	</div>
</div><?php }
}
