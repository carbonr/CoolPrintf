{if $error ne ""}
	<div id="errorExplanation">
		<h2>{$lang11}</h2>
        <ul>
        	{$error}
        </ul>
    </div>
{elseif $msg ne ""}
	<div id="errorExplanation">
		<h2>{$lang54}</h2>
        <ul>
        	{$msg}
        </ul>
    </div>
{/if}