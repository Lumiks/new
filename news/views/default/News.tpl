
	{foreach $rsInfo as $item name=rsInfo}
	    <div style="float: left; padding: 0px 30px 40px 0px;">
		    <a href="/page/{$item['id']}/">
	           <img src="/images/News/{$item['image']}" width="100" />
	        </a><br />
        <a href="/page/{$item['id']}/">{$item['name']}</a>
	    </div>

        {if $smarty.foreach.rsInfo.iteration mod 3 == 0}
           <div style="clear: both;"></div>
        {/if}
    {/foreach}

