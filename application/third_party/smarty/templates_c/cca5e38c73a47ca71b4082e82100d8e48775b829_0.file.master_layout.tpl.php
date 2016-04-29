<?php
/* Smarty version 3.1.28, created on 2016-04-23 09:24:37
  from "C:\xampp\htdocs\ci\application\views\admin\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b2335d40990_35792081',
  'file_dependency' => 
  array (
    'cca5e38c73a47ca71b4082e82100d8e48775b829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\master_layout.tpl',
      1 => 1461396238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b2335d40990_35792081 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
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
    <link href="<?php echo smarty_function_base_url(array('url'=>'assets/css','src'=>'bootstrap.min.css'),$_smarty_tpl);?>
" rel="stylesheet">
  </head>
  <body>
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_23943571b2335cf2784_68553588',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_9396571b2335cf6600_54954419',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_10461571b2335cfa482_22176231',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_27730571b2335cfe306_62068894',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			</div>
		</div>
		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_19235571b2335d02195_64093071',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_22560571b2335d30f93_01130705',
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
  0 => 'block_30169571b2335d3cb12_93168799',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

  </body>
</html><?php }
/* {block 'navbar'}  file:admin/master_layout.tpl */
function block_23943571b2335cf2784_68553588($_smarty_tpl, $_blockParentStack) {
?>

		<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin/master_layout.tpl */
function block_9396571b2335cf6600_54954419($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin/master_layout.tpl */
function block_10461571b2335cfa482_22176231($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin/master_layout.tpl */
function block_27730571b2335cfe306_62068894($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'footer'}  file:admin/master_layout.tpl */
function block_19235571b2335d02195_64093071($_smarty_tpl, $_blockParentStack) {
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
function block_22560571b2335d30f93_01130705($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'modal'} */
/* {block 'js'}  file:admin/master_layout.tpl */
function block_30169571b2335d3cb12_93168799($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
}
