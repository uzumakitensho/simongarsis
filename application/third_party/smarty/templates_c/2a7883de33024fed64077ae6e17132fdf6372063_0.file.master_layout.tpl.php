<?php
/* Smarty version 3.1.28, created on 2016-04-30 12:14:58
  from "C:\xampp\htdocs\monitoring\application\views\admin\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572485a2706556_83569296',
  'file_dependency' => 
  array (
    '2a7883de33024fed64077ae6e17132fdf6372063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\master_layout.tpl',
      1 => 1462011295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572485a2706556_83569296 ($_smarty_tpl) {
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
    <title>SIMONGARSIS | Sistem Monitoring Pelanggaran Siswa</title>

    <!-- Bootstrap -->
    <link href="<?php echo smarty_function_base_url(array('url'=>'assets/css','src'=>'bootstrap.min.css'),$_smarty_tpl);?>
" rel="stylesheet">
  </head>
  <body>
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_17409572485a26d7746_91658281',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_29350572485a26db5c9_01087033',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_5351572485a26e32c0_45911986',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_30868572485a26e7146_04193545',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			</div>
		</div>
		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_7997572485a26eafc1_28714194',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_4914572485a26f2cc5_66494946',
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
  0 => 'block_6275572485a26fe859_20202638',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'navbar'}  file:admin/master_layout.tpl */
function block_17409572485a26d7746_91658281($_smarty_tpl, $_blockParentStack) {
?>

		<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin/master_layout.tpl */
function block_29350572485a26db5c9_01087033($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin/master_layout.tpl */
function block_5351572485a26e32c0_45911986($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin/master_layout.tpl */
function block_30868572485a26e7146_04193545($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:admin/master_layout.tpl */
function block_7997572485a26eafc1_28714194($_smarty_tpl, $_blockParentStack) {
?>

		<footer class="navbar navbar-default" style="margin-top:20px; margin-bottom:0px; border-radius: 0px;">
			<div class="container-fluid">
				<p class="navbar-text">Signed in as <b><?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
</b>. Developed by Hafid Afridian &copy; 2016.</p>
			</div>
		</footer>
		<?php
}
/* {/block 'footer'} */
/* {block 'modal'}  file:admin/master_layout.tpl */
function block_4914572485a26f2cc5_66494946($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'modal'} */
/* {block 'js'}  file:admin/master_layout.tpl */
function block_6275572485a26fe859_20202638($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
}
