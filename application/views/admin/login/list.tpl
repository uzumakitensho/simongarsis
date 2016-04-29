{extends file="admin/master_layout.tpl"}

{block name=breadcrumb}
{/block}

{block name=sidebar}
{/block}
				
{block name=content}
<div class="col-md-8 col-md-offset-2" style="margin-top: 8em;">
	<div class="panel panel-default">
		<div class="panel-body">
			{include file="admin/top_notif.tpl"}
				<center>
					<h2>Login Administrator</h2>
					<form class="form-horizontal" action="{php} echo base_url('admin/login/check'); {/php}" method="post">
						<div class="form-group">
							<label for="username" class="col-sm-1 control-label">Username</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-1 control-label">Password</label>
							<div class="col-sm-11">
								<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="hidden" class="form-control" id="token" name="token" value="administrator">
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
				</center>
		</div>
	</div>
</div>
{/block}

{block name=footer}
<footer class="navbar navbar-default navbar-fixed-bottom">
	<div class="container-fluid">
		<p class="navbar-text"><b>Sistem Monitoring Pelanggaran Siswa</b>. Powered by Smarty {$smarty.version}.</p>
	</div>
</footer>
{/block}
			