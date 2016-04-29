{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl" active='students'}
{/block}

{block name=breadcrumb}
	{include file="admin/student/breadcum.tpl" active='edit'}
{/block}

{block name=sidebar}
	{include file="admin/student/sidebar.tpl" active='edit'}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	
	<h2>Edit Student</h2>
	<form class="form-horizontal" action="{base_url url='admin/student/edit' src=$student->id}" method="post">
		{* validation_errors *}
		<div class="form-group {form_error field='full_name' opt=1}">
			<label for="full_name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="{$student->id}">
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{$student->full_name}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='full_name' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='nis' opt=1}">
			<label for="nis" class="col-sm-2 control-label">NIS</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="{$student->nis}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='nis' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='nisn' opt=1}">
			<label for="nisn" class="col-sm-2 control-label">NISN</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="{$student->nisn}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='nisn' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_date' opt=1}">
			<label for="born_date" class="col-sm-2 control-label">Born Date</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="born_date" name="born_date" placeholder="" value="{$student->born_date}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_date' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='born_place' opt=1}">
			<label for="born_place" class="col-sm-2 control-label">Born Place</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="born_place" name="born_place" placeholder="" value="{$student->born_place}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='born_place' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='gender' opt=1}">
			<label for="gender" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
				<select name="gender" class="form-control">
					<option value="L" {if $student->gender == 'L'} 'selected' {/if}>Male</option>
					<option value="P" {if $student->gender == 'P'} 'selected' {/if}>Female</option>
				</select>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='gender' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='telephone' opt=1}">
			<label for="telephone" class="col-sm-2 control-label">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="{$student->telephone}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='telephone' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='address' opt=1}">
			<label for="address" class="col-sm-2 control-label">Address</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="address" name="address">{$student->address}</textarea>
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='address' opt=2}</span>
			</div>
		</div>
		<div class="form-group {form_error field='email' opt=1}">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{$student->email}">
				<span class="help-block text-danger" style="margin: 0px;">{form_error field='email' opt=2}</span>
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select name="status" class="form-control">
					{if $student->status == 1}
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
				<input type="hidden" name="role" value="7">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	{form_error}
</div>
{/block}

{block name=modal}
{/block}
			