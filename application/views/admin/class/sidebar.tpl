<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		{if (isset($active) && ($active == 'list' || $active == 'create'))}
		<a href="{base_url url='admin/class'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Class
		</a>
		<a href="{base_url url='admin/class/create'}" class="list-group-item {if (isset($active) && $active == 'create')} {'active'} {/if}" style="border-radius: 0px;">Create Class</a>
		{elseif (isset($active) && ($active == 'list' || $active == 'edit'))}
		<a href="{base_url url='admin/class'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Class
		</a>
		<a href="{base_url url='admin/class/edit' src=$class->id}" class="list-group-item {if (isset($active) && $active == 'edit')} {'active'} {/if}" style="border-radius: 0px;">Edit Class</a>
		{/if}
	</div>
</div>