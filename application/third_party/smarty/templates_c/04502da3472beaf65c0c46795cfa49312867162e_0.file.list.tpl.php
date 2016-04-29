<?php
/* Smarty version 3.1.28, created on 2016-04-29 16:09:50
  from "C:\xampp\htdocs\monitoring\application\views\admin\teacher\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57236b2e3c7bb5_60350170',
  'file_dependency' => 
  array (
    '04502da3472beaf65c0c46795cfa49312867162e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\teacher\\list.tpl',
      1 => 1461938985,
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
function content_57236b2e3c7bb5_60350170 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2065657236b2e3799a0_21567821',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_1104957236b2e3816a8_68341012',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_375857236b2e385525_82504793',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_2977557236b2e38d226_19518818',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\teacher\list.tpl */
function block_2065657236b2e3799a0_21567821($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'teachers'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\teacher\list.tpl */
function block_1104957236b2e3816a8_68341012($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\teacher\list.tpl */
function block_375857236b2e385525_82504793($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\teacher\list.tpl */
function block_2977557236b2e38d226_19518818($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Teacher List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['teachers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_teacher_0_saved_item = isset($_smarty_tpl->tpl_vars['teacher']) ? $_smarty_tpl->tpl_vars['teacher'] : false;
$__foreach_teacher_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable();
$__foreach_teacher_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_teacher_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['teacher']->value) {
$__foreach_teacher_0_saved_local_item = $_smarty_tpl->tpl_vars['teacher'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->full_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['teacher']->value->description;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['teacher']->value->status == 1) {
echo 'Active';
} else {
echo 'Non-Active';
}?></td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher','src'=>$_smarty_tpl->tpl_vars['teacher']->value->id),$_smarty_tpl);?>
" class="btn btn-success btn-xs">Detail</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher/edit','src'=>$_smarty_tpl->tpl_vars['teacher']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/teacher/delete','src'=>$_smarty_tpl->tpl_vars['teacher']->value->id),$_smarty_tpl);?>
" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['teacher'] = $__foreach_teacher_0_saved_local_item;
}
}
if ($__foreach_teacher_0_saved_item) {
$_smarty_tpl->tpl_vars['teacher'] = $__foreach_teacher_0_saved_item;
}
if ($__foreach_teacher_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_teacher_0_saved_key;
}
?>
			</tbody>
		</table>
	</div>
</div>
<?php
}
/* {/block 'content'} */
}
