{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='parents'}
{/block}

{block name=breadcrumb}
	{include file="admin/parent/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/parent/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Parent List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $parents as $key => $parent}
				<tr>
					<td>{$parent->full_name}</td>
					<td>{$parent->email}</td>
					<td>{if $parent->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/parent' src=$parent->id}" class="btn btn-success btn-xs">Detail</a>
						<a href="{base_url url='admin/parent/edit' src=$parent->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/parent/delete' src=$parent->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			