<?php
/* Smarty version 3.1.28, created on 2016-05-03 02:19:55
  from "C:\xampp\htdocs\monitoring\application\views\admin\type\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5727eeab1ce037_78559402',
  'file_dependency' => 
  array (
    '79dc0a2da5f7adc0d830ba61a99d06e7aa3f6281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\type\\sidebar.tpl',
      1 => 1462234546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5727eeab1ce037_78559402 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'create'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/type'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Fault Type
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/type/create'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Create Fault Type</a>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && ($_smarty_tpl->tpl_vars['active']->value == 'list' || $_smarty_tpl->tpl_vars['active']->value == 'edit'))) {?>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/type'),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'list')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">
			List of Fault Type
		</a>
		<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/type/edit','src'=>$_smarty_tpl->tpl_vars['type']->value->id),$_smarty_tpl);?>
" class="list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>" style="border-radius: 0px;">Edit Fault Type</a>
		<?php }?>
	</div>
</div><?php }
}
