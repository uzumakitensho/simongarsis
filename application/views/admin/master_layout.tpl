<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SMPS | Sistem Monitoring Pelanggaran Siswa</title>

    <!-- Bootstrap -->
    <link href="{base_url url='assets/css' src='bootstrap.min.css'}" rel="stylesheet">
  </head>
  <body>
		{block name=navbar}
		{/block}
		
		{block name=breadcrumb}{/block}
		
		<div class="container-fluid" style="z-index:10;">
			<div class="row">
				{block name=sidebar}{/block}
				
				{block name=content}{/block}
			</div>
		</div>
		
		{block name=footer}
		<footer class="navbar navbar-default" style="margin-top:20px; margin-bottom:0px; border-radius: 0px;">
			<div class="container-fluid">
				<p class="navbar-text">Signed in as {get_session name='full_name'}. Powered by Smarty {$smarty.version}.</p>
			</div>
		</footer>
		{/block}
		
		{block name=modal}{/block}
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{base_url url='assets/js' src='jquery-1.12.3.min.js'}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{base_url url='assets/js' src='bootstrap.min.js'}"></script>
    <!-- Use Commonmark.js -->
    <script src="{base_url url='assets/js' src='commonmark.js'}"></script>

    {block name=js}{/block}
  </body>
</html>