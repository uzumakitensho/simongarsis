{extends file="admin/master_layout.tpl"}

{block name=navbar}
	{include file="admin/nav_bar.tpl"}
{/block}

{block name=breadcrumb}
	{include file="admin/home/breadcum.tpl" active='home'}
{/block}

{block name=sidebar}
{/block}
				
{block name=content}
<div class="col-md-12" style="min-height:515px;">
	{include file="admin/top_notif.tpl"}
	<h3>Welcome, {get_session name='full_name'}.</h3>
	<p>Date: {$now}</p>
</div>
{/block}

{block name=js}
<script>
	$(function() {
		var commonmark = window.commonmark;
		var parser = new commonmark.Parser();
		var renderer = new commonmark.HtmlRenderer();

		//$('#preview').html(renderer.render(parser.parse($("#content").val())));
		//$('#preview').html(renderer.render(parser.parse('# Heading 1')));
	} );
</script>
{/block}
			