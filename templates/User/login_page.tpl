
<form class="z-form" method="post" action="{modurl modname='PageLimited' type='User' func='display'}">
	<h1>{gt text="login"}<h1>
	<fieldset style="margin:20px;">
		<h2>{gt text="Please enter the keyword for the side:"} {$title}</h2>
		<td><input type="Password" name="inkex" size="30"/>
		<button >{img src='button_ok.png' modname='core' set='icons/extrasmall'}</button>
		<br/>
		<h5><a href="javascript:alert('{$reminder}')">{gt text="Forgot the key?"}</a></h5>
	</fieldset>
	<input name="pid" id="id" type="hidden" value="{$pid}" />
</form>

