<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		{if (isset($active) && ($active == 'list' || $active == 'create'))}
		<a href="{base_url url='admin/user'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="{base_url url='admin/user/create'}" class="list-group-item {if (isset($active) && $active == 'create')} {'active'} {/if}" style="border-radius: 0px;">Create User</a>
		{elseif (isset($active) && ($active == 'list' || $active == 'edit'))}
		<a href="{base_url url='admin/user'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Users
		</a>
		<a href="{base_url url='admin/user/edit' src=$user->id}" class="list-group-item {if (isset($active) && $active == 'edit')} {'active'} {/if}" style="border-radius: 0px;">Edit User</a>
		{/if}
	</div>
</div>