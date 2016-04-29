<?php
/* Smarty version 3.1.28, created on 2016-04-09 20:06:25
  from "C:\xampp\htdocs\ci\application\views\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570944a1084269_62634061',
  'file_dependency' => 
  array (
    'ebde8113599f133d69bcdf13483fbd55869cea89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\master_layout.tpl',
      1 => 1460213897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570944a1084269_62634061 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Blogs | Dashboard</title>

    <!-- Bootstrap -->
    <link href="<?php  echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
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
					<a class="navbar-brand" href="<?php  echo base_url('admin'); ?>">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</header>
		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_557570944a0f1e6b2_06695010',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_21346570944a0f263c7_37392370',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_3315570944a0f2e0c4_68592911',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			</div>
		</div>
		
		<footer class="navbar navbar-default" style="margin-top:20px; margin-bottom:0px; border-radius: 0px;">
			<div class="container-fluid">
				<p class="navbar-text">Signed in as Hafid Afridian. Powered by Smarty <?php echo '3.1.28';?>
.</p>
			</div>
		</footer>
		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_15792570944a106cb68_92335573',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<?php echo '<script'; ?>
 src="<?php  echo base_url('assets/js/jquery-1.12.3.min.js');?>"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php  echo base_url('assets/js/bootstrap.min.js');?>"><?php echo '</script'; ?>
>
  </body>
</html><?php }
/* {block 'breadcrumb'}  file:master_layout.tpl */
function block_557570944a0f1e6b2_06695010($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:master_layout.tpl */
function block_21346570944a0f263c7_37392370($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:master_layout.tpl */
function block_3315570944a0f2e0c4_68592911($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'modal'}  file:master_layout.tpl */
function block_15792570944a106cb68_92335573($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'modal'} */
}
