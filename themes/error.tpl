{if $error ne ""}
<div class='flash_error'>
	<p>{$error}</p>
</div>
{/if}
{if $message ne ""}
<div class='flash_notice'>
    <p>{$message}</p>
</div>
{/if}
