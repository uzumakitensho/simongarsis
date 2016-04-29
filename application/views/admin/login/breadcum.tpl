<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="#">Admin</a></li>
	{if (isset($active) && $active == 'home')}
	<li class="{if (isset($active) && $active == 'home')} {'active'} {/if}">User</li>
	{elseif (isset($active) && $active == 'create')}
	<li><a href="{php} echo base_url().'admin/user';{/php}">User</a></li>
	<li class="{if (isset($active) && $active == 'create')} {'active'} {/if}">Create</li>
	{elseif (isset($active) && $active == 'edit')}
	<li><a href="{php} echo base_url().'admin/user';{/php}">User</a></li>
	<li class="{if (isset($active) && $active == 'edit')} {'active'} {/if}">Edit</li>
	{/if}
</ol>