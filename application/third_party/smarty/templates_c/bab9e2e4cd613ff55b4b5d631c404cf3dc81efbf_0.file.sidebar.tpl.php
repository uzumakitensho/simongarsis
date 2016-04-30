<?php
/* Smarty version 3.1.28, created on 2016-04-30 18:48:42
  from "C:\xampp\htdocs\monitoring\application\views\admin\class\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5724e1eac056c4_39496572',
  'file_dependency' => 
  array (
    'bab9e2e4cd613ff55b4b5d631c404cf3dc81efbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\class\\sidebar.tpl',
      1 => 1462034757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5724e1eac056c4_39496572 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'create'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/class'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Class
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/class/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create Class</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'edit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/class'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Class
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/class/edit','src'=>$_smarty_tpl->tpl_vars['class']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit Class</a>
		<?php }?>
	</div>
</div><?php }
}
