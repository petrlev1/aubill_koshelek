<?php include 'header.php'; ?>

<?php
$titleName = "Новый счет";
include 'head_passport.php';
?>

<div class="contain2">
<div class="containAll">

<div class="changeItem">
<li><a href="#" class="changeItemAct">Номер кошелька</a></li>
<li><a href="#">Номер телефона</a></li>
</div>

<ul class="fieldList">
  <li>
    <input type="text" size="8" placeholder="Получатель" class="inpText">
  </li>
  <li>
    <input type="text" size="8" placeholder="Сумма" class="inpText">
  </li>
</ul>
<div style="margin: 30px 0 10px 0"><strong>Тип оплаты:</strong></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Полная оплата</td>
    <td width="1">
    <label>
      <input type="checkbox" value="" class="checkBoxInp" checked>
      <div class="checkBox1"><span></span></div>
      </label>
      </td>
  </tr>
  <tr>
    <td>Предоплата</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
  </tr>
  <tr>
    <td>Оплата залога</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
  <tr>
    <td>В режиме аккредитива</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
  <tr>
    <td>В рассрочку</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
</table>

<ul class="fieldList">
  <li>
    <input type="text" size="8" placeholder="Оплатить до" class="inpText">
  </li>
</ul>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="but1" style="width: 100px;">ПЕРЕДАТЬ</div></td>
    <td align="right"><div class="but2">СОХРАНИТЬ</div></td>
  </tr>
</table>
<div style="text-align:center; margin: 15px 0 0 0"><div class="but3">СГЕНЕРИРОВАТЬ QR-КОД</div></div>
</div>
  </div>
  

<?php include 'footer.php'; ?>