<?php
/* Smarty version 3.1.28, created on 2016-04-30 19:52:53
  from "C:\xampp\htdocs\monitoring\application\views\admin\user\edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5724f0f5e41102_42886860',
  'file_dependency' => 
  array (
    '3a452fac6832bf3700c35a69598b1a0178f5579d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\user\\edit.tpl',
      1 => 1461855206,
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
function content_5724f0f5e41102_42886860 ($_smarty_tpl) {
if (!is_callable('smarty_function_base_url')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_form_error')) require_once 'C:\\xampp\\htdocs\\monitoring\\application\\third_party\\smarty\\libs\\plugins\\function.form_error.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'navbar', array (
  0 => 'block_2655724f0f5de34f1_47597086',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_243345724f0f5de7377_89178469',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_279515724f0f5def074_08296741',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_325725724f0f5df6d70_13275640',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_94135724f0f5e41104_68657137',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'navbar'}  file:admin\user\edit.tpl */
function block_2655724f0f5de34f1_47597086($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'users'), 0, false);
?>

<?php
}
/* {/block 'navbar'} */
/* {block 'breadcrumb'}  file:admin\user\edit.tpl */
function block_243345724f0f5de7377_89178469($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/breadcum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'edit'), 0, false);
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\user\edit.tpl */
function block_279515724f0f5def074_08296741($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/user/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'edit'), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\user\edit.tpl */
function block_325725724f0f5df6d70_13275640($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Edit User</h2>
	<form class="form-horizontal" action="<?php echo smarty_function_base_url(array('url'=>'admin/user/edit','src'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
" method="post">
		
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>1),$_smarty_tpl);?>
">
			<label for="full_name" class="col-sm-1 control-label">Name</label>
			<div class="col-sm-11">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'full_name','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group <?php echo smarty_function_form_error(array('field'=>'email','opt'=>1),$_smarty_tpl);?>
">
			<label for="email" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
				<span class="help-block text-danger" style="margin: 0px;"><?php echo smarty_function_form_error(array('field'=>'email','opt'=>2),$_smarty_tpl);?>
</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-1 control-label">Status</label>
			<div class="col-sm-11">
				<select name="status" class="form-control">
					<?php if ($_smarty_tpl->tpl_vars['user']->value->status == 1) {?>
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
/* {block 'modal'}  file:admin\user\edit.tpl */
function block_94135724f0f5e41104_68657137($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'modal'} */
}
