<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Untitled Document</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head>

<body>

<div class="contain1">

<div class="header0">
<div class="head1" style="padding: 3px 8px 5px 8px">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="#" class="newDoc"><img src="css/img/plus.svg"></a>
    <div class="modal1 modal1NewDoc">
<div style="text-align:right"><img src="css/img/close.svg"></div>
Создать новый:
<br>
<br>
<a href="#">Чек</a><br>
<br>
<a href="#">Счет</a><br>
<br>
<a href="#">Купон</a><br>
<br>
<a href="#">Подарочный сертификат</a></div>
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

<script type="text/javascript">
$("#modal1ChangeUser").click(function() {$(".modal1ChangeUser").show();});

$(".content_menu_generalUser").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<a style="display:block; font-size: 15px; margin: 5px 0 2px 0; padding: 0 0 5px 0; border-bottom: 1px solid #DDD"><strong>AyBill</strong> <span style="color:#CCC">|</span> Иванов Иван &#9660;</a><a style="display:block; font-size: 11px;"><strong>Старший кошелек</strong></a><div style="font-size: 10px; margin: 3px 0 0 0">Всего чеков: <strong>2</strong> на сумму: <strong>8000 р.</strong>';
});

$(".content_menu_juniorUser").click(function()
{
	$("div#content_menu_juniorUser").show();
	$("div#content_menu_generalUser").hide();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<a style="display:block; font-size: 13px; margin: 5px 0 2px 0; padding: 0 0 5px 0; border-bottom: 1px solid #DDD"><strong>AyBill</strong> <span style="color:#CCC">|</span> Мой семейный кошелек &#9660</a><a style="display:block; font-size: 11px;"><strong>Младший кошелек</strong></a><div style="font-size: 10px; margin: 3px 0 0 0">Всего чеков: <strong>5</strong> на сумму: <strong>9000 р.</strong></div>';
});

$(".editUserTitle").click(function() {$(".modal1ChangeTitle").show();});

</script>

    </td>
    <td align="right"><a href="#menu"><img src="css/img/menu.svg"></a></td>
  </tr>
</table>
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
    <select name="select" id="select">
      <option>Все документы</option>
      <option>Чеки</option>
      <option>Счета</option>
      <option>Купоны</option>
      <option>Сертификаты</option>
    </select>
  </label></td>
    <td width="50%" align="right"><select name="select" id="select">
      <option>По дате</option>
      <option>По сумме</option>
    </select></td>
  </tr>
</table>
</div>
</div>
<div class="containCheki" style="top: 136px">
<?php include 'inc/list_all.html'; ?>
</div>

<div class="downPanel"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><a class="downPanelItem">Кошелек</a></td>
    <td align="center"><a class="downPanelItem">QR-код</a></td>
    <td align="center"><a class="downPanelItem">Контакты</a></td>
  </tr>
</table>
</div>

</div>

<script type="text/javascript" src="js/myScripts.js"></script>
</div>
</body>
</html>