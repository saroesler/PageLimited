{include file='Admin/Header.tpl' __title='Help' icon='help'}
<h1>{gt text="Help"}</h1>
{modavailable modname="Help" assign="help_modul"}

{if help_modul}
<script type="text/javascript">
<!--
window.location = "modules/Help/docs/pdf/Autoren_Seite_bearbeiten.pdf"
//-->
</script>
{else}
<p>{gt text="Here you can find help about this zikula module. The main idea of this modul is to make a manager of many sites with an admin adding sites, many editors, writing things on the sites and few confirmator, watching if the changes are okay."}
<br/><br/>
<h2>{gt text="Permissions"}</h2>
<p>{gt text="The administrator, adding and deleating sites has to get the Admin- Access for the Page- Zensor module. The Permissionrule shows like this: Group: The Group of Administrators, Component:\"PageZensor::\", Instance:\"::\", Permission level: \"Admin access\""}</p>
<br/>
<p>{gt text="The editor, eding sites has to get the Moderate- Access for the Page- Zensor module. The Permissionrule shows like this: Group: The Group of Editors for one or a group of sites, Component:\"PageZensor::(1|2)\", Instance:\"::\", Permission level: \"Moderate access\" (In this case the group can edit page 1 and page 2.). To set the edit-access for the pages, you have to put in the clip the page-id, finding in the pagemanager"}</p>
<br/>
<p>{gt text="The confirmator, confirming changes has to get the Edit- Access for the Page- Zensor module. The Permissionrule shows like this: Group: The Group of confirmators, Component:\"PageZensor::\", Instance:\"::\", Permission level: \"Edit access\""}</p>
<br/><br/>
<h2>{gt text="Operation"}</h2>
<p>{gt text="The Administrator can use the pagemanger zu create new pages by putting in a title and klicking on the green tik or to delete pages by using the rubbish."}
<br/>
<p>{gt text="The Editor can edit his pages by using the edit button on the main site in the category \"my pages\". To explain, what has been changed, there is the field with the title \"What has changed?\". Display edit shows the new site, even if it isn't confirmed. The Display shows the last confirmed site. The Mainpage show, which changes are pending, and whitch changes are remarked. "}
<br/>
<p>{gt text="The Confirmator use the edit view on the category \"changes\". In the opening view he can decide, if the changes, are ok, or not. If they aren't, he writes down, what isn't ok, to send the editor his remarks."}
<br/>
<h2>{gt text="Startmodule"}</h2>
<p>{gt text="To get this module as startmodule, you have to set \"PageZensor\" as startmodule. The type is \"user\" and the func is \"main\". You choose the page by choosing this page as \"Mainpage\" in the \"Page Manager\""}</p>
{include file='Admin/Footer.tpl'}
{/if}
