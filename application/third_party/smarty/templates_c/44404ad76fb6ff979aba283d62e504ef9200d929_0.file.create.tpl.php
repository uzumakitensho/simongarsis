<?php
/* Smarty version 3.1.28, created on 2016-04-22 17:54:39
  from "C:\xampp\htdocs\ci\application\views\admin\user\create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571a493f5b35a1_01159975',
  'file_dependency' => 
  array (
    '44404ad76fb6ff979aba283d62e504ef9200d929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\user\\create.tpl',
      1 => 1461340472,
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
function content_571a493f5b35a1_01159975 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_form_error')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.form_error.php';
if (!is_callable('smarty_function_set_value')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.set_value.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_7951571a493f54dc80_70290659',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_31644571a493f555981_49415418',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_22949571a493f561504_22074376',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_8570571a493f565380_89756019',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_7467571a493f5af716_95010453',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\user\create.tpl */
function block_7951571a493f54dc80_70290659($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'users'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\user\create.tpl */
function block_31644571a493f555981_49415418($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'create'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\user\create.tpl */
function block_22949571a493f561504_22074376($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'create'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\user\create.tpl */
function block_8570571a493f565380_89756019($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Create User</h2>
	<form class="form-horizontal" action="<?php echo smarty_function_base_url(array('url'=>'admin/user/create'),$_smarty_tpl);?>
" method="post">
		
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>1),$_smarty_tpl);?>
">
			<label for="full_name" class="col-sm-1 control-label">Name</label>
			<div class="col-sm-11">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo smarty_function_set_value(array('field'=>'full_name'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'email','opt'=>1),$_smarty_tpl);?>
">
			<label for="email" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo smarty_function_set_value(array('field'=>'email'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'email','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'username','opt'=>1),$_smarty_tpl);?>
">
			<label for="username" class="col-sm-1 control-label">Username</label>
			<div class="col-sm-11">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo smarty_function_set_value(array('field'=>'username'),$_smarty_tpl);?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'username','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'password','opt'=>1),$_smarty_tpl);?>
">
			<label for="password" class="col-sm-1 control-label">Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'password','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'confirm_password','opt'=>1),$_smarty_tpl);?>
">
			<label for="confirm_password" class="col-sm-1 control-label">Confirm Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'confirm_password','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	<?php echo smarty_function_form_error(array(),$_smarty_tpl);?>

</div>
<?php
}
/* {/block 'content'} */
/* {block 'modal'}  file:admin\user\create.tpl */
function block_7467571a493f5af716_95010453($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'modal'} */
}
