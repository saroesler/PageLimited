{include file='Admin/Header.tpl' __title='Refuse Manager' icon='cancel'}
<h2 style="margin-top:20px">{gt text="You want to refuse this changes of the page"}</h2>
<p  style="margin-top:20px">{$page->gettext()}</p>
<p>{gt text="Last change:"} {$page->geteditdateFormatted()}</p>

<br/><br/>
{if $page.edit_comment}
	<h3>{gt text="The Editor wrote about his changes:"}</h3>
	<p>{$page.edit_comment}</p>
<br/><br/>
{/if}

{if $page.refuse_comment}
	<h3>{gt text="The changes couldn't published because of this:"}</h3>
	<p>{$page.refuse_comment}</p>
<br/><br/>
{/if}

<form class="z-form" method="post" action="{modurl modname='PageZensor' type='Admin' func='Refusemanager'}">
		<div class="z-formrow">
		<textarea type="text" name="refuse_comment"  rows=10 textMode="multiline" width="80%">{$page.refuse_comment}</textarea>
		</div>
						<button onclick="document.getElementById('action').value = 'OK'" style="margin-top:20px;">{img src='button_ok.png' modname='core' set='icons/extrasmall'}{gt text="Send refuse"}</button>
						<button onclick="document.getElementById('action').value = ''">{img src='button_cancel.png' modname='core' set='icons/extrasmall'}{gt text="Cancel refuse"}</button>
	<input name="action" id="action" type="hidden"/>
	<input name="pid" id="pid" type="hidden" value="{$page->getpid()}"/>
</form>
{include file='Admin/Footer.tpl'}
