{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='courses'}
{/block}

{block name=breadcrumb}
	{include file="admin/course/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/course/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Course List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Course Name</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $courses as $key => $course}
				<tr>
					{$no = 0}
					<td>{$no+1}</td>
					<td>{$course->name}</td>
					<td>{if $course->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/course/edit' src=$course->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/course/delete' src=$course->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			