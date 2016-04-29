<?php
/* Smarty version 3.1.28, created on 2016-04-23 09:36:38
  from "C:\xampp\htdocs\ci\application\views\admin\login\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b2606331091_62100818',
  'file_dependency' => 
  array (
    '335674c6c2d01d9d123ed2c8c0da40907b9e7dad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\login\\list.tpl',
      1 => 1461396879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_571b2606331091_62100818 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_25086571b260626db69_59195090',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_19807571b2606275867_23617606',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_5036571b26062796e6_05683489',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_30837571b260632d219_06050146',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'breadcrumb'}  file:admin\login\list.tpl */
function block_25086571b260626db69_59195090($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\login\list.tpl */
function block_19807571b2606275867_23617606($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\login\list.tpl */
function block_5036571b26062796e6_05683489($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-12" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<center>
		<h2>Login</h2>
		<form class="form-horizontal" action="<?php  echo base_url('admin/login/check'); ?>" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-1 control-label">Username</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-1 control-label">Password</label>
				<div class="col-sm-11">
					<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>
			</div>
		</form>
	</center>
</div>
<?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:admin\login\list.tpl */
function block_30837571b260632d219_06050146($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'footer'} */
}
