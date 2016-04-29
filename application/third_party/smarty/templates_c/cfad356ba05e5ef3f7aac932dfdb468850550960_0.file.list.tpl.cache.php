<?php
/* Smarty version 3.1.28, created on 2016-04-09 11:20:16
  from "C:\xampp\htdocs\ci\application\views\welcome\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5708c950148ed3_64678118',
  'file_dependency' => 
  array (
    'cfad356ba05e5ef3f7aac932dfdb468850550960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\views\\welcome\\list.tpl',
      1 => 1460173012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master_layout.tpl' => 1,
    'file:welcome\\sidebar.tpl' => 1,
    'file:top_notif.tpl' => 1,
  ),
),false)) {
function content_5708c950148ed3_64678118 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '252965708c94fd79fa7_06706574';
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'breadcrumb', array (
  0 => 'block_89055708c9501317d2_70362682',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'sidebar', array (
  0 => 'block_158225708c9501394d4_43300779',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

				
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_176475708c9501411d3_01148854',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

			<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'breadcrumb'}  file:welcome\list.tpl */
function block_89055708c9501317d2_70362682($_smarty_tpl, $_blockParentStack) {
?>

<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	<li class="active">List</li>
</ol>
<?php
}
/* {/block 'breadcrumb'} */
/* {block 'sidebar'}  file:welcome\list.tpl */
function block_158225708c9501394d4_43300779($_smarty_tpl, $_blockParentStack) {
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:welcome\sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
/* {/block 'sidebar'} */
/* {block 'content'}  file:welcome\list.tpl */
function block_176475708c9501411d3_01148854($_smarty_tpl, $_blockParentStack) {
?>

<div class="col-md-10" style="min-height:515px;">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top_notif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<h2>Products List</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Country</th>
				<th>State</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
		</tbody>
	</table>
</div>
<?php
}
/* {/block 'content'} */
}
