<div class="col-md-2" style="padding-left: 0px; padding-right: 0px;">
	<div class="list-group">
		{if (isset($active) && ($active == 'list' || $active == 'create'))}
		<a href="{base_url url='admin/fault/type'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Fault Type
		</a>
		<a href="{base_url url='admin/fault/type/create'}" class="list-group-item {if (isset($active) && $active == 'create')} {'active'} {/if}" style="border-radius: 0px;">Create Fault Type</a>
		{elseif (isset($active) && ($active == 'list' || $active == 'edit'))}
		<a href="{base_url url='admin/fault/type'}" class="list-group-item {if (isset($active) && $active == 'list')} {'active'} {/if}" style="border-radius: 0px;">
			List of Fault Type
		</a>
		<a href="{base_url url='admin/fault/type/edit' src=$type->id}" class="list-group-item {if (isset($active) && $active == 'edit')} {'active'} {/if}" style="border-radius: 0px;">Edit Fault Type</a>
		{/if}
	</div>
</div>