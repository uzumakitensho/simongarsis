<?php
/* Smarty version 3.1.28, created on 2016-04-29 18:22:05
  from "C:\xampp\htdocs\monitoring\application\views\admin\student\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57238a2d52eca8_41247689',
  'file_dependency' => 
  array (
    'f9f684a4a834e5b766d2b55e934d612de8bb624e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\student\\detail.tpl',
      1 => 1461946916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/student/breadcum.tpl' => 1,
    'file:admin/student/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_57238a2d52eca8_41247689 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_1166757238a2d4a9f83_41974424',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_2504057238a2d4b1c82_06938853',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_1376957238a2d4b9988_42910482',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_2171057238a2d4c1681_23078516',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\student\detail.tpl */
function block_1166757238a2d4a9f83_41974424($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'students'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\student\detail.tpl */
function block_2504057238a2d4b1c82_06938853($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/student/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\student\detail.tpl */
function block_1376957238a2d4b9988_42910482($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/student/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\student\detail.tpl */
function block_2171057238a2d4c1681_23078516($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Detail Student</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->full_name;?>
</td>
				</tr>
				<tr>
					<td>NIS</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->nis;?>
</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->nisn;?>
</td>
				</tr>
				<tr>
					<td>Generation</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->generation;?>
</td>
				</tr>
				<tr>
					<td>Born Palce and Date</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->born_place;?>
, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value->born_date,"%e %B %Y");?>
</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php if ($_smarty_tpl->tpl_vars['student']->value->gender == 'L') {?>Male<?php } else { ?>Female<?php }?></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->telephone;?>
</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->address;?>
</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->email;?>
</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->username;?>
</td>
				</tr>
				<tr>
					<td>Role</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->description;?>
</td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php if ($_smarty_tpl->tpl_vars['student']->value->status == 1) {?>Active<?php } else { ?>Non-Active<?php }?></td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/edit','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/delete','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
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
