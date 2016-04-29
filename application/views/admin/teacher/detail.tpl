{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='teachers'}
{/block}

{block name=breadcrumb}
	{include file="admin/teacher/breadcum.tpl" active='detail'}
{/block}

{block name=sidebar}
	{include file="admin/teacher/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Detail Teacher</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td>{$teacher->full_name}</td>
				</tr>
				<tr>
					<td>NIP</td>
					<td>{$teacher->nip}</td>
				</tr>
				<tr>
					<td>Born Palce and Date</td>
					<td>{$teacher->born_place}, {$teacher->born_date|date_format:"%e %B %Y"}</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{if $teacher->gender=='L'}Male{else}Female{/if}</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td>{$teacher->telephone}</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>{$teacher->address}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{$teacher->email}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{$teacher->username}</td>
				</tr>
				<tr>
					<td>Role</td>
					<td>{$teacher->description}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>{if $teacher->status==1}Active{else}Non-Active{/if}</td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="{base_url url='admin/teacher/edit' src=$teacher->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/teacher/delete' src=$teacher->id}" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
{/block}
			