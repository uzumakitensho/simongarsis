{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='parents'}
{/block}

{block name=breadcrumb}
	{include file="admin/parent/breadcum.tpl" active='detail'}
{/block}

{block name=sidebar}
	{include file="admin/parent/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Detail Parent</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td>{$parent->full_name}</td>
				</tr>
				<tr>
				<tr>
					<td>Born Palce and Date</td>
					<td>{$parent->born_place}, {$parent->born_date|date_format:"%e %B %Y"}</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{if $parent->gender=='L'}Male{else}Female{/if}</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td>{$parent->telephone}</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>{$parent->address}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{$parent->email}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{$parent->username}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>{if $parent->status==1}Active{else}Non-Active{/if}</td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="{base_url url='admin/parent/edit' src=$parent->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/parent/delete' src=$parent->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure')">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
{/block}
			