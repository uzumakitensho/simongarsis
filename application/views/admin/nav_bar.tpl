<header class="navbar navbar-default" style="margin: 0; border-radius: 0px;">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{base_url url='admin'}">SIMONGARSIS</a>
		</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{base_url url='admin/user'}">Administrator</a></li>
						<li><a href="{base_url url='admin/teacher'}">Teacher</a></li>
						<li><a href="{base_url url='admin/student'}">Student</a></li>
						<li><a href="{base_url url='admin/parent'}">Parents</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Master<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Faults</a></li>
						<li><a href="#">Courses</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="{base_url url='admin/role'}">User Roles</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{get_session name='full_name'}<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Profil</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="{base_url url='admin/logout'}">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</header>