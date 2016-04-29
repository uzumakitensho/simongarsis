<?php
/* Smarty version 3.1.28, created on 2016-04-27 18:13:42
  from "C:\xampp\htdocs\monitoring\application\views\admin\home\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5720e5364bd9c7_01308339',
  'file_dependency' => 
  array (
    '5766064b3ab1c7d3bec7bc27dcd680cbb3384728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\home\\list.tpl',
      1 => 1461773616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/home/breadcum.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_5720e5364bd9c7_01308339 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_25415720e53636da73_52687628',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_82265720e5363718f5_88304599',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_150275720e5363795f6_04501580',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_144485720e53637d479_45079035',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'js', array (
  0 => 'block_225055720e5364b5cc1_03440120',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\home\list.tpl */
function block_25415720e53636da73_52687628($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\home\list.tpl */
function block_82265720e5363718f5_88304599($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/home/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\home\list.tpl */
function block_150275720e5363795f6_04501580($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\home\list.tpl */
function block_144485720e53637d479_45079035($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-12" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<h3>Welcome, <?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
.</h3>
	<p>Date: <?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</p>
	<a href="<?php echo smarty_function_base_url(array('url'=>'admin/migrate'),$_smarty_tpl);?>
">Migrate</a>
</div>
<?php
}
/* {/block 'content'} */
/* {block 'js'}  file:admin\home\list.tpl */
function block_225055720e5364b5cc1_03440120($_smarty_tpl, $_blockParentStack) {
?>

<?php echo '<script'; ?>
>
	$(function() {
		var commonmark = window.commonmark;
		var parser = new commonmark.Parser();
		var renderer = new commonmark.HtmlRenderer();

		//$('#preview').html(renderer.render(parser.parse($("#content").val())));
		//$('#preview').html(renderer.render(parser.parse('# Heading 1')));
	} );
<?php echo '</script'; ?>
>
<?php
}
/* {/block 'js'} */
}
