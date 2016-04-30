{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='classes'}
{/block}

{block name=breadcrumb}
	{include file="admin/class/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
	{include file="admin/class/sidebar.tpl" active='list'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Class List</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Class Name</th>
					<th>Note</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $classes as $key => $class}
				<tr>
					{$no = 0}
					<td>{$no+1}</td>
					<td>{$class->name}</td>
					<td>{$class->note}</td>
					<td>{if $class->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/class/edit' src=$class->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/class/delete' src=$class->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			