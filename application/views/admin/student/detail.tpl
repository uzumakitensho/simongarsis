{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='students'}
{/block}

{block name=breadcrumb}
	{include file="admin/student/breadcum.tpl" active='detail'}
{/block}

{block name=sidebar}
	{include file="admin/student/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Detail Student</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Name</td>
					<td>{$student->full_name}</td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>{$student->nis}</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td>{$student->nisn}</td>
				</tr>
				<tr>
					<td>Generation</td>
					<td>{$student->generation}</td>
				</tr>
				<tr>
					<td>Born Palce and Date</td>
					<td>{$student->born_place}, {$student->born_date|date_format:"%e %B %Y"}</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{if $student->gender=='L'}Male{else}Female{/if}</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td>{$student->telephone}</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>{$student->address}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{$student->email}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{$student->username}</td>
				</tr>
				<tr>
					<td>Role</td>
					<td>{$student->description}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>{if $student->status==1}Active{else}Non-Active{/if}</td>
				</tr>
				<tr>
					<td>Actions</td>
					<td>
						<a href="{base_url url='admin/student/edit' src=$student->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/student/delete' src=$student->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure')">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
{/block}
			