<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="{base_url url='admin'}">Admin</a></li>
	{if (isset($active) && $active == 'home')}
	<li class="{if (isset($active) && $active == 'home')} {'active'} {/if}">Fault Category</li>
	{elseif (isset($active) && $active == 'create')}
	<li><a href="{base_url url='admin/fault/category'}">Fault Category</a></li>
	<li class="{if (isset($active) && $active == 'create')} {'active'} {/if}">Create</li>
	{elseif (isset($active) && $active == 'edit')}
	<li><a href="{base_url url='admin/fault/category'}">Fault Category</a></li>
	<li class="{if (isset($active) && $active == 'edit')} {'active'} {/if}">Edit</li>
	{elseif (isset($active) && $active == 'detail')}
	<li><a href="{base_url url='admin/fault/category'}">Fault Category</a></li>
	<li class="{if (isset($active) && $active == 'detail')} {'active'} {/if}">Detail</li>
	{/if}
</ol>