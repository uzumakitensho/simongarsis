<?php
/* Smarty version 3.1.28, created on 2016-04-23 09:26:20
  from "C:\xampp\htdocs\ci\application\views\admin\home\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b239c0f7773_62928440',
  'file_dependency' => 
  array (
    '397a531e078ac1547bad82f96956269e2e768768' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\home\\list.tpl',
      1 => 1461396376,
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
function content_571b239c0f7773_62928440 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_12621571b239c0b8f66_85942173',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_9218571b239c0c4ae6_01212434',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_8467571b239c0d0666_74675567',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_3920571b239c0d44e2_37307233',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'js', array (
  0 => 'block_5449571b239c0efa76_84131346',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\home\list.tpl */
function block_12621571b239c0b8f66_85942173($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\home\list.tpl */
function block_9218571b239c0c4ae6_01212434($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/home/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\home\list.tpl */
function block_8467571b239c0d0666_74675567($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\home\list.tpl */
function block_3920571b239c0d44e2_37307233($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-12" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<h3>Welcome, <?php echo smarty_function_get_session(array('name'=>'full_name'),$_smarty_tpl);?>
.</h3>
	<p>Date: <?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</p>
</div>
<?php
}
/* {/block 'content'} */
/* {block 'js'}  file:admin\home\list.tpl */
function block_5449571b239c0efa76_84131346($_smarty_tpl, $_blockParentStack) {
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
