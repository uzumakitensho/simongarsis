{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='users'}
{/block}

{block name=breadcrumb}
	{include file="admin/user/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/user/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit User</h2>
	<form class="form-horizontal" action="{base_url url='admin/user/edit' src=$user->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='full_name' opt=1}">
			<label for="full_name" class="col-sm-1 control-label">Name</label>
			<div class="col-sm-11">
				<input type="hidden" name="id" value="{$user->id}">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{$user->full_name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='full_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='email' opt=1}">
			<label for="email" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{$user->email}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='email' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-1 control-label">Status</label>
			<div class="col-sm-11">
				<select name="status" class="form-control">
					{if $user->status == 1}
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
			<div class="col-sm-offset-1 col-sm-11">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	{form_error}
</div>
{/block}

{block name=modal}
{/block}
			