<ol class="breadcrumb" style="margin-bottom: 0;">
	<li><a href="{base_url url='admin'}">Admin</a></li>
	{if (isset($active) && $active == 'Ahome')}
	<li class="{if (isset($active) && $active == 'Ahome')} {'active'} {/if}">Academic Year</li>
	{elseif (isset($active) && $active == 'Acreate')}
	<li><a href="{base_url url='admin/year'}">Academic Year</a></li>
	<li class="{if (isset($active) && $active == 'Acreate')} {'active'} {/if}">Create</li>
	{elseif (isset($active) && $active == 'Aedit')}
	<li><a href="{base_url url='admin/year'}">Academic Year</a></li>
	<li class="{if (isset($active) && $active == 'Aedit')} {'active'} {/if}">Edit</li>
	{elseif (isset($active) && $active == 'Adetail')}
	<li><a href="{base_url url='admin/year'}">Academic Year</a></li>
	<li class="{if (isset($active) && $active == 'Adetail')} {'active'} {/if}">Detail</li>
	{/if}
	{if (isset($active) && $active == 'Shome')}
	<li class="{if (isset($active) && $active == 'Shome')} {'active'} {/if}">Semester</li>
	{elseif (isset($active) && $active == 'Screate')}
	<li><a href="{base_url url='admin/semester'}">Semester</a></li>
	<li class="{if (isset($active) && $active == 'Screate')} {'active'} {/if}">Create</li>
	{elseif (isset($active) && $active == 'Sedit')}
	<li><a href="{base_url url='admin/semester'}">Semester</a></li>
	<li class="{if (isset($active) && $active == 'Sedit')} {'active'} {/if}">Edit</li>
	{elseif (isset($active) && $active == 'Sdetail')}
	<li><a href="{base_url url='admin/semester'}">Semester</a></li>
	<li class="{if (isset($active) && $active == 'Sdetail')} {'active'} {/if}">Detail</li>
	{/if}
</ol>