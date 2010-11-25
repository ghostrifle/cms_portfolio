<div class="pageoptions" style="float: left;">
	<p class="pageoptions">{$addlink}</p>
</div>
<div class="clear"></div>

<table cellspacing="0" class="pagetable">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Beschreibung</th>
		<th>Link</th>
		<th>Image</th>
		<th></th>
	</thead>
	<tbody>
		{foreach from=$PORTFOLIO_ENTRIES item=PENTRY}
		<tr>
			<td>{$PENTRY.id}</td>
			<td>{$PENTRY.name}</td>
			<td>{$PENTRY.body}</td>
			<td>{$PENTRY.link}</td>
			<td>{$PENTRY.image}</td>
			<td>{$PENTRY.edit_link} {$PENTRY.delete_link}</td>
		</tr>
		{/foreach}
	</tbody>
</table>

<div class="pageoptions" style="float: left;">
	<p class="pageoptions">{$addlink}</p>
</div>
<div class="clear"></div>