<div class="head1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  
  
  <?php 
   
  if ( $showBack == "1" ) { 
  echo "<td width=\"1\"><a href=\"menu.php\"><img src=\"css/img/arBack.svg\"></a></td>"; 
  }
  ?>
    <td align="left" valign="top">
    <div>
<div style="position: relative"><a href="#" id="modal1ChangeUser" style="font-size: 18px;">Мой кошелек</a> <a>&#9660;</a></div>
<div style="margin: 10px 0 0 0; text-align:right"><a href="#" class="editUserTitle" style="font-size: 11px;">Изменить название</a></div>
    </div>
      
      <div class="modal1 modal1ChangeUser" style="margin:-10px 0 0 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>

<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0; border-bottom: 1px solid #e6e6e6">Мой кошелек</a>
<a href="#" class="content_menu_juniorUser" style="display:block; padding: 15px 0">Мой семейный кошелек<br>(Иванов Иван)</a>

</div>

<div class="modal1 modal1ChangeTitle">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0">Укажите новое название кошелька:</div>
<input name="" type="text" style="width: 200px; height: 20px;" />
</div>

<script type="text/javascript">
$("#modal1ChangeUser").click(function() {$(".modal1ChangeUser").show();});

$(".content_menu_generalUser").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = 'Мой кошелек';
});

$(".content_menu_juniorUser").click(function()
{
	$("div#content_menu_juniorUser").show();
	$("div#content_menu_generalUser").hide();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = 'Мой семейный кошелек<br><span style="font-size: 11px;">Старший пользователь: <strong>Иванов Константин</strong></span>';
});

$(".editUserTitle").click(function() {$(".modal1ChangeTitle").show();});

</script>
   
    </td>
    <td width="1" valign="top"><a href="index.php"><img src="css/img/close.svg"></a></td>
  </tr>
</table>
</div>