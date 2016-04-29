{if isset($success)}
<div class="alert alert-success alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Success!</strong> {$success}.
</div>
{elseif isset($failed)}
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Error!</strong> {$failed}.
</div>
{elseif isset($warning)}
<div class="alert alert-warning alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Warning!</strong> {$warning}.
</div>
{elseif isset($info)}
<div class="alert alert-info alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Just info!</strong> {$info}.
</div>
{else}
	{session name='success'}
	{session name='failed'}
	{session name='warning'}
	{session name='info'}
{/if}
