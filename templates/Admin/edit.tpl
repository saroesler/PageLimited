{include file='Admin/Header.tpl' __title='Editor' icon='xedit'}
{form cssClass="z-form"}
    <fieldset>
        <legend>{gt text='Page information'}</legend>
        {formvalidationsummary}
        <div class="z-formrow">
            <label for="title">{gt text='Title'}</label>
            {formtextinput id="title" maxLength=300 mandatory=true text=$page.title}
        </div>

        <div class="z-formrow">
            <label for="text">{gt text='Content'}</label>
            <div class="z-formnote">
            	{formtextinput id="text" maxLength=3000 mandatory=true rows=10 textMode='multiline' text=$page.text}
            </div>
        </div>
        
        <div class="z-formnote">
            <a href="{modurl modname='PageZensor' type='admin' func='html_school_edit'  pid=$page.pid}" class="z-button">{img src='help.png' modname='core' set='icons/extrasmall'} {gt text='little html - school'}</a>
        </div>
   <div class="z-formbuttons z-buttons">
       {formbutton class="z-bt-ok" commandName="save" __text="Save"}
       {formbutton class="z-bt-cancel" commandName="cancel" __text="Cancel"}
   </div>
    </fieldset>
{/form}
{notifydisplayhooks eventname='pagelimited.ui_hooks.edit_page.form_edit' id=1 assign='hooks'}
{if is_array($hooks) && count($hooks)}
    {foreach key='providerArea' item='hook' from=$hooks}
            {$hook}
    {/foreach}
{/if}
{include file='Admin/Footer.tpl'}
