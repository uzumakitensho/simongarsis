<?php
/* Smarty version 3.1.28, created on 2016-04-30 12:55:46
  from "C:\xampp\htdocs\monitoring\application\views\admin\course\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57248f329edd96_92009342',
  'file_dependency' => 
  array (
    '06f51c4194cb7af3f1afc2f2e9d4dfa6d4874510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\course\\detail.tpl',
      1 => 1461951620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/parent/breadcum.tpl' => 1,
    'file:admin/parent/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_57248f329edd96_92009342 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2812357248f329075e1_51812878',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_1240857248f3290f2e3_24106913',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_2542557248f32916fe8_20849892',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1016657248f3291ae67_87832768',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\course\detail.tpl */
function block_2812357248f329075e1_51812878($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'parents'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\course\detail.tpl */
function block_1240857248f3290f2e3_24106913($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/parent/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\course\detail.tpl */
function block_2542557248f32916fe8_20849892($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/parent/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\course\detail.tpl */
function block_1016657248f3291ae67_87832768($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Detail Parent</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->full_name;?>
</td>
				</tr>
				<tr>
				<tr>
					<td>Born Palce and Date</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->born_place;?>
, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['parent']->value->born_date,"%e %B %Y");?>
</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php if ($_smarty_tpl->tpl_vars['parent']->value->gender == 'L') {?>Male<?php } else { ?>Female<?php }?></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->telephone;?>
</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->address;?>
</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->email;?>
</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $_smarty_tpl->tpl_vars['parent']->value->username;?>
</td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php if ($_smarty_tpl->tpl_vars['parent']->value->status == 1) {?>Active<?php } else { ?>Non-Active<?php }?></td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent/edit','src'=>$_smarty_tpl->tpl_vars['parent']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/parent/delete','src'=>$_smarty_tpl->tpl_vars['parent']->value->id),$_smarty_tpl);?>
" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure')">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php
}
/* {/block 'content'} */
}
