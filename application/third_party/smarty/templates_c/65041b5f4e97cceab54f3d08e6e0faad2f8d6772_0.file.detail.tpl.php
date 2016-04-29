<?php
/* Smarty version 3.1.28, created on 2016-04-29 15:05:22
  from "C:\xampp\htdocs\monitoring\application\views\admin\teacher\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57235c120f7f45_97750267',
  'file_dependency' => 
  array (
    '65041b5f4e97cceab54f3d08e6e0faad2f8d6772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\teacher\\detail.tpl',
      1 => 1461935119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/teacher/breadcum.tpl' => 1,
    'file:admin/teacher/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_57235c120f7f45_97750267 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2127357235c1208e7b6_48555669',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_1225457235c120964b3_28588729',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_1375957235c1209a330_40956403',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1754857235c120a2036_98158862',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\teacher\detail.tpl */
function block_2127357235c1208e7b6_48555669($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'teachers'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\teacher\detail.tpl */
function block_1225457235c120964b3_28588729($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\teacher\detail.tpl */
function block_1375957235c1209a330_40956403($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\teacher\detail.tpl */
function block_1754857235c120a2036_98158862($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Detail Teacher</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->full_name;?>
</td>
				</tr>
				<tr>
					<td>NIP</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->nip;?>
</td>
				</tr>
				<tr>
					<td>Born Palce and Date</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->born_place;?>
, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['teacher']->value->born_date,"%e %B %Y");?>
</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php if ($_smarty_tpl->tpl_vars['teacher']->value->gender == 'L') {?>Male<?php } else { ?>Female<?php }?></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->telephone;?>
</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->address;?>
</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->email;?>
</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->username;?>
</td>
				</tr>
				<tr>
					<td>Role</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->description;?>
</td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php if ($_smarty_tpl->tpl_vars['teacher']->value->status == 1) {?>Active<?php } else { ?>Non-Active<?php }?></td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher/edit','src'=>$_smarty_tpl->tpl_vars['teacher']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher/delete','src'=>$_smarty_tpl->tpl_vars['teacher']->value->id),$_smarty_tpl);?>
" class="btn btn-danger btn-xs">Hapus</a>
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
