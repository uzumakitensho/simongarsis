<?php
/* Smarty version 3.1.28, created on 2016-05-01 08:28:08
  from "C:\xampp\htdocs\monitoring\application\views\admin\year\slist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5725a1f8319922_12350917',
  'file_dependency' => 
  array (
    'e00ffb46c67215f01ae2f555a6b3a4d2c1222b07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\year\\slist.tpl',
      1 => 1462084086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/year/breadcum.tpl' => 1,
    'file:admin/year/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_5725a1f8319922_12350917 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_304205725a1f82cf590_59124938',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_247015725a1f82d7298_51717933',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_234105725a1f82db117_41056306',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_234915725a1f82e2e14_64713838',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\year\slist.tpl */
function block_304205725a1f82cf590_59124938($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'years'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\year\slist.tpl */
function block_247015725a1f82d7298_51717933($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/year/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'Shome'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\year\slist.tpl */
function block_234105725a1f82db117_41056306($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/year/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'Slist'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\year\slist.tpl */
function block_234915725a1f82e2e14_64713838($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Semesters</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Year</th>
					<th>Semester</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['semesters']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_semester_0_saved_item = isset($_smarty_tpl->tpl_vars['semester']) ? $_smarty_tpl->tpl_vars['semester'] : false;
$__foreach_semester_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['semester'] = new Smarty_Variable();
$__foreach_semester_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_semester_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['semester']->value) {
$__foreach_semester_0_saved_local_item = $_smarty_tpl->tpl_vars['semester'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['semester']->value->year;?>
 / <?php echo ($_smarty_tpl->tpl_vars['semester']->value->year)+1;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['semester']->value->code == 'GNJL') {
echo 'Ganjil';
} else {
echo 'Genap';
}?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['semester']->value->status == 1) {
echo 'Active';
} else {
echo 'Non-Active';
}?></td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['semester'] = $__foreach_semester_0_saved_local_item;
}
}
if ($__foreach_semester_0_saved_item) {
$_smarty_tpl->tpl_vars['semester'] = $__foreach_semester_0_saved_item;
}
if ($__foreach_semester_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_semester_0_saved_key;
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
