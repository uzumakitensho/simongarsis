<?php
/* Smarty version 3.1.28, created on 2016-04-23 11:48:47
  from "C:\xampp\htdocs\ci\application\views\admin\user\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b44ffbe0dd7_84961749',
  'file_dependency' => 
  array (
    'a4f888ae8f46898ef2e430bf383f2080fabceb4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\user\\detail.tpl',
      1 => 1461404924,
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
function content_571b44ffbe0dd7_84961749 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_27260571b44ffb9a8c0_89816571',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_20229571b44ffba6440_61278058',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_23386571b44ffbae145_60458884',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_395571b44ffbb5e49_23430309',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\user\detail.tpl */
function block_27260571b44ffb9a8c0_89816571($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'users'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\user\detail.tpl */
function block_20229571b44ffba6440_61278058($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'detail'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\user\detail.tpl */
function block_23386571b44ffbae145_60458884($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\user\detail.tpl */
function block_395571b44ffbb5e49_23430309($_smarty_tpl, $_blockParentStack) {
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
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>
</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
				</tr>
				<tr>
					<td>Status</td>
					<td><?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == 1) {?>Active<?php } else { ?>Non-Active<?php }?></td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/edit','src'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/user/delete','src'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
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
