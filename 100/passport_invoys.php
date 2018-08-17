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
  
  <div class="panel1">
  <table width="100%" border="0" cellspacing="8" cellpadding="0">
    <tr>
      <td width="33%" align="center" valign="top"><a>Оплатить</a></td>
      <td width="33%" align="center" valign="top">
      <div class="InvoysPeredat"><a href="#docPasport_chek">Передать</a>
        <div class="modal1 modal1InvoysPeredat">
          <a href="#">На номер кошелька</a><br>
          <br>
          <a href="#">По номеру телефона</a><br>
          <br>
          <a href="#">По QR-коду</a>
          </div>
      </div></td>
      <td width="33%" align="center" valign="top"><a>Удалить</a></td>
      </tr>
      <tr>
      <td colspan="3" align="center" valign="top"><a href="#passport_naznachenie_sp" style="margin-top: 5px; display:block;">Назначить служебному пользователю</a>
      
      </td>
      </tr>
  </table>
</div>

<?php include 'footer.php'; ?>