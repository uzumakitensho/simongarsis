<?php
/* Smarty version 3.1.28, created on 2016-05-02 18:09:23
  from "C:\xampp\htdocs\monitoring\application\views\admin\category\edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57277bb3510358_53340730',
  'file_dependency' => 
  array (
    'd03c2734050152f56465b6317b40c495bcf80cc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\category\\edit.tpl',
      1 => 1462205164,
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
function content_57277bb3510358_53340730 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_form_error')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.form_error.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2693457277bb34ae8b4_59989038',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_2872757277bb34b65b6_18273382',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_1475657277bb34ba431_26663327',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1306957277bb34c5fc7_13453318',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_2528257277bb350c4d5_93501161',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\category\edit.tpl */
function block_2693457277bb34ae8b4_59989038($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'categories'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\category\edit.tpl */
function block_2872757277bb34b65b6_18273382($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/category/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'edit'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\category\edit.tpl */
function block_1475657277bb34ba431_26663327($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/category/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'edit'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\category\edit.tpl */
function block_1306957277bb34c5fc7_13453318($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Edit Fault Category</h2>
	<form class="form-horizontal" action="<?php echo smarty_function_base_url(array('url'=>'admin/fault/category/edit','src'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl);?>
" method="post">
		
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'name','opt'=>1),$_smarty_tpl);?>
">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'name','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'short_name','opt'=>1),$_smarty_tpl);?>
">
			<label for="short_name" class="col-sm-2 control-label">Short Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="short_name" name="short_name" placeholder="Short Name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->short_name;?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'short_name','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'description','opt'=>1),$_smarty_tpl);?>
">
			<label for="description" class="col-sm-2 control-label">Short Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'description','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					<?php if ($_smarty_tpl->tpl_vars['category']->value->status == 1) {?>
					<option value="0">Non-Active</option>
					<option value="1" selected>Active</option>
					<?php } else { ?>
					<option value="0" selected>Non-Active</option>
					<option value="1">Active</option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	<?php echo smarty_function_form_error(array(),$_smarty_tpl);?>

</div>
<?php
}
/* {/block 'content'} */
/* {block 'modal'}  file:admin\category\edit.tpl */
function block_2528257277bb350c4d5_93501161($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'modal'} */
}
