{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='users'}
{/block}

{block name=breadcrumb}
	{include file="admin/user/breadcum.tpl" active='create'}
{/block}

{block name=sidebar}
	{include file="admin/user/sidebar.tpl" active='create'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Create User</h2>
	<form class="form-horizontal" action="{base_url url='admin/user/create'}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='full_name' opt=1}">
			<label for="full_name" class="col-sm-1 control-label">Name</label>
			<div class="col-sm-11">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{set_value field='full_name'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='full_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='email' opt=1}">
			<label for="email" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{set_value field='email'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='email' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='username' opt=1}">
			<label for="username" class="col-sm-1 control-label">Username</label>
			<div class="col-sm-11">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{set_value field='username'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='username' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='password' opt=1}">
			<label for="password" class="col-sm-1 control-label">Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='password' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='confirm_password' opt=1}">
			<label for="confirm_password" class="col-sm-1 control-label">Confirm Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='confirm_password' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='status' opt=1}">
			<label for="status" class="col-sm-1 control-label">Status</label>
			<div class="col-sm-11">
				<select name="status" class="form-control">
					<option value="1">Active</option>
					<option value="0">Non-Active</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='status' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<input type="hidden" name="role_id" value="1">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	{form_error}
</div>
{/block}

{block name=modal}
{/block}
			