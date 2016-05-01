{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='years'}
{/block}

{block name=breadcrumb}
	{include file="admin/year/breadcum.tpl" active='Acreate'}
{/block}

{block name=sidebar}
	{include file="admin/year/sidebar.tpl" active='Acreate'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Create Academic year</h2>
	<form class="form-horizontal" action="{base_url url='admin/year/create'}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='year' opt=1}">
			<label for="year" class="col-sm-2 control-label">Year</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="year" name="year" placeholder="Year" value="{set_value field='year'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='year' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='status' opt=1}">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					<option value="1">Active</option>
					<option value="0">Non-Active</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='status' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	{form_error}
</div>
{/block}

{block name=modal}
{/block}
			