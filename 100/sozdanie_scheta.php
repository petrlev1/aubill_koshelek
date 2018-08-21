<?php include 'header.php'; ?>

<?php
$titleName = "Новый счет";
include 'head_passport.php';
?>

<div class="contain2">
<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
<tr>
    <td valign="middle">Получатель</td>
    <td>
    <select name="select2">
        <option selected>Номер кошелька</option>
        <option>Номер телефона</option>
      </select>
    <div style="margin: 8px 0 0 0"><input name="textfield2" type="text" id="textfield2" style="width: 120px;"></div></td>
  </tr>
  <tr>
    <td valign="top">Сумма</td>
    <td><input name="textfield2" type="text" id="textfield2" size="8"></td>
  </tr>
  <tr>
    <td valign="top">Тип оплаты</td>
    <td>
    <div class="spisokPravAll">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Полная оплата</label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Предоплата</label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Оплата залога</label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">В режиме аккредитива</label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">В рассрочку
                  <div class="spisokPrav2">
                  <div style="margin: 8px 0 0 0">на <input name="textfield2" type="text" id="textfield2" style="width: 35px;"> платежей 
        <div style="margin: 2px 0 0 0">по
  <input name="textfield2" type="text" id="textfield2" style="width: 35px;"> руб.</div>
  </div>
                  </div>
                    </label>
                  </td>
                </tr>
              </table>
            </div>
      </td>
  </tr>
  <tr>
    <td valign="top">Оплатить до</td>
    <td><input name="textfield2" type="text" id="textfield2" size="8"></td>
  </tr>
</table>
  </div>
  </div>
  
  <div class="panel1">
  <table width="100%" border="0" cellspacing="8" cellpadding="0">
    <tr>
      <td align="center" valign="top">
        <div class="InvoysPeredat"><a>Передать</a></div></td>
      <td align="center" valign="top"><a>Сохранить</a></td>
      </tr>
    <tr>
      <td colspan="2" align="center" valign="top"><a style="display:block; margin: 8px 0 0 0">Сгенерировать QR-код</a></td>
      </tr>
  </table>
</div>

<?php include 'footer.php'; ?>