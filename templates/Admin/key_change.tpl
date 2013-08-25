{include file='Admin/Header.tpl' __title='Key Changer' icon='display'}

<h2>{gt text="Change Key for"} {$title}</h2>
<form class="z-form" method="post" action="{modurl modname='PageLimited' type='Admin' func='new_key'}">
	
	<fieldset>
		<table  border="8" cellspacing="10" cellpadding="20" style="border-spacing:10px">
			<tr>
				<td>{gt text="Keyword"}</td>
				<td><input type="Password" name="inkex" size="30"/></td>
			</tr>
			<tr>
				<td>{gt text="Keyreminder"}</td>
				<td><input type="text" name="inkeyreminder" size="30"/></td>
			</tr>
			<tr></tr>
			<tr>
				<td></td>
				<td>
					<button onclick="document.getElementById('action').value = 'add'" style="width:100px">{img src='button_ok.png' modname='core' set='icons/extrasmall'}</button>
								<button onclick="document.getElementById('action').value = ''" style="width:100px">{img src='button_cancel.png' modname='core' set='icons/extrasmall'}</button>
				</td>
			</tr>
		</table>
	</fieldset>
					
	<input name="action" id="action" type="hidden" />
	<input name="id" id="id" type="hidden" value={$pid}/>
</form>

{include file='Admin/Footer.tpl'}
