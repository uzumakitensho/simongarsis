{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='users'}
{/block}

{block name=breadcrumb}
	{include file="admin/user/breadcum.tpl" active='detail'}
{/block}

{block name=sidebar}
	{include file="admin/user/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Detail User</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td>{$user->full_name}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{$user->email}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{$user->username}</td>
				</tr>
				<tr>
					<td>Role</td>
					<td>{$user->description}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>{if $user->status==1}Active{else}Non-Active{/if}</td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="{base_url url='admin/user/edit' src=$user->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/user/delete' src=$user->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
{/block}
			