{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='years'}
{/block}

{block name=breadcrumb}
	{include file="admin/year/breadcum.tpl" active='Ahome'}
{/block}

{block name=sidebar}
	{include file="admin/year/sidebar.tpl" active='Alist'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Academic Years</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Year</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			{foreach $years as $key => $year}
				<tr>
					<td>{$key+1}</td>
					<td>{$year->year}</td>
					<td>{if $year->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
					<td>
						<a href="{base_url url='admin/year/edit' src=$year->id}" class="btn btn-primary btn-xs">Edit</a>
						<a href="{base_url url='admin/year/delete' src=$year->id}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Hapus</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			