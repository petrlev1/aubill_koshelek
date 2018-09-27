<div class="modal2 modal2hide">
  <div class="modal2cont">
  
    <div style="text-align:right"><a href="#" class="modal2hide"><img src="css/img/close.svg" /></a></div>
    <ul class="modalList">
    <li><a href="#" class="content_menu_generalUser">Мой кошелек</a></li>
    <li><a href="#" class="content_menu_juniorUser">Мой семейный кошелек
<div style="display:block; font-size: 11px; margin: 5px 0 0 0;">Старший пользователь: <strong>Иванов Константин</strong></div></a></li>
    <li class="modalListEnd"><a href="#" class="content_menu_generalUser2">Кафе Березка</a></li>
    </ul>
  </div>
</div>





<div class="head1" style="height: 77px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  
  
  <?php 
   
  if ( $showBack == "1" ) { 
  echo "<td width=\"1\"><a href=\"menu.php\"><img src=\"css/img/arBack.svg\"></a></td>"; 
  }
  ?>
  <td width="1" valign="top"><a href="index.php" style="padding: 12px 10px 0 0; display:block"><img src="css/img/arBack.svg" /></a></td>
    <td align="left" valign="top">
    <img src="css/img/ic_headMenu_koshel.svg" class="ic_headMenu_koshel">
<div id="modal1ChangeUser" class="headMenu modal2a">
<div class="headMenuTit">Иванов Иван</div>
<div class="headMenuTit2">Старший кошелек</div>
</div>


<script type="text/javascript">
$("#modal1ChangeUser").click(function() {$(".modal1ChangeUser").show();});

$(".content_menu_generalUser").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class=\"headMenuTit\">Иванов Иван</div><div class=\"headMenuTit2\"><strong>Старший кошелек</strong></div>';
});

$(".content_menu_generalUser2").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class="headMenuTit">Кафе Березка</div><div class="headMenuTit2">Старший кошелек</div>';
});

$(".content_menu_juniorUser").click(function()
{
	$("div#content_menu_juniorUser").show();
	$("div#content_menu_generalUser").hide();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class="headMenuTit">Мой семейный кошелек</div><div class="headMenuTit2">Младший кошелек</div><div class="headMenuTit3">Старший пользователь: <strong>Иванов Константин</strong></div>';
});

$(".editUserTitle").click(function() {$(".modal1ChangeTitle").show();});

</script>
   
    </td>
    
  </tr>
</table>
</div>


<script type="text/javascript">
$(".modal2a").click(function(){
    $(".modal2").show();
});

$(".modal2hide").click(function(){
    $(".modal2").hide();
});
</script>