<?php
/* Smarty version 3.1.28, created on 2016-04-30 12:10:59
  from "C:\xampp\htdocs\monitoring\application\views\admin\nav_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572484b3221288_28122456',
  'file_dependency' => 
  array (
    '3d84c8484fd8a7606cbb170547709d7e0c937717' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\nav_bar.tpl',
      1 => 1462011049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572484b3221288_28122456 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
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
">SIMONGARSIS</a>
		</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/user'),$_smarty_tpl);?>
">Administrator</a></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher'),$_smarty_tpl);?>
">Teacher</a></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/student'),$_smarty_tpl);?>
">Student</a></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent'),$_smarty_tpl);?>
">Parents</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Master<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Faults</a></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/course'),$_smarty_tpl);?>
">Courses</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="<?php echo smarty_function_base_url(array('url'=>'admin/role'),$_smarty_tpl);?>
">User Roles</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Profil</a></li>
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
