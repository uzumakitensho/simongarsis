{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='users'}
{/block}

{block name=breadcrumb}
	{include file="admin/user/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/user/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>User List</h2>
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
			{foreach $users as $key => $user}
				<tr>
					<td>{$user->full_name}</td>
					<td>{$user->email}</td>
					<td>{$user->description}</td>
					<td>{if $user->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/user' src=$user->id}" class="btn btn-success btn-xs">Detail</a>
						<a href="{base_url url='admin/user/edit' src=$user->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/user/delete' src=$user->id}" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			