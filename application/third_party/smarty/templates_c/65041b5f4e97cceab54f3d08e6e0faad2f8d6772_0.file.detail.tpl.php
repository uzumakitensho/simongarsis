<?php
/* Smarty version 3.1.28, created on 2016-04-29 03:06:38
  from "C:\xampp\htdocs\monitoring\application\views\admin\teacher\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5722b39ed57b67_39314363',
  'file_dependency' => 
  array (
    '65041b5f4e97cceab54f3d08e6e0faad2f8d6772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\teacher\\detail.tpl',
      1 => 1461891995,
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
function content_5722b39ed57b67_39314363 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_65865722b39ece2851_24429315',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_205875722b39ecea555_63495835',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_19925722b39ecf2250_28765317',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_287695722b39ecf9f55_40136186',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\teacher\detail.tpl */
function block_65865722b39ece2851_24429315($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'teachers'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\teacher\detail.tpl */
function block_205875722b39ecea555_63495835($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\teacher\detail.tpl */
function block_19925722b39ecf2250_28765317($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\teacher\detail.tpl */
function block_287695722b39ecf9f55_40136186($_smarty_tpl, $_blockParentStack) {
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
, <?php echo $_smarty_tpl->tpl_vars['teacher']->value->born_date;?>
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
