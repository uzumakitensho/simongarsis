{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='teachers'}
{/block}

{block name=breadcrumb}
	{include file="admin/teacher/breadcum.tpl" active='create'}
{/block}

{block name=sidebar}
	{include file="admin/teacher/sidebar.tpl" active='create'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Create Teacher</h2>
	<form class="form-horizontal" action="{base_url url='admin/teacher/create'}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='full_name' opt=1}">
			<label for="full_name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{set_value field='full_name'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='full_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='nip' opt=1}">
			<label for="nip" class="col-sm-2 control-label">NIP</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="{set_value field='nip'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='nip' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_date' opt=1}">
			<label for="born_date" class="col-sm-2 control-label">Born Date</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="born_date" name="born_date" placeholder="" value="{set_value field='born_date'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_date' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_place' opt=1}">
			<label for="born_place" class="col-sm-2 control-label">Born Place</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="born_place" name="born_place" placeholder="" value="{set_value field='born_place'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_place' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='gender' opt=1}">
			<label for="gender" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
				<select name="gender" class="form-control">
					<option value="L">Male</option>
					<option value="P">Female</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='gender' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='telephone' opt=1}">
			<label for="telephone" class="col-sm-2 control-label">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="{set_value field='telephone'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='telephone' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='address' opt=1}">
			<label for="address" class="col-sm-2 control-label">Address</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="address" name="address">{set_value field='address'}</textarea>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='address' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='email' opt=1}">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{set_value field='email'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='email' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='username' opt=1}">
			<label for="username" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{set_value field='username'}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='username' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='password' opt=1}">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='password' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='confirm_password' opt=1}">
			<label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='confirm_password' opt=2}</span>
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
		<div class="form-group {form_error field='role' opt=1}">
			<label for="role" class="col-sm-2 control-label">Role</label>
			<div class="col-sm-10">
				<select name="role" class="form-control">
				{foreach $roles as $key => $role}
					<option value="{$role->id}">{$role->description}</option>
				{/foreach}
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='role' opt=2}</span>
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
			