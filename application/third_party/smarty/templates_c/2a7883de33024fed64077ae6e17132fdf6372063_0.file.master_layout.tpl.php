<?php
/* Smarty version 3.1.28, created on 2016-04-26 17:39:27
  from "C:\xampp\htdocs\monitoring\application\views\admin\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571f8bafe044c9_70664894',
  'file_dependency' => 
  array (
    '2a7883de33024fed64077ae6e17132fdf6372063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\master_layout.tpl',
      1 => 1461685164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571f8bafe044c9_70664894 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SMPS | Sistem Monitoring Pelanggaran Siswa</title>

    <!-- Bootstrap -->
    <link href="<?php echo smarty_function_base_url(array('url'=>'assets/css','src'=>'bootstrap.min.css'),$_smarty_tpl);?>
" rel="stylesheet">
  </head>
  <body>
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_26019571f8bafdd1835_90928449',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_8352571f8bafdd9530_44063818',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_21593571f8bafddd3b4_69985240',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_14366571f8bafde1237_98476185',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			</div>
		</div>
		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_14591571f8bafde50b6_28037280',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_9932571f8bafdf4ac8_54797227',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<?php echo '<script'; ?>
 src="<?php echo smarty_function_base_url(array('url'=>'assets/js','src'=>'jquery-1.12.3.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo smarty_function_base_url(array('url'=>'assets/js','src'=>'bootstrap.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
    <!-- Use Commonmark.js -->
    <?php echo '<script'; ?>
 src="<?php echo smarty_function_base_url(array('url'=>'assets/js','src'=>'commonmark.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'js', array (
  0 => 'block_23829571f8bafe00647_71962906',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'navbar'}  file:admin/master_layout.tpl */
function block_26019571f8bafdd1835_90928449($_smarty_tpl, $_blockParentStack) {
?>

		<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin/master_layout.tpl */
function block_8352571f8bafdd9530_44063818($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin/master_layout.tpl */
function block_21593571f8bafddd3b4_69985240($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin/master_layout.tpl */
function block_14366571f8bafde1237_98476185($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:admin/master_layout.tpl */
function block_14591571f8bafde50b6_28037280($_smarty_tpl, $_blockParentStack) {
?>

		<footer class="navbar navbar-default" style="margin-top:20px; margin-bottom:0px; border-radius: 0px;">
			<div class="container-fluid">
				<p class="navbar-text">Signed in as <?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
. Powered by Smarty <?php echo '3.1.28';?>
.</p>
			</div>
		</footer>
		<?php
}
/* {/block 'footer'} */
/* {block 'modal'}  file:admin/master_layout.tpl */
function block_9932571f8bafdf4ac8_54797227($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'modal'} */
/* {block 'js'}  file:admin/master_layout.tpl */
function block_23829571f8bafe00647_71962906($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
}
