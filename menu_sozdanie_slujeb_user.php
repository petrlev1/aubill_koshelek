<?php include 'header.php'; ?>

<?php
$menuBack = "menu_upravlenie_slujeb_users.php";
$titleName = "Создание младшего пользователя";
include 'head_menu2.php';
?>

<div class="contain2">
  <div class="containAll">
  
  <ul class="fieldList">
  <li><input type="text" size="8" placeholder="Отображаемое имя" class="inpText"></li>
  <li><input type="text" size="8" placeholder="Номер телефона" class="inpText"></li>
  <li><input type="text" size="8" placeholder="Код авторизации" class="inpText"><div class="note2">Этот код находится у подключаемого пользователя в настройках кошелька.</div></li>
</ul>

<div style="margin: 30px 0 10px 0"><strong>Список прав:</strong></div>
<br>

<div><strong>Чеки:</strong></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Создание чека</td>
    <td width="1">
    <label>
      <input type="checkbox" value="" class="checkBoxInp" checked>
      <div class="checkBox1"><span></span></div>
      </label>
      </td>
  </tr>
  <tr>
    <td>Просмотр всех чеков</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
  </tr>
  <tr>
    <td>Получение чека</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
  <tr>
    <td>Отправка чека</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
  <tr>
    <td>Погашение чека</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
</table>
<br><br>

<strong>Счета:</strong><br>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Создание счета</td>
    <td width="1">
    <label>
      <input type="checkbox" value="" class="checkBoxInp" checked>
      <div class="checkBox1"><span></span></div>
      </label>
      </td>
  </tr>
  <tr>
    <td>Отправка счета</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
  </tr>
  <tr>
    <td>Оплата счета</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
  <tr>
    <td>Отклонение счета</td>
    <td><label>
      <input type="checkbox" value="" class="checkBoxInp">
      <div class="checkBox1"><span></span></div>
      </label></td>
    </tr>
</table>
<br><br>
<div style="text-align:center">
  <a href="mladshie_users.php" class="but1" style="width: 100px;">СОЗДАТЬ</a>
</div>
  </div>
</div>
<?php include 'footer.php'; ?>