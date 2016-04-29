<?php
/* Smarty version 3.1.28, created on 2016-04-29 19:20:04
  from "C:\xampp\htdocs\monitoring\application\views\admin\parent\breadcum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572397c46ad939_11536371',
  'file_dependency' => 
  array (
    '8ec188a9d13016521a3feba196b9bcb78f520853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\parent\\breadcum.tpl',
      1 => 1461949969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572397c46ad939_11536371 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
">Admin</a></li>
	<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'home')) {?>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'home')) {?> <?php echo 'active';?>
 <?php }?>">Parent</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent'),$_smarty_tpl);?>
">Parent</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'create')) {?> <?php echo 'active';?>
 <?php }?>">Create</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent'),$_smarty_tpl);?>
">Parent</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'edit')) {?> <?php echo 'active';?>
 <?php }?>">Edit</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'detail')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent'),$_smarty_tpl);?>
">Parent</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'detail')) {?> <?php echo 'active';?>
 <?php }?>">Detail</li>
	<?php }?>
</ol><?php }
}
