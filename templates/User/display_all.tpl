<h1>{gt text="All pages"}</h1>
<br/>
<table>
{foreach from=$pages item='page'}
	<tr>
		<td><a  href="{modurl modname='page_zensor' type='user' func='display' pid=$page->getpid()}">{$page->gettitle()}</a></td>
	</tr>
{/foreach}
</table>


