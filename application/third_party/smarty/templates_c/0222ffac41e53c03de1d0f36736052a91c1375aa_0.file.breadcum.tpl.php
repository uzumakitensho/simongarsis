<?php
/* Smarty version 3.1.28, created on 2016-05-01 07:34:44
  from "C:\xampp\htdocs\monitoring\application\views\admin\year\breadcum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57259574c1e0b6_88894873',
  'file_dependency' => 
  array (
    '0222ffac41e53c03de1d0f36736052a91c1375aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\year\\breadcum.tpl',
      1 => 1462080877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57259574c1e0b6_88894873 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
">Admin</a></li>
	<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Ahome')) {?>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Ahome')) {?> <?php echo 'active';?>
 <?php }?>">Academic Year</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Acreate')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/year'),$_smarty_tpl);?>
">Academic Year</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Acreate')) {?> <?php echo 'active';?>
 <?php }?>">Create</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Aedit')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/year'),$_smarty_tpl);?>
">Academic Year</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Aedit')) {?> <?php echo 'active';?>
 <?php }?>">Edit</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Adetail')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/year'),$_smarty_tpl);?>
">Academic Year</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Adetail')) {?> <?php echo 'active';?>
 <?php }?>">Detail</li>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Shome')) {?>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Shome')) {?> <?php echo 'active';?>
 <?php }?>">Semester</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Screate')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/semester'),$_smarty_tpl);?>
">Semester</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Screate')) {?> <?php echo 'active';?>
 <?php }?>">Create</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Sedit')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/semester'),$_smarty_tpl);?>
">Semester</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Sedit')) {?> <?php echo 'active';?>
 <?php }?>">Edit</li>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Sdetail')) {?>
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/semester'),$_smarty_tpl);?>
">Semester</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'Sdetail')) {?> <?php echo 'active';?>
 <?php }?>">Detail</li>
	<?php }?>
</ol><?php }
}
