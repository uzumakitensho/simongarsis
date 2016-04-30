{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='roles'}
{/block}

{block name=breadcrumb}
	{include file="admin/role/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/role/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Role List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
			{foreach $roles as $key => $role}
				<tr>
					<td>{$key+1}</td>
					<td>{$role->description}</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			