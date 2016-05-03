{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='categories'}
{/block}

{block name=breadcrumb}
	{include file="admin/category/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/category/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit Fault Category</h2>
	<form class="form-horizontal" action="{base_url url='admin/fault/category/edit' src=$category->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='name' opt=1}">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="{$category->id}">
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{$category->name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='short_name' opt=1}">
			<label for="short_name" class="col-sm-2 control-label">Short Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="short_name" name="short_name" placeholder="Short Name" value="{$category->short_name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='short_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='description' opt=1}">
			<label for="description" class="col-sm-2 control-label">Short Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{$category->description}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='description' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					{if $category->status == 1}
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
			