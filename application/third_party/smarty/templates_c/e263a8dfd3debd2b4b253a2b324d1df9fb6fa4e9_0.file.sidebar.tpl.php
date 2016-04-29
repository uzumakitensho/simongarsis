<?php
/* Smarty version 3.1.28, created on 2016-04-28 16:06:53
  from "C:\xampp\htdocs\monitoring\application\views\admin\user\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572218fd6cdfe5_93728644',
  'file_dependency' => 
  array (
    'e263a8dfd3debd2b4b253a2b324d1df9fb6fa4e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\user\\sidebar.tpl',
      1 => 1461852411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572218fd6cdfe5_93728644 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'create'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create User</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'edit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/edit','src'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit User</a>
		<?php }?>
	</div>
</div><?php }
}
