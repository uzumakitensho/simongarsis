{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='teachers'}
{/block}

{block name=breadcrumb}
	{include file="admin/teacher/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/teacher/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Teacher List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $teachers as $key => $teacher}
				<tr>
					<td>{$teacher->full_name}</td>
					<td>{$teacher->email}</td>
					<td>{$teacher->description}</td>
					<td>{if $teacher->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/teacher' src=$teacher->id}" class="btn btn-success btn-xs">Detail</a>
						<a href="{base_url url='admin/teacher/edit' src=$teacher->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/teacher/delete' src=$teacher->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			