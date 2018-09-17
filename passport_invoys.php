<?php include 'header.php'; ?>

<?php
$titleName = "Инвойс № 1234567";
include 'head_passport.php';
?>

<div class="contain2">
<div class="containAll">
<div class="pic1" style="height: 150px;">
  <p><br>
  <br>
    <br>
    Изображение инвойса</p>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>На сумму</td>
    <td><strong>2000р</strong>.</td>
  </tr>
  <tr>
    <td>От</td>
    <td><strong>Мосэнерго</strong></td>
  </tr>
  <tr>
    <td>Назначение платежа</td>
    <td><strong>Счет на оплату электроэнергии за апрель 2018 г.</strong></td>
  </tr>
  <tr>
    <td>Тип оплаты</td>
    <td><strong>Полная оплата</strong></td>
  </tr>
  <tr>
    <td>Статус</td>
    <td><strong>Не оплачен</strong></td>
  </tr>
  <tr>
    <td>Дата прихода</td>
    <td><strong>01.01.2018</strong></td>
  </tr>
  <tr>
    <td>Срок оплаты, до</td>
    <td><strong>10.01.2018</strong></td>
  </tr>
</table>
<div style="text-align: center; padding: 5px 0"><a href="#InvoysPasportHistory">История операций</a></div>
  </div>
  </div>

<div class="newDocContain">
    <a href="#" class="newDoc">ДЕЙСТВИЯ</a>
    <div class="modal1 modal1NewDoc" style="bottom: 40px; right: 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg" /></a></div>
<a href="#">Оплатить</a><br>
<br>
<a href="#">Передать</a><br>
<br>
<a href="#">Назначить служебному пользователю</a><br>
<br>
<a href="#">Удалить</a><br>
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
</div>

<?php include 'footer.php'; ?>