<script src="{$ROOT_URL}/uploads/portfolio/jquery.flip.min.js" type="text/javascript"></script>
<script src="{$ROOT_URL}/uploads/portfolio/portfolio.js" type="text/javascript"></script>


<div class="sponsorListHolder">

	
{foreach from=$PORTFOLIO_ENTRIES item=PENTRY}
			<div class="sponsor" title="Click to flip">
			<div class="sponsorFlip">
			<img src="{$ROOT_URL}/uploads/images/portfolio/{$PENTRY.image}" alt="{$PENTRY.name}" />
			</div>
			<div class="sponsorData">
			<div class="sponsorDescription">{$PENTRY.body}</div>
			<div class="sponsorURL"><a href="{$PENTRY.link}">{$PENTRY.link}</a></div>
			</div>
			</div>
			
{/foreach}
</div>