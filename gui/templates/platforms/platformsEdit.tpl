{*
TestLink Open Source Project - http://testlink.sourceforge.net/
@filesource	platformsEdit.tpl
Purpose: smarty template - Edit a platform
*}

{$cfg_section=$smarty.template|basename|replace:".tpl":""}
{config_load file="input_dimensions.conf" section=$cfg_section}

{$url_args="lib/platforms/platformsEdit.php"}
{$platform_edit_url="$basehref$url_args"}

{lang_get var="labels"
          s="warning,warning_empty_platform,show_event_history,
             th_platform,th_notes,btn_cancel"}


{include file="inc_head.tpl" jsValidate="yes" openHead="yes"}
{include file="inc_del_onclick.tpl"}

</head>

<body>
<h1 class="title">{$gui->action_descr|escape}</h1>

{include file="inc_feedback.tpl" user_feedback=$gui->user_feedback}

{if $gui->canManage ne ""}
  <div class="workBack">
  
  <div>
	{if $gui->mgt_view_events eq "yes" && $gui->platformID > 0}
			<img style="margin-left:5px;" class="clickable" 
			     src="{$smarty.const.TL_THEME_IMG_DIR}/question.gif" 
			     onclick="showEventHistoryFor('{$gui->platformID}','platforms')" 
			     alt="{$labels.show_event_history}" title="{$labels.show_event_history}"/>
	{/if}
  
  </div><br />

  	<form id="addPlatform" name="addPlatform" method="post" 
          action="{$platform_edit_url}">

  	<table class="common" style="width:50%">
  		<tr>
  			<th>{$labels.th_platform}</th>
  			<td><input type="text" name="name"
  			           size="{#PLATFORM_SIZE#}" maxlength="{#PLATFORM_MAXLEN#}"
  				         value="{$gui->name|escape}" required />
			  </td>
  		</tr>
  		<tr>
  			<th>{$labels.th_notes}</th>
  			<td>{$gui->notes}</td>
  		</tr>
  	</table>
  	<div class="groupBtn">	
	  	<input type="hidden" name="doAction" value="" />
      <input type="hidden" name="testprojectID" value="{$gui->tproject_id}" />

	    <input type="submit" id="submitButton" name="submitButton" value="{$gui->submit_button_label}"
		         onclick="doAction.value='{$gui->submit_button_action}'" />
	  	<input type="button" value="{$labels.btn_cancel}"
		         onclick="javascript:location.href=fRoot+'lib/platforms/platformsView.php?tproject_id={$gui->tproject_id}'" />
  	</div>
  	</form>
  </div>
{/if}
{* --------------------------------------------------------------------------------------   *}

</body>
</html>
