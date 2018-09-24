<?php include 'header.php'; ?>

<?php
$titleName = "Инвойс № 1234567";
include 'head_passport.php';
?>

<div class="contain2">
<div class="containAll">
<div class="pic1" style="height: 150px;">
  <br>
  <br>
    <br>
    Изображение инвойса
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td class="table1FirstTd">На сумму</td>
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
<br>

<div style="text-align: center; padding: 5px 0"><a href="#InvoysPasportHistory" class="but3">История операций</a></div>
  </div>
  </div>

<a href="#" id="modal2" class="floatBut">
    <span><img src="css/img/ic_action.svg"></span>
    <p>ДЕЙСТВИЯ</p>
  </a>
<div class="modal2 modal2hide">
  <div class="modal2cont">
    <div style="text-align:right"><a href="#" class="modal2hide"><img src="css/img/close.svg" /></a></div>
    <ul class="modalList">
    <li><a href="#">Оплатить</a></li>
    <li><a href="#">Передать</a></li>
    <li><a href="#">Назначить служебному пользователю</a></li>
    <li class="modalListEnd"><a href="#">Удалить</a></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
$("#modal2").click(function(){
    $(".modal2").show();
});

$(".modal2hide").click(function(){
    $(".modal2").hide();
});
</script>

<?php include 'footer.php'; ?>