{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='categories'}
{/block}

{block name=breadcrumb}
	{include file="admin/category/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/category/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Fault Category List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Short Name</th>
					<th>Description</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $categories as $key => $category}
				<tr>
					{$no = 0}
					<td>{$no+1}</td>
					<td>{$category->name}</td>
					<td>{$category->short_name}</td>
					<td>{$category->description}</td>
					<td>{if $category->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/fault/category/edit' src=$category->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/fault/category/delete' src=$category->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			