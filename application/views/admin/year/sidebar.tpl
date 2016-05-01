<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		{if (isset($active) && ($active == 'Alist' || $active == 'Slist' || $active == 'Acreate'))}
		<a href="{base_url url='admin/year'}" class="list-group-item {if (isset($active) && $active == 'Alist')} {'active'} {/if}" style="border-radius: 0px;">
			List of Academic Year
		</a>
		<a href="{base_url url='admin/year/create'}" class="list-group-item {if (isset($active) && $active == 'Acreate')} {'active'} {/if}" style="border-radius: 0px;">Create Academic Year</a>
		<hr>
		<a href="{base_url url='admin/semester'}" class="list-group-item {if (isset($active) && $active == 'Slist')} {'active'} {/if}" style="border-radius: 0px;">
			List of Semester
		</a>
		{elseif (isset($active) && ($active == 'Alist' || $active == 'Slist' || $active == 'Aedit'))}
		<a href="{base_url url='admin/year'}" class="list-group-item {if (isset($active) && $active == 'Alist')} {'active'} {/if}" style="border-radius: 0px;">
			List of Academic Year
		</a>
		<a href="{base_url url='admin/year/edit' src=$year->id}" class="list-group-item {if (isset($active) && $active == 'Aedit')} {'active'} {/if}" style="border-radius: 0px;">Edit Academic Year</a>
		<hr>
		<a href="{base_url url='admin/semester'}" class="list-group-item {if (isset($active) && $active == 'Slist')} {'active'} {/if}" style="border-radius: 0px;">
			List of Semester
		</a>
		{/if}
	</div>
</div>