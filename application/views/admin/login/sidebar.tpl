<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		{if (isset($active) && ($active == 'list' || $active == 'create'))}
		<a href="#" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="#" class="list-group-item" style="border-radius: 0px;">Create User</a>
		{elseif (isset($active) && ($active == 'list' || $active == 'edit'))}
		<a href="#" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="#" class="list-group-item" style="border-radius: 0px;">Edit User</a>
		{/if}
	</div>
</div>