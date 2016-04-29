<?php
/* Smarty version 3.1.28, created on 2016-04-29 02:39:36
  from "C:\xampp\htdocs\monitoring\application\views\admin\teacher\create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5722ad48bab045_14421014',
  'file_dependency' => 
  array (
    '52bfbad9fc31abc69acfd26e9e8695eff58ef96a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\teacher\\create.tpl',
      1 => 1461889923,
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
function content_5722ad48bab045_14421014 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_form_error')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.form_error.php';
if (!is_callable('smarty_function_set_value')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.set_value.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_122775722ad487ceae9_08640915',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_167785722ad487de4e1_28796831',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_92115722ad487e61e0_34162313',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_317685722ad487ea062_22054509',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_221295722ad48ba71c9_52923243',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\teacher\create.tpl */
function block_122775722ad487ceae9_08640915($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'teachers'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\teacher\create.tpl */
function block_167785722ad487de4e1_28796831($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'create'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\teacher\create.tpl */
function block_92115722ad487e61e0_34162313($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/teacher/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'create'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\teacher\create.tpl */
function block_317685722ad487ea062_22054509($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Create Teacher</h2>
	<form class="form-horizontal" action="<?php echo smarty_function_base_url(array('url'=>'admin/teacher/create'),$_smarty_tpl);?>
" method="post">
		
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>1),$_smarty_tpl);?>
">
			<label for="full_name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo smarty_function_set_value(array('field'=>'full_name'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'nip','opt'=>1),$_smarty_tpl);?>
">
			<label for="nip" class="col-sm-2 control-label">NIP</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo smarty_function_set_value(array('field'=>'nip'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'nip','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'born_date','opt'=>1),$_smarty_tpl);?>
">
			<label for="born_date" class="col-sm-2 control-label">Born Date</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="born_date" name="born_date" placeholder="" value="<?php echo smarty_function_set_value(array('field'=>'born_date'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'born_date','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'born_place','opt'=>1),$_smarty_tpl);?>
">
			<label for="born_place" class="col-sm-2 control-label">Born Place</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="born_place" name="born_place" placeholder="" value="<?php echo smarty_function_set_value(array('field'=>'born_place'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'born_place','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'gender','opt'=>1),$_smarty_tpl);?>
">
			<label for="gender" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
				<select name="gender" class="form-control">
					<option value="L">Male</option>
					<option value="P">Female</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'gender','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'telephone','opt'=>1),$_smarty_tpl);?>
">
			<label for="telephone" class="col-sm-2 control-label">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="<?php echo smarty_function_set_value(array('field'=>'telephone'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'telephone','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'address','opt'=>1),$_smarty_tpl);?>
">
			<label for="address" class="col-sm-2 control-label">Address</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="address" name="address"><?php echo smarty_function_set_value(array('field'=>'address'),$_smarty_tpl);?>
</textarea>
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'address','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'email','opt'=>1),$_smarty_tpl);?>
">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo smarty_function_set_value(array('field'=>'email'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'email','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'username','opt'=>1),$_smarty_tpl);?>
">
			<label for="username" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo smarty_function_set_value(array('field'=>'username'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'username','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'password','opt'=>1),$_smarty_tpl);?>
">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'password','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'confirm_password','opt'=>1),$_smarty_tpl);?>
">
			<label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'confirm_password','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'status','opt'=>1),$_smarty_tpl);?>
">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					<option value="1">Active</option>
					<option value="0">Non-Active</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'status','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'role','opt'=>1),$_smarty_tpl);?>
">
			<label for="role" class="col-sm-2 control-label">Role</label>
			<div class="col-sm-10">
				<select name="role" class="form-control">
				<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_0_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$__foreach_role_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$__foreach_role_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_role_0_total) {
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['role']->value) {
$__foreach_role_0_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->description;?>
</option>
				<?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_local_item;
}
}
if ($__foreach_role_0_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_item;
}
if ($__foreach_role_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_role_0_saved_key;
}
?>
				</select>
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'role','opt'=>2),$_smarty_tpl);?>
</span>
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
/* {block 'modal'}  file:admin\teacher\create.tpl */
function block_221295722ad48ba71c9_52923243($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'modal'} */
}
