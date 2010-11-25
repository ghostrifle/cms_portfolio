<h1>Eintrag bearbeiten</h1>
{$startform}
{$entry_id}
	<div class="pageoverflow">
		<p class="pagetext">Name:</p>
		<p class="pageinput">{$entry_name}</p>
	</div>

	<div class="pageoverflow">
		<p class="pagetext">Beschreibung:</p>
		<p class="pageinput">{$entry_body}</p>
	</div>
	
	<div class="pageoverflow">
		<p class="pagetext">HTTP-Link:</p>
		<p class="pageinput">{$entry_link}</p>
	</div>
	
	<div class="pageoverflow">
		<p class="pagetext">Image:</p>
		<p class="pageinput">{$entry_image}</p>
	</div>
	
	<div class="pageoverflow">
		<p class="pagetext"><img src="{$ROOT_URL}/uploads/images/portfolio/{$ENTRY.image}" alt="{$ENTRY.name}" /></p>
	</div>
	
	{$submit}
{$endform}