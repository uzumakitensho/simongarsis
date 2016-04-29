<?php
/* Smarty version 3.1.28, created on 2016-04-26 17:17:18
  from "C:\xampp\htdocs\monitoring\application\views\admin\login\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571f867e55da73_64440090',
  'file_dependency' => 
  array (
    '7ba2b0d940bac239150f5217c611c3852f776e75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\monitoring\\application\\views\\admin\\login\\list.tpl',
      1 => 1461683835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/master_layout.tpl' => 1,
    'file:admin/top_notif.tpl' => 1,
  ),
),false)) {
function content_571f867e55da73_64440090 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_9855571f867e536975_92461120',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_17996571f867e53a7f6_95940252',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_18069571f867e53e679_16503053',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_9130571f867e551ef2_35467181',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'breadcrumb'}  file:admin\login\list.tpl */
function block_9855571f867e536975_92461120($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:admin\login\list.tpl */
function block_17996571f867e53a7f6_95940252($_smarty_tpl, $_blockParentStack) {
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:admin\login\list.tpl */
function block_18069571f867e53e679_16503053($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-8 col-md-offset-2" style="margin-top: 8em;">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<center>
					<h2>Login Administrator</h2>
					<form class="form-horizontal" action="<?php  echo base_url('admin/login/check'); ?>" method="post">
						<div class="form-group">
							<label for="username" class="col-sm-1 control-label">Username</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-1 control-label">Password</label>
							<div class="col-sm-11">
								<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="hidden" class="form-control" id="token" name="token" value="administrator">
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
				</center>
		</div>
	</div>
</div>
<?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:admin\login\list.tpl */
function block_9130571f867e551ef2_35467181($_smarty_tpl, $_blockParentStack) {
?>

<footer class="navbar navbar-default navbar-fixed-bottom">
	<div class="container-fluid">
		<p class="navbar-text"><b>Sistem Monitoring Pelanggaran Siswa</b>. Powered by Smarty <?php echo '3.1.28';?>
.</p>
	</div>
</footer>
<?php
}
/* {/block 'footer'} */
}
