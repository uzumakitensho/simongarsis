{extends file="master_layout.tpl"}

{block name=breadcrumb}
<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	<li class="active">Create</li>
</ol>
{/block}

{block name=sidebar}
	{include file="welcome\sidebar.tpl"}
{/block}
				
{block name=content}
<div class="col-md-10" style="min-height:515px;">
	{include file="top_notif.tpl"}
	
	<h2>Create Product</h2>
	<form class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-1 control-label">Email</label>
			<div class="col-sm-11">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-1 control-label">Password</label>
			<div class="col-sm-11">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#gridSystemModal"> Launch demo modal </button>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-11">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>
</div>
{/block}

{block name=modal}
	{include file="welcome\_modal.tpl"}
{/block}
			