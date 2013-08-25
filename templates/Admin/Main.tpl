{include file='Admin/Header.tpl' __title='Main' icon='config'}

<!----------------------------show changes to confirm-------------------------------------------->
<div style="margin-left:10px">
	<form class="z-form" method="post" action="{modurl modname='PageLimited' type='Admin' func='Maincontroller'}">
		
		<!-------------------------show my pages---------------------------------->
		<h3>{gt text="My pages"}</h3>
		<table class="z-datatable">
			<thead>
				<tr>
					<th>{gt text='Title'}</th>
					<th>{gt text='Date'}</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$mypages item='mypage'}
					<tr><td><a  href="{modurl modname='PageLimited' type='user' func='display' pid=$mypage.pid}">{$mypage.title}</a></td>
						<td>{$mypage.date}</td>
						<td>
						<button onclick="document.getElementById('action').value = 'display_view'; document.getElementById('id').value = {$mypage.pid};">{img src='14_layer_visible.png' modname='core' set='icons/extrasmall'}{gt text="Display View"}</button>
						<button onclick="document.getElementById('action').value = 'edit'; document.getElementById('id').value = {$mypage.pid};">{img src='xedit.png' modname='core' set='icons/extrasmall'}{gt text="Edit"}
						<button onclick="document.getElementById('action').value = 'key'; document.getElementById('id').value = {$mypage.pid};">{img src='password.png' modname='core' set='icons/extrasmall'}{gt text="Key"}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
		<br/><br/>

		<input name="action" id="action" type="hidden" />
		<input name="id" id="id" type="hidden" />
	</form>
</div>
{include file='Admin/Footer.tpl'}
