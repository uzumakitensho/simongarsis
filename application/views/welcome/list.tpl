{extends file="master_layout.tpl"}

{block name=breadcrumb}
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	<li class="active">List</li>
</ol>
{/block}

{block name=sidebar}
	{include file="welcome\sidebar.tpl"}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="top_notif.tpl"}
	
	<h2>Products List</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Country</th>
				<th>State</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Hafid Afridian</td>
				<td>Indonesia</td>
				<td>Active</td>
			</tr>
		</tbody>
	</table>
</div>
{/block}
			