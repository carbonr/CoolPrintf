{if $error ne ""}
	<div id="errorExplanation">
		<h2>{$lang11}</h2>
        <ul>
        	{$error}
        </ul>
    </div>
{/if}

{if $done eq "1"}
{literal}
<script type="text/javascript">
	$(document).ready(function() {
		setTimeout("document.location.href = '{/literal}{$baseurl}{literal}/';",1)
	});
</script>
{/literal}
{/if}