{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='years'}
{/block}

{block name=breadcrumb}
	{include file="admin/year/breadcum.tpl" active='Shome'}
{/block}

{block name=sidebar}
	{include file="admin/year/sidebar.tpl" active='Slist'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Semesters</h2>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Year</th>
					<th>Semester</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			{foreach $semesters as $key => $semester}
				<tr>
					<td>{$key+1}</td>
					<td>{$semester->year} / {($semester->year)+1}</td>
					<td>{if $semester->code == 'GNJL'}{'Ganjil'}{else}{'Genap'}{/if}</td>
					<td>{if $semester->status == 1}{'Active'}{else}{'Non-Active'}{/if}</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/block}
			