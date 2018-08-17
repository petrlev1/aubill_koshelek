<div class="header0">
<div class="head1">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="#" class="newDoc"><img src="css/img/plus.svg"></a>
    <div class="modal1 modal1NewDoc">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
Выпустить:
<br>
<br>
<a href="sozdanie_cheka.php">Чек</a><br>
<br>
<a href="sozdanie_scheta.php">Счет</a><br>
<br>
</div>

<script type="text/javascript">
$(".newDoc").click(function(){
    $(".modal1NewDoc").show();
});

$(".modal1NewDocClose").click(function(){
    $(".modal1NewDoc").hide();
});
</script>

    </td>
    <td align="center">
    
    <div style="position: relative; cursor:pointer" id="modal1ChangeUser">
<a style="display:block; font-size: 15px; margin: 5px 0 2px 0; padding: 0 0 5px 0; border-bottom: 1px solid #DDD"><strong>AyBill</strong> <span style="color:#CCC">|</span> Иванов Иван &#9660;</a>
<a style="display:block; font-size: 11px;"><strong>Старший кошелек</strong></a>
<div style="font-size: 10px; margin: 3px 0 0 0">Всего чеков: <strong>2</strong> на сумму: <strong>8000 р.</strong></div>
    </div>
    
    <div class="modal1 modal1ChangeUser" style="margin:-10px 0 0 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>

<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0; border-bottom: 1px solid #e6e6e6">Мой кошелек</a>
<a href="#" class="content_menu_juniorUser" style="display:block; padding: 15px 0">Мой семейный кошелек
<div style="display:block; font-size: 11px; margin: 5px 0 0 0">Старший пользователь: <strong>Иванов Константин</strong></div></a>

</div>

    </td>
    <td><a href="menu.php" class="butMenu"><img src="css/img/menu.svg" /></a><a href="menu_Junior.php" class="butMenuJunior"><img src="css/img/menu.svg"></a></td>
  </tr>
</table>

<script type="text/javascript">
$("#modal1ChangeUser").click(function() {$(".modal1ChangeUser").show();});

$(".content_menu_generalUser").click(function()
{
	$(".butMenuJunior").hide();
	$(".butMenu").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<a style="display:block; font-size: 15px; margin: 5px 0 2px 0; padding: 0 0 5px 0; border-bottom: 1px solid #DDD"><strong>AyBill</strong> <span style="color:#CCC">|</span> Иванов Иван &#9660;</a><a style="display:block; font-size: 11px;"><strong>Старший кошелек</strong></a><div style="font-size: 10px; margin: 3px 0 0 0">Всего чеков: <strong>2</strong> на сумму: <strong>8000 р.</strong>';
});

$(".content_menu_juniorUser").click(function()
{
	$(".butMenuJunior").show();
	$(".butMenu").hide();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<a style="display:block; font-size: 13px; margin: 5px 0 2px 0; padding: 0 0 5px 0; border-bottom: 1px solid #DDD"><strong>AyBill</strong> <span style="color:#CCC">|</span> Мой семейный кошелек &#9660</a><a style="display:block; font-size: 11px;"><strong>Младший кошелек</strong></a><div style="font-size: 10px; margin: 3px 0 0 0">Всего чеков: <strong>5</strong> на сумму: <strong>9000 р.</strong></div>';
});

$(".editUserTitle").click(function() {$(".modal1ChangeTitle").show();});

</script>

</div>
<div class="tab1"><table width="100%" border="0" cellpadding="0" cellspacing="8">
  <tr>
    <td align="center"><strong>Принятые</strong></td>
    <td align="center" style="border-left: 1px solid #E6E6E6;"><a>Отправленные</a></td>
    <td align="center" style="border-left: 1px solid #E6E6E6;"><a>Архив</a></td>
  </tr>
</table>
</div>
<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><label>
    <select name="select" id="changeList">
      <option value="changeListShowAll">Все документы</option>
      <option  value="changeListShowCheki">Чеки</option>
      <option value="changeListShowSchet">Счета</option>
    </select>
  </label></td>
    <td width="50%" align="right"><select name="select" id="changeListDate">
      <option value="changeListShowAllDate">По дате</option>
      <option value="changeListShowAllSum">По сумме</option>
    </select></td>
  </tr>
</table>
</div>
</div>