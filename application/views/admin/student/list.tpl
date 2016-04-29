{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='students'}
{/block}

{block name=breadcrumb}
	{include file="admin/student/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/student/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Student List</h2>
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
			{foreach $students as $key => $student}
				<tr>
					<td>{$student->full_name}</td>
					<td>{$student->email}</td>
					<td>{$student->description}</td>
					<td>{if $student->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/student' src=$student->id}" class="btn btn-success btn-xs">Detail</a>
						<a href="{base_url url='admin/student/edit' src=$student->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/student/delete' src=$student->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			