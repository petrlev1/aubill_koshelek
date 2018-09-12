<?php include 'header.php'; ?>

<?php
$titleName = "Чек АА 1234567";
include 'head_passport.php';
?>

<div class="contain2">
<div class="containAll">
<div class="pic1" style="height: 150px;"><br>
<br>
<br>
Изображение чека</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Номинал</td>
    <td><strong>1000р</strong>.</td>
  </tr>
  <tr>
    <td>От</td>
    <td><strong>Иванов Иван</strong></td>
  </tr>
  <tr>
    <td>Номер</td>
    <td><strong>ВА&nbsp;1234567</strong></td>
  </tr>
  <tr>
    <td>Банк</td>
    <td><strong>Геобанк</strong></td>
  </tr>
  <tr>
    <td>Статус</td>
    <td><strong>Принят</strong></td>
  </tr>
  <tr>
    <td>Дата выпуска</td>
    <td><strong>01.01.2017</strong></td>
  </tr>
  <tr>
    <td>Дата последней операции</td>
    <td><strong>10.01.2017</strong></td>
  </tr>
</table>
<div style="text-align: center; padding: 5px 0"><a href="#InvoysPasportHistory">История операций</a></div>
  </div>
  </div>

<div class="newDocContain">
    <a href="#" class="newDoc">ДЕЙСТВИЯ</a>
    <div class="modal1 modal1NewDoc" style="bottom: 40px; right: 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg" /></a></div>
<a href="sozdanie_cheka.php">Передать</a><br>
<br>
<a href="sozdanie_scheta.php">Получить по чеку деньги</a><br>
<br>
<a href="sozdanie_scheta.php">Безопасная оплата</a><br>
<br>
<a href="sozdanie_scheta.php">Разменять</a><br>
<br>
<a href="sozdanie_scheta.php">В залог</a><br>
<br>
<a href="sozdanie_scheta.php">Удалить</a><br>
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