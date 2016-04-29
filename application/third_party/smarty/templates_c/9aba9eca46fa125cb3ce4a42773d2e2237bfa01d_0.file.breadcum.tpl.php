<?php
/* Smarty version 3.1.28, created on 2016-04-26 17:33:40
  from "C:\xampp\htdocs\monitoring\application\views\admin\home\breadcum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571f8a5466ad97_10458524',
  'file_dependency' => 
  array (
    '9aba9eca46fa125cb3ce4a42773d2e2237bfa01d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\home\\breadcum.tpl',
      1 => 1461398658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571f8a5466ad97_10458524 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
?>
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
">Admin</a></li>
	<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'home')) {?> <?php echo 'active';?>
 <?php }?>">Home</li>
</ol><?php }
}
