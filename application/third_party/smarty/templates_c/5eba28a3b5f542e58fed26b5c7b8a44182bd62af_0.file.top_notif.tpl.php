<?php
/* Smarty version 3.1.28, created on 2016-04-09 20:06:25
  from "C:\xampp\htdocs\ci\application\views\top_notif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570944a10e1e77_76953658',
  'file_dependency' => 
  array (
    '5eba28a3b5f542e58fed26b5c7b8a44182bd62af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\top_notif.tpl',
      1 => 1460224937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570944a10e1e77_76953658 ($_smarty_tpl) {
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
<?php }
}
}
