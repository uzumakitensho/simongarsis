{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='types'}
{/block}

{block name=breadcrumb}
	{include file="admin/type/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/type/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Fault Type List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Type Name</th>
					<th>Fault Category</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $types as $key => $type}
				<tr>
					{$no = 0}
					<td>{$no+1}</td>
					<td>{$type->name}</td>
					<td>{$type->category_name}</td>
					<td>{if $type->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/type/edit' src=$type->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/type/delete' src=$type->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			