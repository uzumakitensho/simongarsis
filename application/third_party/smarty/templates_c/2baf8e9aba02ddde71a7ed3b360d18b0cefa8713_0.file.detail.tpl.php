<?php
/* Smarty version 3.1.28, created on 2016-04-28 18:13:30
  from "C:\xampp\htdocs\monitoring\application\views\admin\user\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_572236aa1d0407_89414776',
  'file_dependency' => 
  array (
    '2baf8e9aba02ddde71a7ed3b360d18b0cefa8713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\user\\detail.tpl',
      1 => 1461859977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/user/breadcum.tpl' => 1,
    'file:admin/user/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_572236aa1d0407_89414776 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_20515572236aa186079_88958224',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_31008572236aa18dd70_35821993',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_729572236aa195a74_94146151',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1182572236aa1998f4_77807401',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\user\detail.tpl */
function block_20515572236aa186079_88958224($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'users'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\user\detail.tpl */
function block_31008572236aa18dd70_35821993($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\user\detail.tpl */
function block_729572236aa195a74_94146151($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\user\detail.tpl */
function block_1182572236aa1998f4_77807401($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Detail User</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
				</tr>
				<tr>
					<td>Role</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
</td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php if ($_smarty_tpl->tpl_vars['user']->value->status == 1) {?>Active<?php } else { ?>Non-Active<?php }?></td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/edit','src'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/delete','src'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
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
