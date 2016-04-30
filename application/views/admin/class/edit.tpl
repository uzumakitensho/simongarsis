{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='classes'}
{/block}

{block name=breadcrumb}
	{include file="admin/class/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/class/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit Class</h2>
	<form class="form-horizontal" action="{base_url url='admin/class/edit' src=$class->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='name' opt=1}">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="{$class->id}">
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{$class->name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='note' opt=1}">
			<label for="note" class="col-sm-2 control-label">Note</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="note" name="note" placeholder="Note" value="{$class->note}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='note' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					{if $class->status == 1}
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
			