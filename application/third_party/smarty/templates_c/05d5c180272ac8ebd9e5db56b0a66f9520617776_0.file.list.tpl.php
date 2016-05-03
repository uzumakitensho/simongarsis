<?php
/* Smarty version 3.1.28, created on 2016-05-02 18:09:18
  from "C:\xampp\htdocs\monitoring\application\views\admin\category\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57277bae6003b4_74526433',
  'file_dependency' => 
  array (
    '05d5c180272ac8ebd9e5db56b0a66f9520617776' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\category\\list.tpl',
      1 => 1462205350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/nav_bar.tpl' => 1,
    'file:admin/category/breadcum.tpl' => 1,
    'file:admin/category/sidebar.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_57277bae6003b4_74526433 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2841857277bae58ef14_73986183',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_411557277bae59aaa8_20039263',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_2107257277bae5aa4a4_80437776',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_724157277bae5b21a0_06779864',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\category\list.tpl */
function block_2841857277bae58ef14_73986183($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'categories'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\category\list.tpl */
function block_411557277bae59aaa8_20039263($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/category/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\category\list.tpl */
function block_2107257277bae5aa4a4_80437776($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/category/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'list'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\category\list.tpl */
function block_724157277bae5b21a0_06779864($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Fault Category List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Short Name</th>
					<th>Description</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$__foreach_category_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$__foreach_category_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_category_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
				<tr>
					<?php if (isset($_smarty_tpl->tpl_vars['no'])) {$_smarty_tpl->tpl_vars['no'] = clone $_smarty_tpl->tpl_vars['no'];
$_smarty_tpl->tpl_vars['no']->value = 0; $_smarty_tpl->tpl_vars['no']->nocache = null;
} else $_smarty_tpl->tpl_vars['no'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'no', 0);?>
					<td><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['category']->value->short_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['category']->value->status == 1) {
echo 'Active';
} else {
echo 'Non-Active';
}?></td>
					<td>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/category/edit','src'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl);?>
" class="btn btn-primary btn-xs">Edit</a>
						<a href="<?php echo smarty_function_base_url(array('url'=>'admin/fault/category/delete','src'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl);?>
" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
if ($__foreach_category_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_category_0_saved_key;
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
