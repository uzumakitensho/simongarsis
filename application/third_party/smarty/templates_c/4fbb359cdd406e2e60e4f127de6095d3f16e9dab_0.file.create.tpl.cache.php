<?php
/* Smarty version 3.1.28, created on 2016-04-09 05:42:18
  from "C:\xampp\htdocs\ci\application\views\welcome\create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57087a1ae1ef00_08454118',
  'file_dependency' => 
  array (
    '4fbb359cdd406e2e60e4f127de6095d3f16e9dab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\welcome\\create.tpl',
      1 => 1460173317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master_layout.tpl' => 1,
    'file:welcome\\sidebar.tpl' => 1,
    'file:top_notif.tpl' => 1,
    'file:welcome\\_modal.tpl' => 1,
  ),
),false)) {
function content_57087a1ae1ef00_08454118 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '2819057087a1adbd477_57608529';
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_1407957087a1ae03983_81281112',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_1966057087a1ae07809_56483286',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_283757087a1ae0f508_66679228',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'modal', array (
  0 => 'block_2001057087a1ae1b085_52767515',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'breadcrumb'}  file:welcome\create.tpl */
function block_1407957087a1ae03983_81281112($_smarty_tpl, $_blockParentStack) {
?>

<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	<li class="active">Create</li>
</ol>
<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:welcome\create.tpl */
function block_1966057087a1ae07809_56483286($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:welcome\sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:welcome\create.tpl */
function block_283757087a1ae0f508_66679228($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Create Product</h2>
	<form class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-1 control-label">Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#gridSystemModal"> Launch demo modal </button>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>
</div>
<?php
}
/* {/block 'content'} */
/* {block 'modal'}  file:welcome\create.tpl */
function block_2001057087a1ae1b085_52767515($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:welcome\_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'modal'} */
}
