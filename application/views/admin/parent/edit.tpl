{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='parents'}
{/block}

{block name=breadcrumb}
	{include file="admin/parent/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/parent/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit Parent</h2>
	<form class="form-horizontal" action="{base_url url='admin/parent/edit' src=$parent->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='full_name' opt=1}">
			<label for="full_name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="{$parent->id}">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{$parent->full_name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='full_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_date' opt=1}">
			<label for="born_date" class="col-sm-2 control-label">Born Date</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="born_date" name="born_date" placeholder="" value="{$parent->born_date}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_date' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_place' opt=1}">
			<label for="born_place" class="col-sm-2 control-label">Born Place</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="born_place" name="born_place" placeholder="" value="{$parent->born_place}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_place' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='gender' opt=1}">
			<label for="gender" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
				<select name="gender" class="form-control">
					<option value="L" {if $parent->gender == 'L'} 'selected' {/if}>Male</option>
					<option value="P" {if $parent->gender == 'P'} 'selected' {/if}>Female</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='gender' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='telephone' opt=1}">
			<label for="telephone" class="col-sm-2 control-label">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="{$parent->telephone}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='telephone' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='address' opt=1}">
			<label for="address" class="col-sm-2 control-label">Address</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="address" name="address">{$parent->address}</textarea>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='address' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='email' opt=1}">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{$parent->email}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='email' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					{if $parent->status == 1}
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
			