{include file='Admin/Header.tpl' __title='Edit Display' icon='display'}
<p>{$page->gettext()}</p>
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

<a href="{modurl modname='PageZensor' type='admin' func='edit' pid=$page->getpid()}" class="z-button">{img src='xedit.png' modname='core' set='icons/extrasmall'}{gt text='Edit'}</a>
{checkpermission component="PageZensor::" instance="::" level=ACCESS_EDIT assign=displayeditlink}
{if $displayeditlink}
	<a href="{modurl modname='PageZensor' type='admin' func='Pageconfirm' pid=$page.pid}" class="z-button">{img src='button_ok.png' modname='core' set='icons/extrasmall'}   {gt text="Confirm"}</a>
	<a href="{modurl modname='PageZensor' type='admin' func='Pagerefuse' pid=$page.pid}" class="z-button">{img src='button_cancel.png' modname='core' set='icons/extrasmall'}   {gt text="Refuse"}</a>
	
{/if}

{include file='Admin/Footer.tpl'}
