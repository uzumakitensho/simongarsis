<?php
/* Smarty version 3.1.28, created on 2016-04-29 17:31:22
  from "C:\xampp\htdocs\monitoring\application\views\admin\student\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57237e4ad8b573_84326173',
  'file_dependency' => 
  array (
    '2d8245ca81f0f9d7c9d0f3ea1ed69c13d2039c7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\student\\list.tpl',
      1 => 1461943733,
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
function content_57237e4ad8b573_84326173 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2120957237e4ad21de5_29052846',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_527857237e4ad2d966_31879954',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_703957237e4ad35662_27458600',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_596457237e4ad3d360_01567460',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\student\list.tpl */
function block_2120957237e4ad21de5_29052846($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'students'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\student\list.tpl */
function block_527857237e4ad2d966_31879954($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/student/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\student\list.tpl */
function block_703957237e4ad35662_27458600($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/student/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\student\list.tpl */
function block_596457237e4ad3d360_01567460($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Student List</h2>
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
$_from = $_smarty_tpl->tpl_vars['students']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_student_0_saved_item = isset($_smarty_tpl->tpl_vars['student']) ? $_smarty_tpl->tpl_vars['student'] : false;
$__foreach_student_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['student'] = new Smarty_Variable();
$__foreach_student_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_student_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['student']->value) {
$__foreach_student_0_saved_local_item = $_smarty_tpl->tpl_vars['student'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->full_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['student']->value->description;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['student']->value->status == 1) {
echo 'Active';
} else {
echo 'Non-Active';
}?></td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
" class="btn btn-success btn-xs">Detail</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/edit','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/student/delete','src'=>$_smarty_tpl->tpl_vars['student']->value->id),$_smarty_tpl);?>
" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['student'] = $__foreach_student_0_saved_local_item;
}
}
if ($__foreach_student_0_saved_item) {
$_smarty_tpl->tpl_vars['student'] = $__foreach_student_0_saved_item;
}
if ($__foreach_student_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_student_0_saved_key;
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
