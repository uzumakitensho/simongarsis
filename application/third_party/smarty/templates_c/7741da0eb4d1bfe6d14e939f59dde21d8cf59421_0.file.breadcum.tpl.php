<?php
/* Smarty version 3.1.28, created on 2016-04-23 12:03:48
  from "C:\xampp\htdocs\ci\application\views\admin\home\breadcum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b48846937f0_67967763',
  'file_dependency' => 
  array (
    '7741da0eb4d1bfe6d14e939f59dde21d8cf59421' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\home\\breadcum.tpl',
      1 => 1461398658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b48846937f0_67967763 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
">Admin</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'home')) {?> <?php echo 'active';?>
 <?php }?>">Home</li>
</ol><?php }
}
