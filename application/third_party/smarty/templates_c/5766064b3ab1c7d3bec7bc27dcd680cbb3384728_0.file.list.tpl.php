<?php
/* Smarty version 3.1.28, created on 2016-05-01 10:03:24
  from "C:\xampp\htdocs\monitoring\application\views\admin\home\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5725b84ca15737_24891867',
  'file_dependency' => 
  array (
    '5766064b3ab1c7d3bec7bc27dcd680cbb3384728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\home\\list.tpl',
      1 => 1462089796,
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
function content_5725b84ca15737_24891867 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_session')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.get_session.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_289595725b84c9e2ab2_97403900',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_195645725b84c9ea7b3_53600035',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_87575725b84c9f24b9_71352986',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_263145725b84c9f6337_28849042',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'js', array (
  0 => 'block_595725b84ca118b8_30248505',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\home\list.tpl */
function block_289595725b84c9e2ab2_97403900($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\home\list.tpl */
function block_195645725b84c9ea7b3_53600035($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/home/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\home\list.tpl */
function block_87575725b84c9f24b9_71352986($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\home\list.tpl */
function block_263145725b84c9f6337_28849042($_smarty_tpl, $_blockParentStack) {
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
function block_595725b84ca118b8_30248505($_smarty_tpl, $_blockParentStack) {
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
