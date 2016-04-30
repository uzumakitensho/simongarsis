{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='roles'}
{/block}

{block name=breadcrumb}
	{include file="admin/role/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/role/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit Role</h2>
	<form class="form-horizontal" action="{base_url url='admin/role/edit' src=$role->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='name' opt=1}">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="{$role->id}">
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{$role->name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='description' opt=1}">
			<label for="description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="description" name="description" placeholder="" value="{$role->description}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='description' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					{if $role->status == 1}
					<option value="0">Non-Active</option>
					<option value="1" selected>Active</option>
					{else}
					<option value="0" selected>Non-Active</option>
					<option value="1">Active</option>
					{/if}
				</select>
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
			