<?php
/* Smarty version 3.1.28, created on 2016-04-23 07:51:02
  from "C:\xampp\htdocs\ci\application\views\admin\top_notif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571b0d466ce951_81747827',
  'file_dependency' => 
  array (
    'c782fdc98d5e3f85cc06c852c1d8dbc296e22d87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\admin\\top_notif.tpl',
      1 => 1461390659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b0d466ce951_81747827 ($_smarty_tpl) {
if (!is_callable('smarty_function_session')) require_once 'C:\\xampp\\htdocs\\ci\\application\\third_party\\smarty\\libs\\plugins\\function.session.php';
if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
<div class="alert alert-success alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>
.
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['failed']->value)) {?>
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['failed']->value;?>
.
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['warning']->value)) {?>
<div class="alert alert-warning alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
.
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
<div class="alert alert-info alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Just info!</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value;?>
.
</div>
<?php } else { ?>
	<?php echo smarty_function_session(array('name'=>'success'),$_smarty_tpl);?>

	<?php echo smarty_function_session(array('name'=>'failed'),$_smarty_tpl);?>

	<?php echo smarty_function_session(array('name'=>'warning'),$_smarty_tpl);?>

	<?php echo smarty_function_session(array('name'=>'info'),$_smarty_tpl);?>

<?php }
}
}
