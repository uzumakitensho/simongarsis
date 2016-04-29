<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Blogs | Dashboard</title>

    <!-- Bootstrap -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
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
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</header>
		
		<ol class="breadcrumb" style="margin-bottom: 0;">
			<li><a href="#">Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active">Data</li>
		</ol>
		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
					<div class="list-group">
						<a href="#" class="list-group-item active" style="border-radius: 0px;">
							Cras justo odio
						</a>
						<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item">Morbi leo risus</a>
						<a href="#" class="list-group-item">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item" style="border-radius: 0px;">Vestibulum at eros</a>
					</div>
				</div>
				<div class="col-md-10">
					<div class="alert alert-warning alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Warning!</strong> Better check yourself, you're not looking too good.
					</div>
					<h2>Welcome, Administrator...</h2>
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
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
					
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Country</th>
								<th>State</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Hafid Afridian</td>
								<td>Indonesia</td>
								<td>Active</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Hafid Afridian</td>
								<td>Indonesia</td>
								<td>Active</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Hafid Afridian</td>
								<td>Indonesia</td>
								<td>Active</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Hafid Afridian</td>
								<td>Indonesia</td>
								<td>Active</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<footer class="navbar navbar-default" style="margin-top:20px; margin-bottom:0px; border-radius: 0px;">
			<div class="container-fluid">
				<p class="navbar-text">Signed in as Hafid Afridian</p>
			</div>
		</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./assets/js/jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>