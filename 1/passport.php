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
    <td class="table1FirstTd">Номинал</td>
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
<br>

<div style="text-align: center; padding: 5px 0"><a href="#InvoysPasportHistory" class="but3">ИСТОРИЯ ОПЕРАЦИЙ</a></div>
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
    <li><a href="#">Передать чек</a></li>
    <li><a href="#">Получить по чеку деньги</a></li>
    <li><a href="#">Безопасная оплата</a></li>
    <li><a href="#">Разменять</a></li>
    <li><a href="#">В залог</a></li>
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