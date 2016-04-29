<?php
/* Smarty version 3.1.28, created on 2016-04-09 19:36:30
  from "C:\xampp\htdocs\ci\application\views\admin\home\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57093d9ed04d98_53689863',
  'file_dependency' => 
  array (
    '397a531e078ac1547bad82f96956269e2e768768' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\home\\list.tpl',
      1 => 1460222885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master_layout.tpl' => 1,
    'file:top_notif.tpl' => 1,
  ),
),false)) {
function content_57093d9ed04d98_53689863 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '375557093d9eaf9615_37734403';
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_231257093d9ecf1502_65322890',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_3088157093d9ecf5389_84797872',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_685457093d9ecfd082_56378464',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'breadcrumb'}  file:admin\home\list.tpl */
function block_231257093d9ecf1502_65322890($_smarty_tpl, $_blockParentStack) {
?>

<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Admin</a></li>
	<li class="active">Home</li>
</ol>
<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\home\list.tpl */
function block_3088157093d9ecf5389_84797872($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\home\list.tpl */
function block_685457093d9ecfd082_56378464($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-12" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<h3>Welcome, Administrator.</h3>
</div>
<?php
}
/* {/block 'content'} */
}
