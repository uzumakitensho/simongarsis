<?php
/* Smarty version 3.1.28, created on 2016-04-23 09:23:31
  from "C:\xampp\htdocs\ci\application\views\admin\nav_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b22f3313dc6_54224039',
  'file_dependency' => 
  array (
    '388acda17a8431ef5b5fbc9fba5b49ac0eb8f84b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\nav_bar.tpl',
      1 => 1461396206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b22f3313dc6_54224039 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
?>
<header class="navbar navbar-default" style="margin: 0; border-radius: 0px;">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo smarty_function_base_url(array('url'=>'admin'),$_smarty_tpl);?>
">Brand</a>
		</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'users')) {?> <?php echo 'active';?>
 <?php }?>"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/user'),$_smarty_tpl);?>
">Users<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'users')) {?> <?php echo "<span class='sr-only'>(current)</span>";?>
 <?php }?></a></li>
				<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'posts')) {?> <?php echo 'active';?>
 <?php }?>"><a href="#">Posts<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'posts')) {?> <?php echo "<span class='sr-only'>(current)</span>";?>
 <?php }?></a></li>
				<li class="<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'tags')) {?> <?php echo 'active';?>
 <?php }?>"><a href="#">Tags<?php if ((isset($_smarty_tpl->tpl_vars['active']->value) && $_smarty_tpl->tpl_vars['active']->value == 'tags')) {?> <?php echo "<span class='sr-only'>(current)</span>";?>
 <?php }?></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" style="color: gray;"><?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
</a></li>
						<li><a href="#">Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/logout'),$_smarty_tpl);?>
">Logout</a></li>
					</ul>
				</li>
			</ul>
			
			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</header><?php }
}
